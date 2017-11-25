<?php
include_once '../lib/inc.php';
$aksi=$ff->get('aksi');
if ($aksi=="tambah"){
	$post=$odb->sant(INPUT_POST);
	extract($post);
	$odb->insert("barang", "'','$kode_kategori', '$nama_barang', '$kode_satuan', '$hpp', '$hju', '$stok', '$tanggal_kadaluarsa', '$barcode'");
	$ff->alert("data tersimpan");
	$ff->redirect("../index.php?p=barang");
	}

	if ($aksi=="ubah"){
	$post=$odb->sant(INPUT_POST);
	extract($post);
	$odb->update("barang","kode_kategori='$kode_kategori',nama_barang='$nama_barang',kode_satuan='$kode_satuan',hpp='$hpp',hju='$hju',stok='$stok',tanggal_kadaluarsa='$tanggal_kadaluarsa' where kode_barang='$kode_barang'");
	$ff->alert("Data Berhasil Diubah");
	$ff->redirect("../index.php?p=barang");
	}

	if ($aksi=="hapus"){
	$kode_barang=$ff->get('kode_barang');
	$odb->delete("barang where kode_barang='$kode_barang'");
	$ff->alert("data terhapus");
	$ff->redirect("../index.php?p=barang");
	}
?>