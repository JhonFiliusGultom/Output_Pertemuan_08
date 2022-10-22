<?php
$koneksi = mysqli_connect("localhost","root","","db_019");

$sql = "select * from tbl_jhon";
$hasil = mysqli_query($koneksi,$sql);
?>
<h4>Nama : Jhon Filius Gultom<br>
NIM : 210411100019<br>
Kelas : PAW C</h4>
<a href="tambah.php">Tambah</a>
<table border="1" width="80%">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Action</td>
    </tr>
<?php
    while ($row=mysqli_fetch_assoc($hasil)){
?>
    <tr>
        <td><?=$row['id_jhon']?></td>
        <td><?=$row['nama_jhon']?></td>
        <td><?=$row['alamat_jhon']?></td>
        <td>
            <a href="delete.php?id=<?=$row['id_jhon']?>" onclick="return confirm('apakah anda sungguh benar ingin menghapus==<?php echo $row['nama_jhon']?>= Dari Database?');" >Delete</a>
            <a href="edit.php?id=<?=$row['id_jhon']?>">Edit</a>
        </td>
    </tr>
<?php } ?>
</table>