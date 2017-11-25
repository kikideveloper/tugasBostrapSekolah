<?php
	include_once '../lib/inc.php';
	$aksi=$ff->get('aksi');
	if ($aksi=="tambah"){
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$odb->insert("kategori","'','$nama_kategori'");		
		$ff->alert("data tersimpan");
		$ff->redirect("../index.php?p=kategori");
	}
	if ($aksi=="ubah"){
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$odb->update("kategori","nama_kategori='$nama_kategori' where kode_kategori='$kode_kategori'");
		$ff->alert("data berhasil diubah");
		$ff->redirect("../index.php?p=kategori");
	}
	if ($aksi=="hapus"){
		$kode_kategori=$ff->get('kode_kategori');
		$odb->delete("kategori where kode_kategori='$kode_kategori'");
		$ff->alert("data terhapus");
		$ff->redirect("../index.php?p=kategori");
	}	
?>