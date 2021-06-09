<?php

include("config.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sklh = $_POST['asal_sekolah'];

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, asal_sekolah) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sklh')";
    $query = mysqli_query($conn, $sql);

    if( $query ){
        header('Location: index.php?status=sukses');
    }else{
        header('Location: index.php?status=gagal');
    }

}else{
    die("Akses dilarang...");
}
?>