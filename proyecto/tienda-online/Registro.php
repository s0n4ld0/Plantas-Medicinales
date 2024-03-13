<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="assets/css/stylxe.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <title>Inicio de sesión</title>
</head>

<body>
   <div class="container">
      <div class="img">
         <img src="assets/img/logo-tienda-online.png" style="border-radius: 20px;">
      </div>
      <div class="login-content">
         <form method="post" action="Sesion/Register.php">
            <img src="assets/img/avatar.svg">
            <h2 class="title" style="color: white;" >Registro</h2>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <input id="usuario" class="input" name="usuario" style="border-radius: 10px;" placeholder="nombre" style="color: white;">
               </div>
            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <input type="text" class="input" id="Correo" name="Correo" style="border-radius: 10px;" placeholder="correo">
               </div>
            </div>


            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <input type="password" id="Contra" class="input" name="Contra" style="border-radius: 10px;" placeholder="contraseña">
               </div>
            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <input type="text" class="input" id="D" name="Direccion" style="border-radius: 10px;" placeholder="direccion">
               </div>
            </div>

            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>

            <div class="text-center">
               <a class="font-italic isai5" href="" style="color: white;">Olvidé mi contraseña</a>
               <a class="font-italic isai5" href="Login.php" style="color: white;">Iniciar sesión</a>
            </div>
            <button class="btn" type="button" id="AK">Registrarse</button>
         </form>
      </div>
   </div>

   <script src="assets/js/fontawesome.js"></script>
   <script src="assets/js/main.js"></script>
   <script src="assets/js/main2.js"></script>
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.js"></script>
   <script src="assets/js/bootstrap.bundle.js"></script>
   <script src="assets/js/bootstrap.bundle.js"></script>
   <script src="assets/js/Register.js"></script>

</body>

</html>