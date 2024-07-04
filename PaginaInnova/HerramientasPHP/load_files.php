<?php
$contenido = glob("../uploads/*");
if (!empty($contenido)) {
    echo '<ul id="fotos">';
    foreach ($contenido as $archivo) {
        $nombre_completo = basename($archivo);
        $extension = new SplFileInfo($nombre_completo);
        ?>
        <div class="file-card">
            <button class="close-btn" onclick="deleteFile('<?php echo $nombre_completo; ?>')">&times;</button>
            <div class="file-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="100%" fill="currentColor"
                    class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                    <path
                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                </svg>
            </div>
            <div class="file-name"><?php echo $nombre_completo; ?></div>
            <div class="file-type"><?php echo $extension->getExtension(); ?></div>
        </div>
    <?php
    }
    echo '</ul>';
} else {
    echo '<img src="img/upload-icon.png" alt="Upload Icon" class="upload-icon">';
}
?>
