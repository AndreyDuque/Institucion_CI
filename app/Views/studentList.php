<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Listado de Estudiantes</h1>
    <a href="studentController/add_new" class="btn btn-primary">Agregar</a>
    <br>
    <br>
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Identificación</th>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <?php foreach($student as $row) :?>
            <tr>
                <td><?= $row['id'];?></td>
                <td><?= $row['docident'];?></td>
                <td><?= $row['name'];?></td>
                <td><?= $row['email'];?></td>
                <td>
                    <a href="studentController/edit/<?= $row['id'];?>" class="btn btn-warning">Editar</a>
                    <a href="studentController/delete/<?= $row['id'];?>" 
                        onclick="return confirm('Esta seguro de eliminar este Estudiante?');" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>