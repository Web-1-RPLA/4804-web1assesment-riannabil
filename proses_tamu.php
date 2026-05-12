<?php
require_once "koneksi.php";

$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO tamu (nama,no_ktp,no_hp,alamat) VALUES ('$nama','$no_ktp','$no_hp','$alamat')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('tamu berhasil di tambahkan');
    window.location.href='tamu.php';
    </script>";
} else {
    echo "tamu gagal ditambahkan";
}
