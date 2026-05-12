<?php
require_once "koneksi.php";
$sql = "SELECT * FROM kamar ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamar</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a href="index.php" class="navbar-brand">Kamar</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="reservasi.php" class="nav-link">Reservasi</a></li>
                    <li class="nav-item"><a href="kamar.php" class="nav-link">Kamar</a></li>
                    <li class="nav-item"><a href="tamu.php" class="nav-link">Tamu</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="mb-4">Pemesanan Hotel</h1>
        <a href="tambah_kamar.php" class="btn btn-primary mb-3">+ Tambah Kamar</a>
        <table class="table table-bordered table-stripped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NOMER KAMAR</th>
                    <th>TIPE KAMAR</th>
                    <th>HARGA PER MALAM</th>
                    <th>STATUS</th>
                    <th>AKsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nomor_kamar']; ?></td>
                            <td><?php echo $row['tipe_kamar']; ?></td>
                            <td><?php echo $row['harga_per_malam']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                                <a href="edit_kamar.php?id=<?php echo  $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus_kamar.php?id= <?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return  confirm('Yakin ingin menghapus data ini ?')">Hapus</a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>Belum ada data Kamar</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>