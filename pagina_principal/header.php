<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Scholar - Online School HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../assets/css/style.css">
 
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>


  <!-- ***** Preloader End ***** -->
   <!-- ***** Header Area Start ***** -->
   <?php
if(isset($_SESSION["user_id"])){
  // Si el usuario ha iniciado sesión, mostramos el enlace para cerrar sesión
  echo '<li class="scroll-to-section"><a href="cerrar.php">Cerrar sesión</a></li>';
} else {
  // Si el usuario no ha iniciado sesión, mostramos los enlaces de inicio de sesión y registro
  echo '<li class="scroll-to-section"><a href="../login/login.php">Iniciar sesión</a></li>';
  echo '<li class="scroll-to-section"><a href="../registro/registro.php">Registrarse</a></li>';
}
?>

<header class="header-area header-sticky">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="index.html" class="logo">
                      <h1>Mabersa</h1>
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Serach Start ***** -->
                  <div class="search-input">
                    <form id="search" action="#">
                      <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                      <i class="fa fa-search"></i>
                    </form>
                  </div>
                  <!-- ***** Serach Start ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                    <li class="scroll-to-section"><a href="../pagina_principal/index.php" class="active">Inicio</a></li>
                    <li class="scroll-to-section"><a href="#services">Servicios</a></li>
                    <li class="scroll-to-section"><a href="#courses">Cursos</a></li>
                    <li class="scroll-to-section"><a href="#team">Equipo</a></li>
                    <?php
                    // Aquí agregamos la comprobación para mostrar el enlace de inicio de sesión o el de cerrar sesión
                    if(isset($_SESSION["user_id"])){
                      echo '<li class="scroll-to-section"><a href="cerrar.php">Cerrar sesión</a></li>';
                    } else {
                      echo '<li class="scroll-to-section"><a href="../login/login.php">Iniciar sesión</a></li>';
                      echo '<li class="scroll-to-section"><a href="../registro/registro.php">Registrarse</a></li>';
                    }
                    ?>
                </ul>   
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>

  <!-- ***** Header Area End ***** -->