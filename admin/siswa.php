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

$siswa = query("SELECT * FROM data_siswa");

?>

<?php require '../layout/sidebar.php'?>

<div class="main mb-3">
    <h3>Data Siswa</h3>
    <a href="tambah_siswa.php" class="tambah">Tambah Siswa</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama lengkap</th>
            <th>Kelas</th>
            <th>Nis</th>
            <th>No Kartu</th>
            <th>No Telepon</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($siswa as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["kelas"]; ?></td>
                <td><?= $data["nis"]; ?></td>
                <td><?= $data["no_kartu"]; ?></td>
                <td><?= $data["no_telepon"]; ?></td>
                <td>
                    <a href="edit_siswa.php?id=<?= $data ["id_siswa"]; ?>" class="edit">Edit</a>
                    <a href="hapus_siswa.php?id=<?= $data["id_siswa"]; ?>" onclick="return confirm('Anda Yakin ingin menghapus data ini?');" class="hapus">hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
    </table>
</div>