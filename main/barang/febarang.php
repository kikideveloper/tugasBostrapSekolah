<?php
  $kode_barang=$ff->get('kode_barang');
  if ($kode_barang!="")
  {
    $res=$odb->select("barang where kode_barang='$kode_barang'");
    $data=$res->fetch();
  }
?>
<section class="form-horizontal">
    <form method="post" role="form" action="main/obarang.php?aksi=ubah">
<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Input Barang</h3>
  </div>
  <div class="box-body">
    <input type="hidden" name="kode_barang" value="<?=$data['kode_barang']?>">
      <div class="form-group">
        <label class="col-sm-2 control-label">Kode Kategori</label>
        <div class="col-sm-10">
        <select class="form-control" name="kode_kategori">
          
          <?php
        $query=$odb->select("kategori");
        $query->execute();
        $data_kategori=$query->fetchALL();
        foreach($data_kategori as $barang){
              ?>
              <option value="<?=$barang['kode_kategori']?>">
              <?=$barang['nama_kategori']?>
                
              </option>
              <?php
            }
          ?>
          
        </select>
        </div>
      </div>
    </tr>
      <tr>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Barang</label>
        
          <div class="col-sm-10">
            <input type="text" name="nama_barang" class="form-control" value="<?=$data['nama_barang']?>">
          </div>
        
      </div>
    </tr>
    <tr>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kode Satuan</label>
        <div class="col-sm-10">
        <select class="form-control" name="kode_satuan">
          
          <?php
        $query=$odb->select("satuan");
        $query->execute();
        $data_satuan=$query->fetchALL();
        foreach($data_satuan as $satuan){
              ?>
              <option value="<?=$satuan['kode_satuan']?>">
              <?=$satuan['nama_satuan']?>
                
              </option>
              <?php
            }
          ?>
          
        </select>
        </div>
      </div>
      <div class="form-group">
        <label  class="col-sm-2 control-label">HPP</label>
        
          <div class="col-sm-10">
            <input type="text" class="form-control" name="hpp" value="<?=$data['hpp']?>">
          </div>
        
      </div>
      <div class="form-group">
        <label  class="col-sm-2 control-label">HJU</label>
        
          <div class="col-sm-10">
            <input type="text" class="form-control" name="hju" value="<?=$data['hju']?>">
          </div>
        
      </div>
      <div class="form-group">
        <label  class="col-sm-2 control-label">Stok</label>
        
          <div class="col-sm-10">
            <input type="text" class="form-control" name="stok" value="<?=$data['stok']?>">
          </div>
        
      </div>
	  

<!-- Date -->
    <div class="form-group">
      <label  class="col-sm-2 control-label">Tanggal kadaluarsa :</label>  
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
            <input type="date" class="form-control pull-right" name="tanggal_kadaluarsa" value="<?=$data['tanggal_kadaluarsa']?>">
          </div>
        
      <!-- /.input group -->
        </div>
		
		<div class="form-group">
        <label  class="col-sm-2 control-label">Barcode</label>
        
          <div class="col-sm-10">
            <input type="text" class="form-control" name="barcode" value="<?=$data['barcode']?>">
          </div>
        
      </div>
      <!-- /.form group -->
    <div class="box-footer">
        <button type="submit" class="btn btn-default"><a href="../index.php">BATAL</a></button>
        <button type="submit" class="btn btn-info pull-right">SIMPAN</button>
    </div>
  </div>
</div>
  </form>
</section>