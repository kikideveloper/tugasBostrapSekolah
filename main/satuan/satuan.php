<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Satuan || <a href="?p=fsatuan">Tambah Data</a></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
      <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 159px;">
            Kode Satuan
          </th>

          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 204px;">
            Nama Satuan
          </th>

          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 204px;">
            Keterangan
          </th>

          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-tabel="platform(s): activate to sort column ascending">Edit</th>
          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-tabel="platform(s): activate to sort column ascending">Hapus</th>

        </tr>
      </thead>

      <tbody>

        <?php
        $query=$odb->select("satuan");
        $query->execute();
        $data=$query->fetchAll();
        foreach($data as $dsatuan){
          ?>
          <tr>
            <td><?=$dsatuan['kode_satuan']?></td>
            <td><?=$dsatuan['nama_satuan']?></td>
            <td><?=$dsatuan['keterangan']?></td>
            <td><a href="index.php?p=fesatuan&kode_satuan=<?=$dsatuan['kode_satuan']?>" class="glyphicon glyphicon-pencil"></a></td>
            <td><a href="main/osatuan.php?aksi=hapus&kode_satuan=<?=$dsatuan['kode_satuan']?>" class="glyphicon glyphicon-trash"></a></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
      
    </table>
  </div>
</div>
<div class="row">
  <div class="col-sm-5">
    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
      Showing 1 to 10 
    </div>
  </div>
  <div class="col-sm-7">
    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
      <ul class="pagination">
        <li class="paginate_button previous disabled" id="example1_previous">
          <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous
          </a>
        </li>

        <li class="paginate_button active">
          <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1
          </a>
        </li>
        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
        <li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>