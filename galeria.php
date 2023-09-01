<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALERIA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&family=Castoro+Titling&family=Lobster&family=Roboto:wght@900&family=Sigmar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<?php
    if (is_uploaded_file($_FILES['imagenes']['tmp_name'][0])) {
    $cantidad= count($_FILES['imagenes']['name']);
        for ($i=0; $i < $cantidad; $i++) { 
        $dir_temporal=$_FILES['imagenes']['tmp_name'][$i];
        $nbr_archivo='imagen'.$i.'.png';
        $subir = move_uploaded_file($dir_temporal, 'imagenes/'.$nbr_archivo);
        }
    }
    $titulo=$_POST['titulo'];
      echo'
      <div class="titulo-tipografia-container">
        <div class="titulo">
        <h1>'.$titulo.'</h1>
        </div>
      <style>
      h1{}
      </style>
      ';
?>        <input type="checkbox" id="btnmenuocultar2">

        <input type="checkbox" id="btnmenutipo">
        <div class="menutipografia">
            <div class="tipografias">              
              <?php            
                for($i = 0; $i < 5; $i++){          
                  echo'           
                      <div class="tipografias-list"> 
                      <input type="radio" id="boton'.$i.'" name="botongrafia">        
                      <label id="label'.$i.'" for="boton'.$i.'">'.$titulo.'</label>            
                      </div>
                  ';}        
              ?>
              </div>          
                <div class="boton">
                  <img src="imagenes/flecha-abajo.png" alt="">
                  <label for="btnmenutipo">seleccionar tipografía</label>
                </div>
            </div>
           
    </div>       
    
    <div class="Galeria">
  <div class="imagenes">
    <?php
    for ($i = 0; $i < $cantidad; $i++) {
      echo '<img src="imagenes/imagen'.$i.'.png" >';
    }
    ?>
  </div>
  <div class="botones">
    <ul>
      <?php
      for ($i = 0; $i < $cantidad; $i++) {
        echo '
      <li>
        <input type="radio" id="sbutton' . $i . '" name="sradio">
        <label for="sbutton' . $i . '"></label>
      </li>';
      }
      ?>
    </ul>
  </div>
</div>
    
<input type="checkbox" id="btnmenuocultar" onclick="document.getElementById('btnmenuocultar2').checked = this.checked;">
    <div class="menufondo">
        <div class="boton">
                <img class="icono" src="imagenes/flecha-arriba.png" alt="">
                <label for="btnmenufondo">seleccionar fondo</label>
        </div>
    </div>

    
    <div class="ocultarmenus">           
        <label for="btnmenuocultar">
        <img src="imagenes/transparente.png" alt="">
        </label>
    </div>

        <input type="checkbox" id="btnmenufondo">
    
    
    <div class="fondo">

    <?php
    for ($i=0; $i <= $cantidad ; $i++) { 
      echo '    
      <style>
      .Galeria:has(.botones li:nth-of-type('.$i.') input[type="radio"]:checked) .imagenes img:nth-child('.$i.') {
        opacity: 1;
        z-index: 100;
      }
      </style> ';
    }
        for($i=1; $i<=22; $i++){
            echo '  <a href="#" onclick="javascript:document.body.style.backgroundImage=\'url(imagenes/w'.$i.'.jpg)\';"><img src="imagenes/w'.$i.'.jpg" alt=""></a> 
        ';
        }

    ?>
    </div>
</body>
<script>
const radios = document.querySelectorAll('.Galeria .botones input[type="radio"]');
let currentIndex = 0;

setInterval(() => {
  radios[currentIndex].checked = true;
  currentIndex = (currentIndex + 1) % radios.length;
}, 3000); // cambiar cada 3 segundos (3000 milisegundos)
</script>
</html>