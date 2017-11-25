<?php

session_start();
extract($_POST);
$action = isset($_GET['action']) ? $_GET['action'] : "";
if ($action) {
    switch ($action) {
        case 'add' :
            if (!empty($_SESSION['cart'][$kode_barang])) {
                $val = array($_SESSION['cart'][$kode_barang][0] + $jumlah, $tanggal_kadaluarsa, $harga);
                $_SESSION['cart'][$kode_barang] = $val;
            } else {
                $val = array($jumlah, $tanggal_kadaluarsa, $harga);
                $_SESSION['cart'][$kode_barang] = $val;
            }
            break;
        case 'up' :
            if (!empty($_SESSION['cart'])) {
                $jum = isset($_POST['jum']) ? $_POST['jum'] : "";

                foreach ($jum as $key => $val) {
                    $_SESSION['cart'][$key] = $val;
                }
            }
            break;
        case 'dl' :
            if (!empty($_SESSION['cart'][$id])) {
                unset($_SESSION['cart'][$id]);
            }
            break;
    }
    if (!empty($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    }
}
?>