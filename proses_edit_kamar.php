<?php
require_once "koneksi.php";

$id = $_GET['id'];
$nomor_kamar = $_POST['nomor_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga_per_malam = $_POST['harga_per_malam'];
$status = $_POST['status'];

$sql = "UPDATE kamar SET
nomor_kamar = '$nomor_kamar',
tipe_kamar = '$tipe_kamar',
harga_per_malam = '$harga_per_malam',
status = '$status'
WHERE id = '$id';
";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Data berhasil di ganti');
    window.location.href='kamar.php';
    </script>";
} else {
    echo "data gagal di ubah" .  mysqli_error($conn);
}
