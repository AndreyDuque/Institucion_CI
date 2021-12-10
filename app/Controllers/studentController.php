<?php

namespace App\Controllers;

use CodeIgniter\Controller;
// invocar el modelo a utilizar con sus métodos
use App\Models\studentModel;

class studentController extends Controller
{
    public function index()
    {
        // recuperar los registros de la tabla student - instanciar el objeto 
        $student = new studentModel();
        $data['student'] = $student->getStudent(); // se genera el arreglo student
        //invocar la vista con el array $data
        echo view('studentList', $data);
    }

    function add_new()
    {
        echo view('studentCreate'); // Vista studentCreate
    }

    function create()
    {
        // Validar la información desde el servidor 
        helper(['form', 'url']);
        $val = $this->validate([
            'docident' => ["label" => "Documento de Identidad", "rules" => "required|min_length[6]|max_length[15]"],
            'name' => ["label" => "Nombre", "rules" => "required|min_length[2]|max_length[50]"],
            'email' => ["label" => "Correo Electrónico", "rules" => "required|valid_email"],
            'password' => ["label" => "Contraseña", "rules" => "required|min_length[6]|max_length[15]"]
        ]);
        // Instanciar el modelo de studentModel
        $model = new studentModel();
        if (!$val) {
            //invocar el formulario con los posibles errores
            echo view("studentCreate", [
                'validation' => $this->validator
            ]);
        } else {
            // Enviar los datos al modelo, es decir, invocar el método para guardar
            $model->save([
                'docident' => $this->request->getVar('docident'),
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password')
            ]);
            // redireccionar al método index de studentController
            return redirect()->to(base_url('/index.php/studentController'));
        }
    }

    function edit($id)
    {
        $model = new studentModel();
        $data['student'] = $model->getStudent($id)->getRow();
        echo view('studentEdit', $data);
    }

    function update()
    {
        $model = new studentModel();
        $id = $this->request->getPost('id');
        $data = array(
            'docident' => $this->request->getPost('docident'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        );
        $model->updateStudent($data, $id);
        return redirect()->to(base_url('/index.php/studentController'));
    }

    function delete($id)
    {
        $model = new studentModel();
        $model->deleteStudent($id);
        return redirect()->to(base_url('/index.php/studentController'));
    }
}
