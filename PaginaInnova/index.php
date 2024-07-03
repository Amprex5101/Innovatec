<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" />
    <title>INTERAI</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><img src="img/logo.png" alt="Logo" class="logo"></li>
                <li>Planes</li>
                <li>Nosotros</li>
                <li>Contacto</li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="main-container">
            <div class="container1">
                <div class="steps-box">
                    <div class="steps">
                        <ol>
                            <li class="step">
                                <div class="circle">1</div>
                                Regístrate
                            </li>
                            <li class="step">
                                <div class="circle">2</div>
                                Añade tu documento de prueba
                            </li>
                            <li class="step">
                                <div class="circle">3</div>
                                Comienza a probar
                            </li>
                        </ol>
                        <button class="btn">Siguiente</button>
                    </div>
                </div>
            </div>
            
            <div class="container2">
                <div class="upload-section">
                    <div id="dropzone">
                        <img src="img/upload-icon.png" alt="Upload Icon" class="upload-icon">
                        <p>Arrastre los archivos a esta zona <label for="archivos">o haga click aquí</label></p>
                        <input type="file" id="archivos" name="archivos" multiple />
                    </div>
                    <form>
                        <label for="bot-name">Nombre del bot</label>
                        <input type="text" id="bot-name" name="bot-name">
                        
                        <label for="instructions">Instrucciones</label>
                        <textarea id="instructions" name="instructions"></textarea>
                        
                        <label for="conversation-start">Inicio de conversación</label>
                        <input type="text" id="conversation-start" name="conversation-start">
                    </form>
                </div>
            </div>
        </div>

        <ul id="fotos">
        <?php 
            $contenido = glob( "uploads/*" );
            foreach($contenido as $imagen){
                echo "<li><img src='$imagen' alt='' /></li>";
            }
        ?>
        </ul>

        <script src="script.js"></script>
    </main>
</body>
</html>