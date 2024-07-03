<?php
if (isset($_POST['delete_file'])) {
    $file_to_delete = '../uploads/' . basename($_POST['delete_file']);
    if (file_exists($file_to_delete)) {
        unlink($file_to_delete);
        $response = array('status' => 'success', 'message' => 'File deleted successfully');
    } else {
        $response = array('status' => 'error', 'message' => 'File not found');
    }
    echo json_encode($response);
}
?>
