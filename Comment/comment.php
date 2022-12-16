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

$comment = query("SELECT * FROM comment");
?>
<div class="main mb-3">
    <h3>comment</h3>
    <a href="tambahcomment.php" class="tambah">Comment</a>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Comment</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($comment as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["isi"]; ?></td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
    </table>
</div>