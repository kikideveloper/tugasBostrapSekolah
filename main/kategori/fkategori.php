<section class="content-header">
    <h1>
        Form Kategori
    </h1>
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Input Kategori</h3>
        </div>
        <div class="box-body">
            <table>

                <form method="post" role="form" action="main/okategori.php?aksi=tambah">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" placeholder="input nama Kategori">
                    </div>
                </form>
            </table>
        </div>
        <!-- /.form group -->
        <div class="box-footer">
            <button type="submit" class="btn btn-default"><a href="../index.php">BATAL</a></button>
            <button type="submit" class="btn btn-info pull-right">SIMPAN</button>
        </div>
    </div>
</section>