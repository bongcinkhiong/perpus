<?php
require 'function.php';

$id = $_GET["id"];

if(hapuspinjam($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Data berhasil dihapus')
        window.location ='peminjam.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data gagal dihapus')
        window.location ='siswa.php';
    </script>
    ";
}
?>