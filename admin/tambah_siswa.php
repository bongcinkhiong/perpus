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

if(isset($_POST["kirim"])){
    if(tambahsiswa($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data siswa berhasil ditambahkan');
        window.location = 'siswa.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data siswa gagal ditambahkan');
            window.location = 'siswa.php';
            </script>
        ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main mb-3">
    <div class="box">

    <h3>Tambah User</h3>

   <form action="" method="POST" enctype="multipart/form-data">
    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"> <br />

    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas" class="form-control"> 

    <label for="nis">nis</label>
    <input type="text" name="nis" id="nis" class="form-control">

    <label for="no_kartu">no_kartu</label>
    <input type="text" name="no_kartu" id="no_kartu" class="form-control">

    <label for="no_telepon">no_telepon</label>
    <input type="text" name="no_telepon" id="no_telepon" class="form-control">

    <button type="submit" name="kirim">tambah</button>
    </form>
    </div>
</div>