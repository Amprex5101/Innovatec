<?php 
$archivos = $_FILES['files']; //esto va a llegar en formato de array, si el name fue files[] 

foreach( $archivos['tmp_name'] as $indice => $tmp_name ){
    $nombre_real = $archivos['name'][$indice];
    move_uploaded_file( $tmp_name, "uploads/$nombre_real" );
}

$contenido = glob( "uploads/*" );
echo json_encode( $contenido );
//Jjj