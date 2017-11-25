<?php
	$kode_kategori=$ff->get('kode_kategori');
	if($kode_kategori!="")
	{
		$res=$odb->select("kategori where kode_kategori='$kode_kategori'");
		$data=$res->fetch();
	}
?>
<section class="content">
	<div class="box box">
		<div class="box-header">
			<h3 class="box-title">Edit Data Kategori</h3>
		</div>
		
	<div class="box-body">	
			<form method="post" action="main/okategori.php?aksi=ubah">
				<div class="form-group">
					<label>Nama Kategori</label>
					<input type="hidden" name="kode_kategori" value="<?=$data['kode_kategori']?>">
					<input type="text" name="nama_kategori" class="form-control" value="<?=$data['nama_kategori']?>">
				</div>
				<div class="box-footer">
					<input type="submit" class="btn btn-primary" name="btnubah" value="ubah">
				</div>
			</div>
		</div>
	</form>
</section>