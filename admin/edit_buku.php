<?php 
session_start();
require 'function.php';

$id = $_GET["id"];
$buku = query("SELECT * FROM data_buku WHERE id_buku = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(editbuku($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data buku berhasil diedit');
        window.location = 'buku.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data buku gagal diedit');
            window.location = 'buku.php';
            </script>
        ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main mb-3">
    <div class="box">

    <h3>Edit Buku</h3>

   <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_buku" value="<?= $buku["id_buku"]; ?>">

    <label for="nama_buku">Nama Buku</label>
    <input type="text" name="nama_buku" id="nama_buku" class="form-control" value="<?= $buku["nama_buku"]; ?>"> <br />

    <label for="stok_buku">Stok Buku</label>
    <input type="text" name="stok_buku" id="stok_buku" class="form-control" value="<?= $buku["stok_buku"]; ?>"> 

    <label for="penerbit">Penerbit</label>
    <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $buku["penerbit"]; ?>">

    <label for="deskripsi">Deskripsi</label>
    <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $buku["deskripsi"]; ?>">

    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto" class="form-control" value="<?= $buku["foto"]; ?>">

    <button type="submit" name="kirim">Edit</button>
    </form>
    </div>
</div>