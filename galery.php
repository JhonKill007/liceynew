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

      

     

      <section class="portfolio" id="portfolio">
        <div class="portfolio-margin">
          <h1>Gallery</h1>
          <hr />

          <!-- 1 item portoflio-->
          

          <ul class="grid">
          <?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword =  "";
            $dbname = "dbg4licey20198776";
            $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
            if($conn){
                $SELECT = "SELECT * FROM photo_gallery";
                $resultado = mysqli_query($conn,$SELECT);
                if($resultado){
                require("modulos/etiquetas-gallery.php");
                }
                else{
                    echo " se fue a la verga";
                }
            }
            else{
                echo "la coneccion fallo";
            }
            ?>
          </ul>

          
        </div>
      </section>

      <div class="clear"></div>

      <!-- partners-->

     

      <!-- Contact-->

      

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
