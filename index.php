<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Galería</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&family=Castoro+Titling&family=Lobster&family=Roboto:wght@900&family=Sigmar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilosindex.css">
</head>
<body>    
    <div class="titulo">
        <h1>Generar Galería</h1>
    </div>

    <div class="todo">
        <div class="ingresos">            
            <form action="galeria.php" method="post" enctype="multipart/form-data">            
                <div class="ingresartitulo">
                    <label for="Titulo">Ingrese su título</label>   
                    <input type="text" name="titulo" id="Titulo" required>                             
                </div>                                    
        </div>
        <div class="archivos">        
                <div class="pedirarchivos">                
                    <input class="file" type="file" name="imagenes[]" multiple accept="image/*" id="imgs" required > 
                    <label for="imgs">Para subir sus imagenes toque aquí o arrástrelas</label>                
                </div>
                <div class="botonnext">
                    <input type="submit" value="Crear" name="subir"> 
                </div>             
            </form>
        </div>
    </div>
</body>
</html>