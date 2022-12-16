<?php
require 'function.php';

$id = $_GET["id"];

if(hapusbuku($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Data buku berhasil dihapus')
        window.location ='buku.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data buku gagal dihapus')
        window.location ='buku.php';
    </script>
    ";
}
?>