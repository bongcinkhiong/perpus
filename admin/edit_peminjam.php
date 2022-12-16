<?php 
session_start();
require 'function.php';

$id = $_GET["id"];
$siswa = query("SELECT * FROM data_peminjam WHERE id_peminjam = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(editpinjam($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data berhasil diedit');
        window.location = 'peminjam.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data siswa gagal diedit');
            // window.location = 'peminjam.php';
            </script>
        ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main mb-3">
    <div class="box">

    <h3>Edit Peminjam</h3>

    <form action="" method="POST">
    <input type="hidden" name="id_peminjam" value="<?= $siswa["id_peminjam"]; ?>">

    <label for="nama_peminjam">Nama Peminjam</label>
    <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control"  value="<?= $siswa["nama_peminjam"]; ?>"> <br /> <br>    

    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas" class="form-control"  value="<?= $siswa["kelas"]; ?>"> <br> <br>

    <label for="no_kartu">No Kartu</label>
    <input type="text" name="no_kartu" id="no_kartu" class="form-control"  value="<?= $siswa["no_kartu"]; ?>"> <br> <br>

    <label for="judul_buku">Judul Buku</label>
    <input type="text" name="judul_buku" id="judul_buku" class="form-control"  value="<?= $siswa["judul_buku"]; ?>"> <br> <br>

    <label for="jumlah_buku">Jumlah Buku</label>
    <input type="text" name="jumlah_buku" id="jumlah_buku" class="form-control" value="<?= $siswa["jumlah_buku"]; ?>"> <br> <br>

    <label for="tanggal_pinjam">Tanggal Pinjam</label> <br>
    <input type="date" value="<?= $siswa["tanggal_pinjam"]; ?>"> <br> <br>

    <label for="tanggal_kembali">Tanggal Kembali</label> <br>
    <input type="date" value="<?= $siswa["tanggal_kembali"]; ?>"> <br> <br>

    <label for="status">Status</label> <br>
    <select name="status" id="status" value="<?= $siswa["status"]; ?>">
        <option value="Proses">Proses</option>
        <option value="Verifikasi">Verifikasi</option>
    </select> <br> <br> 

    <button type="submit" name="kirim" class="submit">Edit</button>
    </form>
</div>
</div>