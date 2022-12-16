<?php

require '../koneksi.php';

function query($query){
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahsiswa($data){
    global $conn;
    $nama_lengkap =htmlspecialchars ($data["nama_lengkap"]);
    $kelas =htmlspecialchars ($data["kelas"]);
    $nis =htmlspecialchars ($data["nis"]);
    $no_kartu =htmlspecialchars ($data["no_kartu"]);
    $no_telepon=htmlspecialchars ($data["no_telepon"]);
    $query = "INSERT INTO data_siswa VALUES(NULL,'$nama_lengkap', '$kelas', '$nis','$no_kartu','$no_telepon')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
} 

function hapussiswa($id){

    global $conn;    
    mysqli_query($conn, "DELETE FROM data_siswa WHERE id_siswa = '$id'");
    return mysqli_affected_rows($conn);
}

function editsiswa($data) {
    global $conn;

    $id =htmlspecialchars ($data["id_siswa"]);
    $nama_lengkap =htmlspecialchars ($data["nama_lengkap"]);
    $kelas =htmlspecialchars ($data["kelas"]);
    $nis =htmlspecialchars ($data["nis"]);
    $no_kartu =htmlspecialchars ($data["no_kartu"]);
    $no_telepon =htmlspecialchars ($data["no_telepon"]);

    $query = "UPDATE data_siswa SET
    nama_lengkap = '$nama_lengkap',
    kelas = '$kelas',
    nis = '$nis',
    no_kartu = '$no_kartu',
    no_telepon = '$no_telepon' WHERE id_siswa = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function tambahbuku($data){
    global $conn;

    $nama_buku = htmlspecialchars($data["nama_buku"]);
    $stok_buku = htmlspecialchars($data["stok_buku"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];

    $query = "INSERT INTO data_buku VALUES(NULL, '$nama_buku', '$stok_buku', '$penerbit', '$deskripsi', '$foto')";
    move_uploaded_file($files, "../foto/".$foto);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusbuku($id){
    global $conn;    
    mysqli_query($conn, "DELETE FROM data_buku WHERE id_buku = '$id'");
    return mysqli_affected_rows($conn);

}

function editbuku($data){
    global $conn;

    $id = htmlspecialchars($data["id_buku"]);
    $nama_buku = htmlspecialchars($data["nama_buku"]);
    $stok_buku = htmlspecialchars($data["stok_buku"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];

    if(empty($foto)){
        $query = "UPDATE data_buku SET
        nama_buku = '$nama_buku',
        stok_buku = '$stok_buku',
        penerbit = '$penerbit',
        deskripsi = '$deskripsi' WHERE id_buku = '$id'";
    
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }else{
        $query = "UPDATE data_buku SET
        nama_buku = '$nama_buku',
        stok_buku = '$stok_buku',
        penerbit = '$penerbit',
        deskripsi = '$deskripsi',
        foto = '$foto' WHERE id_buku = '$id'";
        move_uploaded_file($files, "../foto".$foto);

        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }
}

function tambahlogin($data){
    global $conn;
    $username =htmlspecialchars ($data["username"]);
    $password =htmlspecialchars ($data["password"]);
    $roles = htmlspecialchars ($data["roles"]);
    $query = "INSERT INTO buatlogin VALUES(NULL,'$username','$password','$roles')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
} 

function tambahcomment($data){
    global $conn;
    $isi = htmlspecialchars($data["isi"]);
    $query = "INSERT INTO comment VALUES(NULL,'$isi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahpinjam($data){
    global $conn;
    $nama_peminjam =htmlspecialchars ($data["nama_peminjam"]);
    $kelas =htmlspecialchars ($data["kelas"]);
    $no_kartu =htmlspecialchars ($data["no_kartu"]);
    $judul_buku=htmlspecialchars ($data["judul_buku"]);
    $jumlah_buku=htmlspecialchars ($data["jumlah_buku"]);
    $tanggal_pinjam=date('y-m-d');
    $tanggal_kembali=date('y-m-d');
    $status=htmlspecialchars ($data["status"]);
    $query = "INSERT INTO data_peminjam VALUES(NULL,'$nama_peminjam', '$kelas','$no_kartu','$judul_buku','$jumlah_buku','$tanggal_pinjam','$tanggal_kembali','$status')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
} 

function hapuspinjam($id){
    global $conn;    
    mysqli_query($conn, "DELETE FROM data_peminjam WHERE id_peminjam = '$id'");
    return mysqli_affected_rows($conn);

}

function tambahpeminjaman($data){
    global $conn;
    $nama_peminjam =htmlspecialchars ($data["nama_peminjam"]);
    $kelas =htmlspecialchars ($data["kelas"]);
    $no_kartu =htmlspecialchars ($data["no_kartu"]);
    $judul_buku=htmlspecialchars ($data["judul_buku"]);
    $jumlah_buku=htmlspecialchars ($data["jumlah_buku"]);
    $tanggal_pinjam= date('y-m-d');
    $tanggal_kembali= date('y-m-d');
    $status=htmlspecialchars ($data["status"]);
    $query = "INSERT INTO data_peminjam VALUES(NULL,'$nama_peminjam', '$kelas','$no_kartu','$judul_buku','$jumlah_buku','$tanggal_pinjam','$tanggal_kembali','$status')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
} 

function editpinjam($data){
    global $conn;
    $id = $data["id_peminjam"];
    $nama_peminjam =htmlspecialchars ($data["nama_peminjam"]);
    $kelas =htmlspecialchars ($data["kelas"]);
    $no_kartu =htmlspecialchars ($data["no_kartu"]);
    $judul_buku=htmlspecialchars ($data["judul_buku"]);
    $jumlah_buku=htmlspecialchars ($data["jumlah_buku"]);
    $tanggal_pinjam= date('y-m-d');
    $tanggal_kembali= date('y-m-d');
    $status=htmlspecialchars ($data["status"]);

    $query = "UPDATE data_peminjam SET
        nama_peminjam = '$nama_peminjam',
        kelas = '$kelas',
        no_kartu = '$no_kartu',
        judul_buku = '$judul_buku',
        jumlah_buku = '$jumlah_buku',
        tanggal_pinjam = '$tanggal_pinjam',
        tanggal_kembali = '$tanggal_kembali',
        status = '$status'
        WHERE id_peminjam = '$id'";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function verifikasiPeminjam($id){
    global $conn;
    mysqli_query($conn, "UPDATE data_peminjam SET status = 'Verifikasi' WHERE id_peminjam = '$id'");
    return mysqli_affected_rows($conn);
}

?>