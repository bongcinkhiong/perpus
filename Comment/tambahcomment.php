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
    if(tambahcomment($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data berhasil dikirimkan');
        window.location = '../user/index.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gagal dikirimkan');
            window.location = '../user/index.php';
            </script>
        ";
    }
}
?>
<div class="main mb-3">
    <div class="box">

    <h3>Kirim Masukkan</h3>

   <form action="" method="POST" enctype="multipart/form-data">
    <textarea name="isi" id="isi" cols="30" rows="10"></textarea>
    <button type="submit" name="kirim">Kirim</button>
    </form>
    </div>
</div>