<section class="content-header">
    <h1>
        Penjualan
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Penjualan</h4>
                </div>
                <form method="post" action="?p=openjualan">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Faktur Penjualan</label>
                            <input type="text" name="faktur_penjualan" class="form-control" placeholder="Faktur Penjualan">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Penjualan</label>
                            <input type="text" name="tanggal_penjualan" class="form-control" id="datepicker">
                        </div>
                        <div class="form-group">
                            <label>Kode user</label>
                            <select name="kode_user" class="form-control select2">
                                <?php
                                $query = $odb->select("user");
                                while ($user = $query->fetch()) {
                                    echo "<option value='$user[kode_user]' selected>$user[username]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-primary pull-right">Selesai</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-xs-6">
            <div class="box">
                <h4 class="box-title">Detail Penjualan</h4>
                <form id="frm_detil">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <select name="kode_barang" class="form-control select2">
                                <?php
                                $query = $odb->select("barang");
                                while ($barang = $query->fetch()) {
                                    echo "<option value='$barang[kode_barang]' selected>$barang[nama_barang]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Jual</label>
                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Harga">
                        </div>
                    </div>
                </form>
                <div class="box-footer">
                    <button class="btn btn-primary tambah-barang pull-right" onclick="addbarang('#frm_detil');"><i class="fa fa-plus"></i>Tambahkan Barang</button>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xs-12">
            <div class="box">
                <h3 class="box-title">Data Barang</h3>
                <div class="box-body data-barang">

                </div>
            </div>
        </div>
    </div>
</section>
