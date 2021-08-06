<?php
    include_once 'proses.php';

    $id = $_GET['CustomerID'];
    $crud = new CRUD;
    $delete = $crud->DeleteData($id);
    if ($delete){
        echo "<script>alert('Data Category berhasil dihapus');window.location = 'index.php';</script>";
    }
?>