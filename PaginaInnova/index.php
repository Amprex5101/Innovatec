<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" />
    <title>File Upload</title>
</head>
<body>
    <header>
        <h1>Simple Drop FileUpload</h1>
    </header>

    <main>
        <h2>Carga de archivos</h2>

        <div id="dropzone">
            <p>Arrastre los archivos a esta zona <label for="archivos">o haga click aquí</label></p>
            <input type="file" id="archivos" name="archivos" multiple />
        </div>

        <ul id="fotos">
        <?php 
            $contenido = glob( "uploads/*" );
            foreach($contenido as $imagen){
                echo "<li><img src='$imagen' alt='' /></li>";
            }
        ?>

        </ul>
    </main>

    <script src="script.js"></script>
</body>
</html>