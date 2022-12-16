<?php 
session_start();
require '../koneksi.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main mb-3">
    <h2>Halo selamat datang di Freedom Library</h2>
</div>
<div class="fotoui mb-3">
    <img src="../foto/keempat.png" alt="" width="300px">
</div>