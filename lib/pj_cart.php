<?php

session_start();
extract($_POST);
$action = isset($_GET['action']) ? $_GET['action'] : "";
if ($action) {
    switch ($action) {
        case 'add':
            if (!empty($_SESSION['pj'][$kode_barang])) {
                $val = $array($_SESSION['pj'][$kode_barang][0] + $jumlah, $harga);
                $_SESSION['pj'][$kode_barang] = $val;
            } else {
                $val = array($jumlah, $harga);
                $_SESSION['pj'][$kode_barang] = $val;
            }
            break;
        case 'up':
            if (!empty($_SESSION['pj'])) {
                $jum = isset($_POST['pj']) ? $_POST['jum'] : "";

                foreach ($jum as $key => $val) {
                    $_SESSION['pj'][$key] = $val;
                }
            }
            break;
        case 'dl':
            if (!empty($_SESSION['pj'][$id])) {
                unset($_SESSION['pj'][$id]);
            }
            break;
    }

    if (!empty($_SESSION['pj'])) {
        $pj = $_SESSION['pj'];
    }
}
?>