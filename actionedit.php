<?php 
    $Koneksi =  mysqli_connect('localhost', 'root', '', 'db_019');
    $id = $_POST['id_jhon'];
    $nama = $_POST['nama_jhon'];
    $alamat = $_POST['alamat_jhon'];
    $query = "UPDATE tbl_jhon SET nama_jhon = '$nama', alamat_jhon = '$alamat' WHERE id_jhon = '$id'";
    $hasil = mysqli_query($Koneksi, $query);
    if ($hasil) {
        header("location: tampil.php");
    }
?>