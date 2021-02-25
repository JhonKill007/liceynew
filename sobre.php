<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Onepage - clean responsive HTML5 themes - thomsoon.com</title>

    <meta
      name="description"
      content="Free download theme onepage, clean and modern responsive for all"
    />
    <meta
      name="keywords"
      content="responsive, html5, onepage, themes, template, clean layout, free web"
    />
    <meta name="author" content="Thomsoon.com" />

    <link rel="shortcut icon" href="img/favicon.png" />

    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style-responsive.css" />
    
  </head>

  <body>
    <div class="container">
      <!-- section menu mobile -->
      <?php
      require("modulos/nav.php")
      ?>

      <!-- section start-page -->

      <section class="start-page parallax-background" id="home">
        <div class="opacity"></div>
        <div class="content">
          <div class="text">
            <h1>
            <span>Tigres del Licey</span>
            </h1>
            <p>Los Tigres del Licey es un equipo Dominicano de béisbol profesional fundado en 1907 Santo Domingo República Dominicana. Su casa es en el Estadio Juan Marichal o Estadio Quisqueya. Cuentan con 22 Campeonatos Nacionales y 10 Series del Caribe. Cuyo triunfo de la Liga Invernal Dominicano, fue empata el 18 de enero 2021, por el equipo de las Águilas Cibaeñas, los cuales lograron 
              obtener su triunfo No. 22.

              El equipo de los Tigres del Licey fue el primero en ganar la corona de la Liga Dominicana en 1951, el 
              mismo año que fue fundada. Es el único club que le ha ganado a todos los equipos de LIDOM en series finales (Águilas Cibaeñas dominan la serie final con 11-10; a los Leones del Escogido con 6-3; a las Estrellas Orientales con 2-1; a los Gigantes del Cibao con 2-0 y están empatados con los Toros del Este con 1-1).

              En Series del Caribe además de ser el equipo más ganador de todos los tiempos, los Tigres del Licey tienen el honor de ser el primer representante dominicano en una serie (1970).</p>

            
          </div>
          
        </div>
      </section>

     

     

      <?php
      require("modulos/footer.php");
      ?>
    </div>

 

    <script
      type="text/javascript"
      src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"
    ></script>
    <!-- jQuery -->
    <script src="js/jquery.parallax.js"></script>
    <!-- jQuery Parallax -->
    <script src="js/jquery.nicescroll.js"></script>
    <!-- jQuery NiceScroll -->
    <script src="js/jquery.sticky.js"></script>
    <!-- jQuery Stick Menu -->
    <script src="js/script.js"></script>
    <!-- All script -->
  </body>
</html>
