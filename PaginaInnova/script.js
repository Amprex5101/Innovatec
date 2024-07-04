const dropzone = document.getElementById('dropzone');
const archivos = document.getElementById('archivos');
const fotos = document.getElementById('file-list');

dropzone.addEventListener('dragover', e => {
    e.preventDefault();
});

dropzone.addEventListener('drop', uploadArchivos);
archivos.addEventListener('change', uploadArchivos);

function uploadArchivos(e) {
    e.preventDefault();
    const FD = new FormData();
    const listado_archivos = e.target.id === 'archivos' ? archivos.files : e.dataTransfer.files;

    for (let file of listado_archivos) {
        FD.append('files[]', file);
    }

    fetch('HerramientasPHP/upload.php', { method: 'POST', body: FD })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                loadFiles();
            } else {
                console.error(data.message);
            }
        })
        .catch(e => { console.error(e); });

    archivos.value = '';
}

function deleteFile(fileName) {
    const formData = new FormData();
    formData.append('delete_file', fileName);

    fetch('HerramientasPHP/delete_file.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                loadFiles();
            } else {
                console.error(data.message);
            }
        })
        .catch(error => console.error('Error:', error));
}

function loadFiles() {
    fetch('HerramientasPHP/load_files.php')
        .then(response => response.text())
        .then(data => {
            fotos.innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
}

document.addEventListener('DOMContentLoaded', () => {
    loadFiles();
});
