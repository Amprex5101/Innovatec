const dropzone = document.getElementById('dropzone');
const archivos = document.getElementById('archivos');
const fotos = document.getElementById('fotos');

dropzone.addEventListener('dragover', e =>{
    e.preventDefault( );
} );

dropzone.addEventListener('drop', uploadArchivos );
archivos.addEventListener('change', uploadArchivos );

function uploadArchivos( e ){
    e.preventDefault( );
    const FD = new FormData( ); 
    const listado_archivos = e.target.id =='archivos' ? 
                                archivos.files : 
                                e.dataTransfer.files;

    for( let file of listado_archivos ){
        FD.append( 'files[]', file);
    }
    fetch( 'upload.php', { method: 'POST', body: FD } ).
    then( rta => rta.json( ) ). //es lo mismo JSON.parse( variable )
    then( json => {
        fotos.innerHTML = '';
        for( img of json ){
            fotos.innerHTML += `
                <li>
                    <img src='${ img }' alt='' />
                </li>
            `;
        }
    }). 
    catch( e => { console.error( e ); } );

    archivos.value = '';
}