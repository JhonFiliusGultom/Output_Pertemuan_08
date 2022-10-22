<?php 
    $Koneksi =  mysqli_connect('localhost', 'root', '', 'db_019');
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_jhon WHERE id_jhon = $id";
    $hasil = mysqli_query($Koneksi, $query);
    if (!$hasil) {
        echo "Gagal";
    }
    $baris = mysqli_fetch_array($hasil);
?>
<h1>
	Edit Data
</h1>
<form action="actionedit.php" method="POST">
        <div>
            <input type="hidden" name="id_jhon" value="<?php echo $baris['id_jhon']?>">
        </div>
        <div>
            <label for="nama_jhon">Nama</label>
            <input type="text" id="nama_jhon" name="nama_jhon" value="<?php echo $baris['nama_jhon']?>">
        </div>
        <div>
            <label for="alamat_jhon">Alamat</label>
            <input type="text" id="alamat_jhon" name="alamat_jhon" value="<?php echo $baris['alamat_jhon']?>">
        </div>
        <div>
            <button type="submit" name="kirim">Kirim</button>
            <button type="reset" name="kosongkan">reset</button>
        </div>
    </form>