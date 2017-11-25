<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Data Satuan</h3>
    </div>


    <div class="box-body">
    <form method="post" action="main/osatuan.php?aksi=tambah">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nama Satuan</label>
            <input type="text" class="form-control my-colorpicker1 colorpicker-element" name="nama_satuan">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..." name = "katerangan"></textarea>
          </div>

          <div class="box-footer">
            <input type="submit" class="btn btn-primary" name= "btnsimpan" value="Save">
          </div>


          <!-- /.input group -->
        </div>

      </div>
      <!-- /.form-group -->
    </div>
    <!-- /.col -->
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