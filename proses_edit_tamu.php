<?php
require_once "koneksi.php";

$id = $_GET['id'];
$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$sql = "UPDATE tamu SET
nama = '$nama',
no_ktp = '$no_ktp',
no_hp = '$no_hp',
alamat = '$alamat'
WHERE id = '$id';
";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Data berhasil di ganti');
    window.location.href='tamu.php';
    </script>";
} else {
    echo "data gagal di ubah" .  mysqli_error($conn);
}
