<?php
$archivos = $_FILES['files'];

foreach ($archivos['tmp_name'] as $indice => $tmp_name) {
    $nombre_real = $archivos['name'][$indice];
    move_uploaded_file($tmp_name, "../uploads/$nombre_real");
}

echo json_encode(array('status' => 'success', 'message' => 'Files uploaded successfully'));
?>