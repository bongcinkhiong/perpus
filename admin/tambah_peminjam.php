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
    if(tambahpeminjaman($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data peminjam berhasil ditambahkan');
        window.location = 'peminjam.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data siswa gagal ditambahkan');
            window.location = 'peminjam.php';
            </script>
        ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main mb-3">
    <div class="box">

   <form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" placeholder="Nama Peminjam"> <br /> <br>    

    <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Kelas"> <br> <br>

    <input type="text" name="no_kartu" id="no_kartu" class="form-control" placeholder="No Kartu"> <br> <br>

    <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Judul Buku"> <br> <br>

    <input type="text" name="jumlah_buku" id="jumlah_buku" class="form-control" placeholder="Jumlah Buku"> <br> <br>

    <label for="tanggal_pinjam">Tanggal Pinjam</label> <br>
    <input type="date"> <br> <br>

    <label for="tanggal_kembali">Tanggal Kembali</label> <br>
    <input type="date"> <br> <br>

    <label for="status">Status</label> <br>
    <select name="status" id="status">
        <option value="Proses">Proses</option>
        <option value="Verifikasi">Verifikasi</option>
    </select> <br> <br> 

    <button type="submit" name="kirim" class="submit">tambah</button>
    </form>
    </div>
</div>
</div>