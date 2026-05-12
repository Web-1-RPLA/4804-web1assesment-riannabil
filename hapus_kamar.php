<?php
require_once "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM kamar WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('kamar berhasil di hapus');
    window.location.href='kamar.php';
    </script>";
} else {
    $error_code = mysqli_errno($conn);

    if ($error_code == 1451) {
        echo "<script>
                alert('GAGAL: Kamar ini tidak bisa dihapus karena masih digunakan oleh data lain');
                window.location.href='tamu.php';
              </script>";
    } else {
        echo "gagal menghapus" . mysqli_error($conn);
    }
}
