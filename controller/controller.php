<?php

include 'model/model.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];
$role = $_SESSION['role']; 

$model = new Model();

$Produk = $model->getProduk();

function admin($role) {
    return $role === 'admin';
}
?>