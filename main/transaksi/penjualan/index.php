<section class="content-header">
  <h1>
   Penjualan
 </h1> 
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
     <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Penjualan</h3>
        <a href="?p=fpenjualan">Tambah Data</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
          <thead>
           <tr role="row">
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Kode Penjualan</th>
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Faktur Penjualan</th>
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Tanggal Penjualan</th>
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Total Harga</th>
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Kode User</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once"lib/class-Db.php";
          $query=$odb->select("penjualan");
          $query->execute();
          $data=$query->fetchAll();
          foreach ($data as $penjualan) {
            ?>
            <tr role="row" class="odd">
              <td><?=$penjualan['kode_penjualan']?></td>
              <td><?=$penjualan['faktur_penjualan']?></td>
              <td><?=$penjualan['tanggal_penjualan']?></td>
              <td><?=$penjualan['total_harga']?></td>
              <td><?=$penjualan['kode_user']?></td>
              <td><a href="#"><button type="button" class="btn btn-info"> Edit </button></a> &nbsp <a href="#" onclick="return confirm('Anda Yakin Akan Menghapus')"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <?php
          }

          ?>


        </tbody>
        </table>
    </div>
  </div>
</section>