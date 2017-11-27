<?php
include'lib/inc.php';
	extract($_POST);
	if(!empty($_SESSION['basket'])){
	$insPembelian = $odb->insert("pembelian","'','$faktur_pembelian','$kode_suplier','$tanggal_pembelian','','$_SESSION[user]'");
	$kode_pembelian = $odb->lastID();

	//simpan ke data detil pembelian
	$total=0;
	foreach ($_SESSION['basket'] as $key => $val) {
		$insDetil = $odb->insert("detil_pembelian","'','$kode_pembelian','$key','$val[0]','$val[2]'");

		$total += $val[0] * $val[2];
		//if($insDetil){
		//	unset($_SESSION['basket'][$key]);
		//}
	}

	//update total harga harga di tabel pembelian
	$uppembelian = $odb->update("pembelian","total_harga='$total' where kode_pembelian = '$kode_pembelian'");
	$ff->alert("Pembelian berhasil");
	unset($_SESSION['basket']);
	$ff->redirect("?p=transaksi/pembelian/index");
	}
?>