<?php

namespace App\Models;

use CodeIgniter\Controller;
use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class studentModel extends Model{
        protected $table = 'student';
        protected $allowedFields = ['docident', 'name', 'email', 'password'];

        // Métodos para el CRUD
        public function getStudent($id = false){
            if ($id === false){
                return $this->findAll(); // retorna todos los registros de la tabla student
            }
            else{
                return $this->getWhere(['id' => $id]); // retorna la información de un solo studiante
            }
        }

        public function updateStudent($data,$id){
            $query = $this->db->table($this->table)->update($data,array('id'=>$id));
            return $query;
        }

        function deleteStudent($id){
            $query = $this->db->table($this->table)->delete(array('id'=>$id));
            return $query;
        }
    }

?>