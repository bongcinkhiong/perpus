<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <!-- CSS only -->
</head>
<body>
    <div class="tir mb-3">

        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Freedom</a>
                <ul>
                    <li><a href="https://www.instagram.com/invites/contact/?i=1rlexapf7bvno&utm_content=pf6yd5f">Social</a></li>
                    <li><a href="../comment/comment.php">Comment</a></li>
                    <li><a href="About.php">About Us</a></li>
                </ul>
            </li>
            <li><a href="#">Library</a>
                <ul>
                    <li><a href="index.php">Book</a></li>
                </ul>
            </li>
            <li><a href="../login/index.php" onclick="return confirm ('anda yakin?')">Logout</a></li>
        </ul>
    </nav>
</div>
    
    <div class="card">
        <?php 
session_start();
require '../admin/function.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
    alert('Silahkan login terlebih dahulu')
    window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(tambahpinjam($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data berhasil dikirimkan');
        window.location = 'verfikasi.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gagal dikirimkan');
            window.location = 'pinjam.php';
            </script>
        ";
    }
}

?>

<div class="main ">
    <div class="box ">

    <h3>Halaman Peminjaman</h3> <br>

   <form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" placeholder="Nama Peminjam"> <br /> <br>    

    <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Kelas"> <br> <br>

    <input type="text" name="no_kartu" id="no_kartu" class="form-control" placeholder="No Kartu"> <br> <br>

    <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Judul Buku"> <br> <br>

    <input type="text" name="jumlah_buku" id="jumlah_buku" class="form-control" placeholder="Jumlah Buku"> <br> <br>

    <label for="tanggal_pinjam" class="sheehs">Tanggal Pinjam</label> <br>
    <input type="date"> <br> <br>

    <label for="tanggal_kembali" class="sheehs">Tanggal Kembali</label> <br>
    <input type="date"> <br> <br>

    <label for="status" class="sheehs">Status</label> <br>
    <select name="status" id="status">
        <option value="Proses">Proses</option>
        <option value="Verifikasi">Verifikasi</option>
    </select> <br> <br> 

    <button type="submit" name="kirim" class="submit">Kirim</button>
    </form>
    </div>
</div>
</div>
    
</body>
</html>