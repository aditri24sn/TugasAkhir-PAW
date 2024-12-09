<?php
include 'db.php';

class Model {
    public function getProduk() {
        global $conn;
        $sql = "SELECT * FROM produk_electronics";
        return $conn->query($sql);
    }
}
?>