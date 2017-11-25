<?php
include_once '../lib/inc.php';
$aksi=$ff->get('aksi');
if ($aksi=="tambah"){
	$post=$odb->sant(INPUT_POST);
	extract($post);
	$odb->insert("satuan","'','$nama_satuan', '$katerangan'");
	$ff->alert("data tersimpan");
	$ff->redirect("../index.php?p=satuan");
}

if ($aksi=="ubah"){
	$post=$odb->sant(INPUT_POST);
	extract($post);
	$odb->update("satuan", "nama_satuan='$nama_satuan', keterangan='$keterangan' where kode_satuan='$kode_satuan'");
	$ff->alert("data berhasil diubah");
	$ff->redirect("../index.php?p=satuan");
}

if ($aksi=="hapus"){
	$kode_satuan=$ff->get('kode_satuan');
	$odb->delete("satuan where kode_satuan='$kode_satuan'");
	$ff->alert("data terhapus");
	$ff->redirect("../index.php?p=satuan");
}
?>