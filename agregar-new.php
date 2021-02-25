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
      <?php
      require("modulos/nav.php")
      ?>

      <!-- section start-page -->

      

      <!-- Contact-->

      <section class="contact" id="contact">
        <h1>Agregar hecho Importante</h1>
        <hr />

        <div class="col-md-6">
          <div class="form_cont">
            <form action="open/agregar.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
              <!-- nombre -->
              <div class="form-group">
                <div class="col-sm-12 box-ag">
                  <div class="col-sm-12 email-box">
                    <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
                  </div>
                  <div class="col-sm-12 email-box">
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" required>
                  </div>
  
                  <div class="col-sm-12">
                    <textarea class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion" cols="30"
                      rows="10"></textarea>
  
                  </div>
                </div>
                <br>
  
                <!-- boton sign up -->
                <div class="form-group">
                  <div class="col-sm-offset">
                    <a href="perfil-screen.html"><button type="submit" class="btn btn-success col-sm-12">
                        Guardar
                      </button></a>
                  </div>
                </div>
              </div>
            </form>
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
