<section class="content">

  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Data Barang</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form method="post" action="main/obarang.php?aksi=tambah" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">

            <div class="form-group">
              <label>Kode Kategori</label>
              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name = "kode_kategori">
                <?php
                $query=$odb->select("kategori");
                $query->execute();
                $data=$query->fetchAll();
                foreach ($data as $kategori)
                {
                  ?>
                  <option value="<?=$kategori['kode_kategori']?>"><?=$kategori['nama_kategori']?>
                  </option>
                  <?php
                }
                ?>
              </select>
            
          </div>
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control my-colorpicker1 colorpicker-element" name = "nama_barang">
          </div>
          <!-- /.form-group -->
          <div class="form-group">
           <label>kode satuan</label>
           <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name = "kode_satuan">

            <?php
            $query=$odb->select("satuan");
            $query->execute();
            $data=$query->fetchAll();
            foreach ($data as $satuan)
            {
              ?>
              <option value="<?=$satuan['kode_satuan']?>"><?=$satuan['nama_satuan']?>
              </option>
              <?php
            }

            ?>
        </div>
        <div class="form-group">
          <label>Hpp</label>
          <input type="text" class="form-control my-colorpicker1 colorpicker-element" name = "hpp">
        </div>

        <div class="form-group">
          <label>Hju</label>
          <input type="text" class="form-control my-colorpicker1 colorpicker-element" name = "hju">
        </div>

        <div class="form-group">
          <label>Stok</label>
          <input type="text" class="form-control my-colorpicker1 colorpicker-element" name = "stok">
        </div>

        <div class="form-group">
          <label>Tanggal Kadaluarsa</label>

          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" id="datepicker" name = "tanggal_kadaluarsa">
          </div>
        </div>

        <div class="form-group">
          <label>Barcode</label>
          <input type="text" class="form-control my-colorpicker1 colorpicker-element" name ="barcode">
        </div>

        <div class="box-footer">
          <input type="submit" class="btn btn-primary" name= "btnsave" value="Save">
        </div>

      </div>
      <!-- /.form-group -->
    </div>
    <!-- /.col -->

  </label>
</div>
</div>
<!-- /.box-body -->

</div>
<!-- /.box -->
</div>
<!-- /.col (right) -->
</div>
<!-- /.row -->

</section>