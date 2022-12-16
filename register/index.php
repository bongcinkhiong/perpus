<?php 
session_start();
require '../admin/function.php';

if(isset($_POST["kirim"])){
    if(tambahlogin($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data berhasil di tambahkan berhasil ditambahkan');
        window.location = '../login/index.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gagal ditambahkan');
            window.location = 'index.php';
            </script>
        ";
    }
}

?>

<html>
<head>
    <div class="rawr mb-3">

        <title>REGISTRASI</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="card">
    <div id="card-content">
        <div id="card-title">
        <a href="../login/index.php">Already Have Account</a>
            <h1><strong>REGISTRASI</strong></h1>
            <div class="underline-title"></div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="username" style="padding-top:13px">
                &nbsp;Username <br> 
            </label>
            <input id="username" class="form-content" type="text" name="username">
            <div class="form-border"></div> <br> 
            <label for="Jenis kelamin">Laki-laki</label>
            <input type="checkbox">
            <label for="">Perempuan</label>
            <input type="checkbox">
            <br> <br>
            <input type="date"> 
            <br>  <br>
            <label for="roles"></label>
            <select name="roles" id="roles">
                <option value="Admin">Admin</option>
            <option value="Siswa">Siswa</option>
            <option value="Guru">Guru</option>
        </select> <br> <br>
        <label for="Email" style="padding-top:13px">
            &nbsp;Email <br> 
          </label>
          <input id="Email" class="form-content" type="text" name="email" >
          <div class="form-border"></div>
        </select> <br>
        <label for="password" style="padding-top:13px">
            &nbsp;Password  <br>
        </label>
        <input id="password" class="form-content" type="password" name="password" >
        <div class="form-border"></div>
        </select> 
        <input id="submit-btn" type="submit" name="kirim" value="kirim" /> <br> <br>
        </form>
    </div>
</div>
</div>
</body>
</html>