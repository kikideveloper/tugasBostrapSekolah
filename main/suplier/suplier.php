<section class="content">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengguna || <a href="?p=fsuplier">tambah data</a></h3>
			 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 159px;">
                  Kode Suplier</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 204px;">
                  Nama Suplier</th>
                  </tr>
                </thead>
                <tbody>
                       <?php
						$query=$odb->select("suplier");
						$query->execute();
						$data=$query->fetchAll();
						foreach($data as $suplier){
							?>
							<tr>
							<td><?=$suplier['kode_suplier']?></td>
							<td><?=$suplier['nama_suplier']?></td>
							<td><a href="index.php?p=fesuplier&kode_suplier=<?=$suplier['kode_suplier']?>" class="glyphicon glyphicon-pencil"></a>
							</td>
							<td><a href="main/osuplier.php?aksi=hapus&kode_suplier=<?=$suplier['kode_suplier']?>" class="glyphicon glyphicon-trash"></a>
							</td>
							</tr>
							<?php
						}
						?>

                </tbody>
                
              </table>
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