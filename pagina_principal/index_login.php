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
  
<?php

/*if(isset($_SESSION["user_id"])){
  // Si el usuario ha iniciado sesión, mostramos el enlace para cerrar sesión
  echo '<li class="scroll-to-section"><a href="cerrar.php">Cerrar sesión</a></li>';
} else {
  // Si el usuario no ha iniciado sesión, mostramos los enlaces de inicio de sesión y registro
  echo '<li class="scroll-to-section"><a href="../login/login.php">Iniciar sesión</a></li>';
  echo '<li class="scroll-to-section"><a href="../registro/registro.php">Registrarse</a></li>';
}*/
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
                    <li class="scroll-to-section"><a href="cerrar.php">cerrar sesion</a></li>
                
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

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Otros Cursos</span>
                <h2>Bienbenido a Mabersa, Aqui podras encontrar todo lo que necesites</h2>
                <p>Ya sen cursos, asistencia o productos permitenos ayudarte.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">Probar Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> Que es Mabersa?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Mejores Resultados</span>
                <h2>Obtén el mejor resultado de tu esfuerzo</h2>
                <p>Tus metas y sueños seran posibles con nuestra ayuda, solo tienes que dar el paso.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Probar Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> Cual es el mejor resultado?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Aprende online</span>
                <h2>El aprendizaje en línea lo ayuda a ahorrar tiempo</h2>
                <p>Aqui podra nutrirse en todas las areas de coocimiento que desee.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Probar Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> Que son los cursos online?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="../assets/images/service-01.png" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>Grados en línea</h4>
              <p>Graduate comodamende donde quera que estes y en el momento que desees.</p>
              <div class="main-button">
                <a href="#">Leer mas</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="../assets/images/service-02.png" alt="short courses">
            </div>
            <div class="main-content">
              <h4>Cursos cortos</h4>
              <p>Puedes buscar pequeñas ayudas para aprender tolo lo que necesites.</p>
              <div class="main-button">
                <a href="#">Leer mas</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="../assets/images/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>Web de expertos</h4>
              <p>Para mas comodidad puedes aprender de expertos en el tema de tu interes.</p>
              <div class="main-button">
                <a href="#">Leer mas</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  ¿Por dónde empezamos?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Nuestro experto <strong>Jose luis giraldo</strong>, puede apoyarlo en cualquier cosa que necesite, de esta manera y con <strong>autodiciplina</strong> usted podra convertirse en alguien de elite en el mundo del aprendizaje.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  ¿Cómo trabajamos juntos?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Con nuestra ayuda podras alcanzar tu verdadero <strong>potencial</strong>, tenemos a nuestra dispocion una gran cantidad de herramientas que te ayudaran en tu camino a la excelencia.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  ¿por que mabersa es lo mejor?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Con todos los recursos que tenemos a su dispocision usted tendra a la mano todos los recursos y ayudas que no podra conseguir en ingun otro lado.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  ¿Recibiras el mejor soporte?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Por su puesto, con nuestra gran cantidad de recursos <code>templatemo business templates, templatemo gallery templates, admin dashboard templatemo, 3-column templatemo, etc.</code>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Sobre nosotros</h6>
            <h2>¿Como hacer la mejor academia online?</h2>
            <p>Nuestro objetivo es lograr ser el mas completo medio online en el mundo del aprendisaje y para lograrlo continuamente intentamos mantenernos al dia con diversas innivaciones con todo lo referente al mundo de la tecnologia.</p>
            <div class="main-button">
              <a href="#">Descubre mas</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>ultimos cursos</h6>
            <h2>ultimos cursos</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Ver todos</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">Diseño Web</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">Desarrollo</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">Trabajo</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="../assets/images/course-01.jpg" alt=""></a>
              <span class="category">Diseño web</span>
              <span class="price"><h6><em>$</em>160</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Aprende diseño web</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="../assets/images/course-02.jpg" alt=""></a>
              <span class="category">Desarrollo</span>
              <span class="price"><h6><em>$</em>340</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Cindy Walker</span>
              <h4>Tips de desarrollo web</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="../assets/images/course-03.jpg" alt=""></a>
              <span class="category">Trabajo</span>
              <span class="price"><h6><em>$</em>640</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Don Berriondo</span>
              <h4>Estrategias de mejora de negocios</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="../assets/images/course-04.jpg" alt=""></a>
              <span class="category">Desarrollo</span>
              <span class="price"><h6><em>$</em>450</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Etapas del desarrollo en linea</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="../assets/images/course-05.jpg" alt=""></a>
              <span class="category">Trabajo</span>
              <span class="price"><h6><em>$</em>320</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Sophia Rose</span>
              <h4>Como ser un mestro del duelo</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="../assets/images/course-06.jpg" alt=""></a>
              <span class="category">desarrollo</span>
              <span class="price"><h6><em>$</em>240</h6></span>
            </div>
            <div class="down-content">
              <span class="author">David Hutson</span>
              <h4>estrategias de mejora de productividad</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                   <p class="count-text ">Estudiantes Felices</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                  <p class="count-text ">Horas de aprendizaje</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                  <p class="count-text ">Estudiantes trabajando</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                  <p class="count-text ">Años de experiencia</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="../assets/images/member-01.jpg" alt="">
              <span class="category">UX Teacher</span>
              <h4>Jose Luis</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="../assets/images/member-02.jpg" alt="">
              <span class="category">Graphic Teacher</span>
              <h4>Juan camilo</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="../assets/images/member-03.jpg" alt="">
              <span class="category">Full Stack Master</span>
              <h4>El lucito69</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="../assets/images/member-04.jpg" alt="">
              <span class="category">Digital Animator</span>
              <h4>El michel</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>Por favor hablale a tus amigos de nuestra pagina, tenemos sistema de reconmendados con insentivos</p>
              <div class="author">
                <img src="../assets/images/testimonial-author.jpg" alt="">
                <span class="category">Graphic Teacher</span>
                <h4>juan Camilo</h4>
              </div>
            </div>
            <div class="item">
              <p>Aprovecha la oportunidad para aprender y construir tu futuro.</p>
              <div class="author">
                <img src="../assets/images/testimonial-author.jpg" alt="">
                <span class="category">Graphic Teacher</span>
                <h4>Juan Camilo</h4>
              </div>
            </div>
            <div class="item">
              <p>nuestros expertos pueden ayudarte en todo lo que necesites para que tengas una expereincia enriquesedora.</p>
              <div class="author">
                <img src="../assets/images/testimonial-author.jpg" alt="">
                <span class="category">Graphic Teacher</span>
                <h4>Juan camilo</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTOMONIOS</h6>
            <h2>¿Que piensas sobre esto?</h2>
            <p>Tenemos cientos de estodientes diarios que son felices de poder aprovechar esta oportunidad de aprendizaje</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>recomendaciones</h6>
            <h2>Ultimos eventos</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="../assets/images/event-01.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Diseño web</span>
                    <h4>UI Mejores practicas</h4>
                  </li>
                  <li>
                    <span>Fecha:</span>
                    <h6>16 Feb 2036</h6>
                  </li>
                  <li>
                    <span>Duracion:</span>
                    <h6>22 Hours</h6>
                  </li>
                  <li>
                    <span>Precio:</span>
                    <h6>$120</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="../assets/images/event-02.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Desarrollo</span>
                    <h4>Nuevos diseños</h4>
                  </li>
                  <li>
                    <span>Fecha:</span>
                    <h6>24 Feb 2036</h6>
                  </li>
                  <li>
                    <span>Duracion:</span>
                    <h6>30 Hours</h6>
                  </li>
                  <li>
                    <span>Precio:</span>
                    <h6>$320</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="../assets/images/event-03.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Trabajo</span>
                    <h4>Programacion web</h4>
                  </li>
                  <li>
                    <span>fecha:</span>
                    <h6>12 Mar 2036</h6>
                  </li>
                  <li>
                    <span>Duracion:</span>
                    <h6>48 Hours</h6>
                  </li>
                  <li>
                    <span>Precio:</span>
                    <h6>$440</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Feel free to contact us anytime</h2>
            <p>Thank you for choosing our templates. We provide you best CSS templates at absolutely 100% free of charge. You may support us by sharing our website to your friends.</p>
            <div class="special-offer">
              <span class="offer">off<br><em>50%</em></span>
              <h6>Valide: <em>24 April 2036</em></h6>
              <h4>Special Offer <em>50%</em> OFF!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php  include("footer.php"); ?>

</body>