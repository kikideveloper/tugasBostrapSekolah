<?php
	include_once'../lib/inc.php';
	$aksi=$ff->get('aksi');
	
	if ($aksi=="tambah"){
	$post=$odb->sant(INPUT_POST);
	extract($post);
	$odb->insert("suplier","'','$nama_suplier'");
	$ff->alert("data tersimpan");
	$ff->redirect("../index.php?p=suplier");
	}
	if($aksi=="ubah"){
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$odb->update("suplier","nama_suplier='$nama_suplier' where kode_suplier='$kode_suplier'");
		$ff->alert("data berhasil diubah");
		$ff->redirect("../index.php?p=suplier");
	}
	if ($aksi=="hapus") {
		$kode_suplier=$ff->get('kode_suplier');
		$odb->delete("suplier where kode_suplier='$kode_suplier'");
		$ff->alert("data terhapus");
		$ff->redirect("../index.php?p=suplier");
	}
	
?>