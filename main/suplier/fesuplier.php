<?php
	$kode_suplier=$ff->get('kode_suplier');
	if($kode_suplier!="")
	{
		$res=$odb->select("suplier where kode_suplier='$kode_suplier'");
		$data=$res->fetch();
	}
?>
<h3>Data Baru Pengguna</h3>
<section class="content">
<div class="box">
	<div class="box-body">
	
	<form method="post" role="form" action="main/osuplier.php?action=ubah">
	
	<div class="form-group">
			<label>Nama Suplier</label>
			<input type="hidden" name="kode_suplier" value="<?=$data['kode_suplier']?>">
			<input type="text" class="form-control" name="nama_suplier" id="nama=" style="width: 40px;" value="<?=$data['nama_suplier']?>">
			</div>
			
			<div class="box-footer">
			<button type="submit" class="btn btn-primary">Save</button>
	</div>
	</form>
</div>
</section>