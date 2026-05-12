<?php
require_once "koneksi.php";

$nomor_kamar = $_POST['nomor_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga_per_malam = $_POST['harga_per_malam'];
$status = $_POST['status'];

$sql = "INSERT INTO kamar (nomor_kamar,tipe_kamar,harga_per_malam,status) VALUES ('$nomor_kamar','$tipe_kamar','$harga_per_malam','$status')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('kamar berhasil di tambahkan');
    window.location.href='kamar.php';
    </script>";
} else {
    echo "kamar gagal ditambahkan";
}
