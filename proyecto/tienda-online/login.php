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
         <form method="post" action="">
            <img src="assets/img/avatar.svg">
            <h2 class="title" style="color: white;">BIENVENIDO</h2>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Correo</h5>
                  <input id="usuario" type="text" class="input" name="usuario" style="border-radius: 10px;">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <input type="password"  class="input" name="password" id="Contra" style="border-radius: 10px">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>

            <div class="text-center">
               <a class="font-italic isai5" href="" style="color: white;">Olvidé mi contraseña</a>
               <a class="font-italic isai5" href="Registro.php" style="color: white;">Registrarse</a>
            </div>
            <button name="btningresar" class="btn" type="button" id = "M4" >INICIAR SESION</button>
         </form>
      </div>
   </div>


   <script src="js/fontawesome.js"></script>
   <script src="js/main.js"></script>
   <script src="js/main2.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.bundle.js"></script>
   <script src="assets/js/Login.js"></script>
</body>

</html>