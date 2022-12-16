<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>
    <div id="Home mb-3">

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
            <li><a href="#">Freedom</a>
            <ul>
                <li><a href="https://www.instagram.com/invites/contact/?i=1rlexapf7bvno&utm_content=pf6yd5f">Social</a></li>
                <li><a href="../comment/comment.php">Comment</a></li>
                <li><a href="About.php">About Us</a></li>
            </ul>
        </li>
        <li><a href="#">Library</a>
        <ul>
            <li><a href="#book">Book</a></li>
        </ul>
    </li>
    <li><a href="../login/index.php" onclick="return confirm ('anda yakin?')">Logout</a></li>
    <div class="kotak mb-3"></div>
</ul>
</nav>
</div>
    <div class="welcome mb-3">
        <h1>Welcome to Freedom Library</h1>
    </div>
<center>
    <h1>Data Buku</h1>
</center>
<div id="book" data-aos="flip-left" data-aos-duration="2000">
    <div class="book1">
        <center>
        <a href="detail.php"><img src="../foto/bi.png" alt="" width="190px" height="260px"></a>
            <p>Buku Bahasa Indonesia</p> <p>Bu.SH.ayu</p>
        </center>
    </div>
    
    <div class="book2">
        <center>
        <a href="detail2.php"><img src="../foto/buku.png" alt="" width="190px" height="260px"></a>
            <p>Buku Penjas</p> <p>Pak.SP.sujarto</p>
        </center>
    </div>
</div>
<footer> &copy Freedom Library</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>