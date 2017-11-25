<section class="content-header">
    <h1>
        Purchase
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h4 class="box-title">Form Tambah Data Pembelian</h4>
                </div>
                <div class="box-body">
                    <form id="purchase" method="post" action="?p=opembelian" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Faktur Pembelian</label>
                            <input type="text" name="invoice" class="form-control select2" placeholder="Faktur Pembelian">
                        </div>
                        <div class="form-group">
                            <label>Kode Suplier</label>
                            <select class="form-control select2" name="kode_suplier" placeholder="Kode Suplier">
                                <?php
                                $query = $odb->select("suplier");
                                while ($suplier = $query->fetch()) {
                                    echo"<option value='$suplier[kode_suplier]' selected>$suplier[nama_suplier]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pembelian</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tanggal_pembelian" class="form-control" id="datepicker">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-primary pull-right">Selesai</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-xs-6">
            <div class="box">
                <div class="box-title">
                    <h4 class="box-title">Form Tambah Detil Pembelian</h4>
                </div>
                <div class="box-body">
                    <form id="frm_detil">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <div>
                                <select class="form-control select2" name="kode_barang" placeholder="Nama Barang">
                                    <?php
                                    $query = $odb->select("barang");
                                    while ($barang = $query->fetch()) {
                                        echo"<option value='$barang[kode_barang]' selected>$barang[nama_barang]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <div>
                                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kadaluarsa</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tanggal_kadaluarsa" class="form-control" id="datepicker1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Harga Satuan</label>
                            <div>
                                <input type="text" name="harga" class="form-control" placeholder="Harga">
                            </div>
                        </div>
                    </form>
                    <button class="btn btn-primary tambah-barang pull-right" onclick="addbarang('#frm_detil');"><i class="fa fa-plus"></i>Tambahkan Barang</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-title">
                    <h4 class="box-title">Data Barang</h4>
                </div>
                <div class="box-body data-barang"> 

                </div>
            </div>
        </div>
    </div>
</section>