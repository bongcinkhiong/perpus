<?php 
session_start();
require 'function.php';

$id = $_GET["id"];
$siswa = query("SELECT * FROM data_siswa WHERE id_siswa = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(editsiswa($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data siswa berhasil diedit');
        window.location = 'siswa.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data siswa gagal diedit');
            window.location = 'siswa.php';
            </script>
        ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main mb-3">
    <div class="box">

    <h3>Edit Siswa</h3>

   <form action="" method="POST">
    <input type="hidden" name="id_siswa" value="<?= $siswa["id_siswa"]; ?>">

    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $siswa["nama_lengkap"]; ?>"> <br />

    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $siswa["kelas"]; ?>"> 

    <label for="nis">NIS</label>
    <input type="text" name="nis" id="nis" class="form-control" value="<?= $siswa["nis"]; ?>">

    <label for="no_kartu">No Kartu</label>
    <input type="text" name="no_kartu" id="no_kartu" class="form-control" value="<?= $siswa["no_kartu"]; ?>">

    <label for="no_telepon">No Telepon</label>
    <input type="text" name="no_telepon" id="no_telepon" class="form-control" value="<?= $siswa["no_telepon"]; ?>">

    <button type="submit" name="kirim">Edit</button>
    </form>
    </div>
</div>