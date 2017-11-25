<?php
include'lib/inc.php';
	extract($_POST);
	if(!empty($_SESSION['pj'])){
		$insPenjualan = $odb->insert("penjualan","'','$faktur_penjualan','$tanggal_penjualan','','$_SESSION[user]'");
		$kode_penjualan = $odb->lastID();

		$total=0;
		foreach ($_SESSION as $key => $val) {
			$insDetil = $odb->insert("detil_penjualan","'','$kode_penjualan','$key','$val[0]',$val[2]'");
			$total += $val[0] * $val[2];
		}
		$uppenjualan = $odb->update("penjualan","total_harga='$total_harga' where kode_penjualan = '$kode_penjualan'");
		$ff->alert("Penjualan Berhasil");
		unset($_SESSION['pj']);
		$ff->redirect("?p=penjualan");

	}
?>