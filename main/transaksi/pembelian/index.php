<section class="content-header">
  <h1>
   Pembelian
 </h1> 
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
     <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Pembelian</h3>
        <a href="?p=fpembelian">Tambah Data</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
          <thead>
           <tr role="row">
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Kode Pembelian</th>
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Faktur Pembelian</th>
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Kode Suplier</th>
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Tanggal Pembelian</th>
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Total Harga</th>
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">Kode User</th>
            <th class="sorting_asc" aria-controls="example1" aria-sort="ascending"> </th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once"lib/class-Db.php";
          $query=$odb->select("pembelian");
          $query->execute();
          $data=$query->fetchAll();
          foreach ($data as $pembelian) {
            ?>
            <tr role="row" class="odd">
              <td><?=$pembelian['kode_pembelian']?></td>
              <td><?=$pembelian['faktur_pembelian']?></td>
              <td><?=$pembelian['kode_suplier']?></td>
              <td><?=$pembelian['tanggal_pembelian']?></td>
              <td><?=$pembelian['total_harga']?></td>
              <td><?=$pembelian['kode_user']?></td>
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
