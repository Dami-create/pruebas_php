<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles.css">

    <title>Document</title>
</head>
<body>
    
    


  <!-- Header y Barra de navegación -->

   
  <div class="p-2 bg-dark text-white">




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../index.php">Aulas<span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>
</div>

       <!-- Header y Barra de navegación -->






<!-- FORMULARIO -->



  <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img3.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Crea tu cuenta</h2>

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
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Registrarse</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">¿Ya tienes una cuenta creada? <a href="/aulas_aplication/pages/login.php" class="fw-bold text-body"><u>Inicia sesión aquí</u></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




<!-- FORMULARIO -->






      <!-- Footer -->

      <footer> 

  © 2021 Copyright: Aulas_Aplication.com

      </footer>

       <!-- Footer -->




  <?php
  include "../Modelo/ABML.php";


  // Obtengo los datos enviados por el Formulario
  if (isset($_POST['txt_nom'])) {

    $id = $_POST['txt_id'];
    $ci = $_POST['txt_ci'];
    $contraseña = $_POST['txt_con'];
    $nombre = $_POST['txt_nom'];
    $apellido = $_POST['txt_ape'];
    $tipoUsuario = $_POST['txt_type'];



    // Creo un objeto de la clase ABML

    $abml = new Usuario_Model();
    $abml->AgregarMensaje($id, $ci, $contraseña, $nombre, $apellido, $tipoUsuario);
  }
  ?>

</body>

</html>