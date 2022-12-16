<?php
require 'function.php';

$id = $_GET["id"];

if(hapussiswa($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Data siswa berhasil dihapus')
        window.location ='siswa.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data siswa gagal dihapus')
        window.location ='siswa.php';
    </script>
    ";
}
?>