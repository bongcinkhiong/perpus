<?php
require 'function.php';

$id = $_GET["id"];

if(verifikasiPeminjam($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Verifikasi berhasil')
        window.location ='peminjam.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Verifikasi gagal')
        // window.location ='peminjam.php';
    </script>
    ";
}
?>