<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
include "template.php";
?>


<!-- FORMULARIO -->



<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img7.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Edita tu cuenta</h2>

                <form method="POST">

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_id"></label>
                    <input type="number" name="txt_id" class="form-control form-control-lg" placeholder="ID" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_nom"></label>
                    <input type="text" name="txt_nom" class="form-control form-control-lg" placeholder="Nombre" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_ape"></label>
                    <input type="text" name="txt_ape" class="form-control form-control-lg" placeholder="Apellido" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_type"></label>
                    <input type="text" name="txt_type" class="form-control form-control-lg" placeholder="Tipo de Usuario" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_ci"></label>
                    <input type="number" name="txt_ci" class="form-control form-control-lg" placeholder="CI" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="txt_con"></label>
                    <input type="password" name="txt_con" class="form-control form-control-lg" placeholder="Contraseña" required />
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">


                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">Modificar</button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




<!-- FORMULARIO -->



<?php
include "../Modelo/ABML.php";


// Obtengo los datos enviados por el Formulario
if (isset($_POST['txt_nom'])) {

$ci = $_POST['txt_ci'];
$contraseña = $_POST['txt_con'];    
$nombre = $_POST['txt_nom'];
$apellido = $_POST['txt_ape'];
$tipoUsuario = $_POST['txt_type'];


// Creo un objeto de la clase ABML

$abml = new Clientes_Model();
$abml->ModificarClientes($ci, $contraseña, $nombre, $apellido, $tipoUsuario);


}
    






?>




</body>
</html>