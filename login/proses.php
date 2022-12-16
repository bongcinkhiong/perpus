<?php 

require '../koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];
$roles = $_POST["roles"];

$query = mysqli_query($conn, "SELECT * FROM buatlogin WHERE username = '$username' AND password = '$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_array($query);

    if($data["roles"] == "Admin"){
        session_start();

        $_SESSION["username"] = $data["username"];
        $_SESSION["roles"] = $data["roles"];
        header("Location: ../admin/index.php");
    }else if($data["roles"] == "Siswa"){
        session_start();

        $_SESSION["username"] = $data["username"];
        $_SESSION["roles"] = $data["roles"];

        header("Location: ../user/About.php");
    }
}else{
    echo '
        <script type="text/javascript">
            alert("Akun tidak ditemukan");
            window.location: "index.php";
        </script>
    ';
}

?>