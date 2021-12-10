<?php 
  if (isset($_POST['docident']))
  {
    $docident =  $_POST['docident'];
  }
  else
  {
    $docident = "";
  }
  if (isset($_POST['name']))
  {
    $name =  $_POST['name'];
  }
  else
  {
    $name = "";
  }
  if (isset($_POST['email']))
  {
    $email =  $_POST['email'];
  }
  else
  {
    $email = "";
  }
  if (isset($_POST['password']))
  {
    $password =  $_POST['password'];
  }
  else
  {
    $password = "";
  }
   
?>
<!DOCTYPE html>
<html>
<head>
  <title>Estudiante</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
    <h1>Agregar Estudiante</h1>
    <br>
    <span style="color:red;">
        <!--La siguiente línea permite capturar en una variables los posibles errores de la
        de las validaciones que devuelve el controlador-->
        <?php $validation = \Config\Services::validation(); ?>
    </span>
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo site_url('studentController/create') ?>" method="post" accept-charset="utf-8">
          <div class="form-group">
            <label for="docident">Identificación</label>
            <input type="text" name="docident" class="form-control" id="docident" placeholder="Por favor, ingrese identificación"
              value="<?= $docident ?>">
            <!-- Error -->
            <?php if($validation->getError('docident')) {?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('docident'); ?>
                  </div>
              <?php }?>
          </div> 

          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Por favor, ingrese nombre"
              value="<?= $name ?>">
            <!-- Error -->
            <?php if($validation->getError('name')) {?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('name'); ?>
                  </div>
              <?php }?>
          </div> 
 
          <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Por favor, ingrese correo"
            value="<?= $email ?>">
            <!-- Error --> 
            <?php if($validation->getError('email')) {?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('email'); ?>
                </div>
            <?php }?>
          </div>  

          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Por favor, ingrese la contraseña"
            value="<?= $password ?>">
            <!-- Error --> 
            <?php if($validation->getError('password')) {?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('password'); ?>
                </div>
            <?php }?>
          </div> 

           <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Enviar</button>
          </div>
        </form>
      </div>
 
    </div>
  
</div>
</body>
</html>