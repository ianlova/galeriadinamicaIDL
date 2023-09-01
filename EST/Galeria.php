<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería Estática ODS</title>
    <link rel="stylesheet" href="estilos2.css">
    <link rel="shortcut icon" href="ODS/favicon.png" type="image/x-icon">
</head>
<body>
<?php
    if (is_uploaded_file($_FILES['imagenes1']['tmp_name'][0])) {
      $cantidad= count($_FILES['imagenes1']['name']);
          for ($i=0; $i < $cantidad; $i++) { 
          $dir_temporal=$_FILES['imagenes1']['tmp_name'][$i];
          $nbr_archivo=$i.'.png';
          $subir = move_uploaded_file($dir_temporal, 'imagenes/'.$nbr_archivo);
          }
      }if (is_uploaded_file($_FILES['imagenes2']['tmp_name'][0])) {
        $cantidad= count($_FILES['imagenes2']['name']);
            for ($i=0; $i < $cantidad; $i++) { 
            $dir_temporal=$_FILES['imagenes2']['tmp_name'][$i];
            $nbr_archivo=$i.'.png';
            $subir = move_uploaded_file($dir_temporal, 'imagenes/'.$nbr_archivo);
            }
        }if (is_uploaded_file($_FILES['imagenes3']['tmp_name'][0])) {
          $cantidad= count($_FILES['imagenes3']['name']);
              for ($i=0; $i < $cantidad; $i++) { 
              $dir_temporal=$_FILES['imagenes3']['tmp_name'][$i];
              $nbr_archivo=$i.'.png';
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
?>
<div class="error">
  
  <img src="ODS/error.png" alt="">
  <label>Radio de aspecto no soportado</label>
</div>

    <div class="Galeria">
      <div class="imagenes">
        <?php
        $cantidad=3;
        for ($i = 1; $i <= $cantidad; $i++) {
          echo '<img src="imagenes/' . $i . '.png" alt="">';
        }
        ?>
      </div>
  <div class="botones">
    <ul>
      <?php
      for ($i = 1; $i <= $cantidad; $i++) {
        echo '
      <li>
        <input type="radio" id="sbutton' . $i . '" name="sradio">
        <label class="pagination-item" for="sbutton' . $i . '">          
        </label>
      </li>
    <style>
    .Galeria:has(.botones li:nth-of-type('.$i.') input[type="radio"]:checked) .imagenes img:nth-child('.$i.') {
      opacity: 1;
      z-index: 100;
    }
    </style>';
      }
      ?>
    </ul>
  </div>
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