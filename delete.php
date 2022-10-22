<?php
$koneksi = mysqli_connect("localhost","root","","db_019");
$id_jhon=$_GET['id'];

$sql="delete from tbl_jhon where id_jhon=$id_jhon";
$hasil=mysqli_query($koneksi,$sql);

if(!$hasil){
    echo "<script>alert('Data GAGAL di delete');location.href='tampil.php'</script>";
}else{
    echo "<script>alert('Data BERHASIL di delete');location.href='tampil.php'</script>";
}
?>