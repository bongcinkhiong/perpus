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

        $siswa = query("SELECT * FROM data_peminjam");
?>

<?php require '../layout/sidebar.php'?>

<div class="main mb-3">
    <h3>Data Peminjam</h3>
    <a href="tambah_peminjam.php" class="tambah">Tambah Data</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>No Kartu</th>
            <th>Judul Buku</th>
            <th>Jumlah Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($siswa as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_peminjam"]; ?></td>
                <td><?= $data["kelas"]; ?></td>
                <td><?= $data["no_kartu"]; ?></td>
                <td><?= $data["judul_buku"]; ?></td>
                <td><?= $data["jumlah_buku"]; ?></td>
                <td><?= $data["tanggal_pinjam"]; ?></td>
                <td><?= $data["tanggal_kembali"]; ?></td>
                <td><?= $data["status"]; ?></td>
                <td>
                    <a href="verifikasi_peminjam.php?id=<?= $data["id_peminjam"]; ?>" class="verifikasi">Verifikasi</a>
                    <a href="edit_peminjam.php?id=<?= $data ["id_peminjam"]; ?>" class="edit">Edit</a>
                    <a href="hapus_peminjam.php?id=<?= $data["id_peminjam"]; ?>" onclick="return confirm('Anda Yakin ingin menghapus data ini?');" class="hapus">hapus</a>
                </td>
            </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>