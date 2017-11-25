<table class="table table-bordered table-striped">
    <tr>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Tgl Kadaluarsa</th>
        <th>Harga</th>
        <th>Sub Total</th>
        <th>Hapus</th>
    </tr>
    <?php
    include "class-Db.php";
    session_start();
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $val) {
            $q = $odb->select("barang where kode_barang='$key'");
            $data = $q->fetch();
            $nama_barang = $data['nama_barang'];
            ?>

            <tr>
                <td><?= $nama_barang ?></td>
                <td><?= $val[0] ?></td>
                <td><?= $val[1] ?></td>
                <td><?= $val[2] ?></td>
                <td><?= $val[0] * $val[2] ?></td>
                <td><button class="btn btn-danger" onclick="delbarang('<?= $key ?>');"><i class="fa fa-remove"></i></button></td>
            </tr>
            <?php
        }
    }
    ?>
</table>