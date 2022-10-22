<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_019");

$id_jhon = $_POST['id_jhon'];
$nama_jhon = $_POST['nama_jhon'];
$alamat_jhon = $_POST['alamat_jhon'];

$sql = "INSERT INTO tbl_jhon VALUES('$id_jhon','$nama_jhon','$alamat_jhon')";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "Eksekusi gagal";
}else{
    echo "Eksekusi tambah data berhasil<br>";
    echo "<a href ='tampil.php'>Show data</a>";
}

?>