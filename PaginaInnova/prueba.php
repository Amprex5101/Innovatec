<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css" />
    <link rel="stylesheet" href="CSS/documentos.css">
    <title>INTERAI</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><img src="img/logo.png" alt="Logo" class="logo">
                <li>InterAI</li>
                <span class="spacer"></span>
                <li>Planes</li>
                <li>Nosotros</li>
                <li>Contacto</li>
            </ul
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
                                <div id="step1">Regístrate</div>
                                </li>
                            <li class="step">
                                <div class="circle">2</div>
                                <div id="step">Añade tu documento de prueba</div>
                            </li>
                            <li class="step">
                                <div class="circle">3</div>
                                <div id="step3">Comienza a probar</div>
                                </li>
                        </ol>
                        <div class="containerbtn">
                        <button class="btn1" id="prevBtn">Anterior</button>
                        <button class="btn2" id="nextBtn">Siguiente</button></div>
                    
                        
                        <img src="img/inferior.png" alt="inf" class="imginf">
                    </div>
                </div>
            </div>
            
            <div class="container2">
                <div class="upload-section">
                <div id="dropzone">
                        <!-- Puse un div distinto para cargar todos los documentos que se vayan agregando-->
                        <div id="file-list">
                            <?php include 'HerramientasPHP/load_files.php'; ?>
                        </div>
                        <p>Arrastre los archivos a esta zona <label for="archivos">o haga click aquí</label></p>
                        <input type="file" id="archivos" name="archivos" multiple />
                    </div>
                    <form>
                        <label for="bot-name">Nombre del bot:</label>
                        <input type="text" id="bot-name" name="bot-name">
                        
                        <label for="instructions">Instrucciones:</label>
                        <textarea id="instructions" name="instructions"></textarea>
                        
                        <label for="conversation-start">Inicio de conversación</label>
                        <input type="text" id="conversation-start" name="conversation-start">
                    </form>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
        <script src="click.js"></script>


    </main>
 <div class="circlebody circle1"></div>
 <div class="circlebody circle2"></div>
</body>
</html>