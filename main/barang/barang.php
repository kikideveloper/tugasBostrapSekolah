    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Barang
      </h1>
    </section>
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang || <a href="?p=fbarang">Tambah Data</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="search" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Kode Barang</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Kode Kategori</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nama Barang</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Kode Satuan</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">HPP</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">HJU</th>
				  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Stok</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tanggal Kadaluarsa</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Barcode</th>
                </tr>
                </thead>
                <tbody>
                <?php
						$query=$odb->select("barang b, kategori k,satuan s where b.kode_kategori=k.kode_kategori and b.kode_satuan=s.kode_satuan");
						$query->execute();
						$data=$query->fetchAll();
						$n=1;
						foreach($data as $barang){
							?>
							<tr>
							<td><?=$n?></td>
							<td><?=$barang['nama_kategori']?></td>
							<td><?=$barang['nama_barang']?></td>
							<td><?=$barang['nama_satuan']?></td>
							<td><?=$barang['hpp']?></td>
							<td><?=$barang['hju']?></td>
							<td><?=$barang['stok']?></td>
							<td><?=$barang['tanggal_kadaluarsa']?></td>
							<td><?=$barang['barcode']?></td>
							<td><a href="index.php?p=febarang&kode_barang=<?=$barang['kode_barang']?>"
							class="glyphicon glyphicon-ok"></a></td>
							<td><a href="main/obarang.php?aksi=hapu?kode_barang=<?=$barang['kode_barang']?>"
							class="glyphicon glyphicon-trash">
							</tr>
							<?php
							$n++;
						}
						?>
                </tbody>
              </table></div></div>
              <div class="row">
              <div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 2</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li>
              <li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li>
              <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li>
              <li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>