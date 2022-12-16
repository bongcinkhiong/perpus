<?php 
session_start();
require 'function.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

$buku = query("SELECT * FROM data_buku");

?>

<?php require '../layout/sidebar.php'?>

<div class="main mb-3">
    <h3>Data Buku</h3>
    <a href="tambah_buku.php" class="tambah">Tambah Buku</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Stok Buku</th>
            <th>Penerbit</th>
            <th>Deskripsi</th>
            <th>Foto</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($buku as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_buku"]; ?></td>
                <td><?= $data["stok_buku"]; ?></td>
                <td><?= $data["penerbit"]; ?></td>
                <td><?= $data["deskripsi"]; ?></td>
                <td><img src="../foto/<?= $data["foto"]; ?>" alt="" width="80px"></td>
                <td>
                    <a href="edit_buku.php?id=<?= $data ["id_buku"]; ?>" class="edit">Edit</a>
                    <a href="hapus_buku.php?id=<?= $data["id_buku"]; ?>" onclick="return confirm('Anda Yakin ingin menghapus data ini?');" class="hapus">hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
    </table>
</div>