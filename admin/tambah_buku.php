<?php 
session_start();
require 'function.php';

if(isset($_POST["kirim"])){
    if(tambahbuku($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data buku berhasil ditambahkan');
        window.location = 'buku.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data buku gagal ditambahkan');
            window.location = 'buku.php';
            </script>
        ";
    }
}

?>
<?php require '../layout/sidebar.php'?>


<div class="main mb-3">
    <div class="box">

    <h3>Tambah Buku</h3>

   <form action="" method="POST" enctype="multipart/form-data">
    <label for="nama_buku">Nama Buku</label>
    <input type="text" name="nama_buku" id="nama_buku" class="form-control"> <br />

    <label for="stok_buku">Stok Buku</label>
    <input type="text" name="stok_buku" id="stok_buku" class="form-control"> 

    <label for="penerbit">Penerbit</label>
    <input type="text" name="penerbit" id="penerbit" class="form-control">

    <label for="deskripsi">Deskripsi</label>
    <input type="text" name="deskripsi" id="deskripsi" class="form-control">

    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto" class="form-control">

    <button type="submit" name="kirim">tambah</button>
    </form>
    </div>
</div>