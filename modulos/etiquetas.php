
                

<?php
while($art = $resultado->fetch_array()){
?>
    <img src=<?php echo $art['foto']; ?> />
    <section class="start-page parallax-background" id="home">
        <div class="opacity"></div>
        <div class="content">
          <div class="text">
            <h1>
            <span><?php echo $art['titulo']; ?></span>
            </h1>
            <p><?php echo $art['descripcion']; ?></p>
            <label for=""><?php echo $art['fecha']; ?></label>

            
          </div>
          
        </div>
      </section>

<?php
}
?>               
