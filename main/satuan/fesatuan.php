<?php
$kode_satuan=$ff->get('kode_satuan');
if($kode_satuan!=""){
	$res=$odb->select("satuan where kode_satuan='$kode_satuan'");
	$data=$res->fetch();
}
?>

<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Edit Data Satuan</h3>
		</div>

		<div class="box-body">
			<form method="post" action="main/osatuan.php?aksi=ubah">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Nama Satuan</label>
							<input type="hidden" name="kode_satuan" value="<?=$data['kode_satuan']?>">
							<input type="text" class="form-control my-colorpicker colorpicker-element" name="nama_satuan" value="<?=$data['nama_satuan']?>">
							<label>Keterangan</label> 
							<input type="text" class="form-control my-colorpicker colorpicker-element" name="keterangan" value="<?=$data['keterangan']?>"> 
						</div>

						<div class="box-footer">
							<input type="submit" class="btn btn-primary" name="btnubah" value="Edit">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>