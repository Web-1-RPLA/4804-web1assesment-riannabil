<?php
require_once "koneksi.php";

$id = $_GET['id'];
$sql_tamu = "SELECT * FROM tamu WHERE id = '$id'";
$result = mysqli_query($conn, $sql_tamu);
$row = mysqli_fetch_assoc($result);


if (!$row) {
    die("data tidak di temukan");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tamu</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>
    <div class="container mt-5">
        <div class="card" style="max-width: 500px; margin: auto;">
            <div class="card-header bg-primary text-white">
                <h4>Edit tamu</h4>
            </div>
            <div class="card-body">
                <form action="proses_edit_tamu.php?id=<?php echo $row['id']; ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama tamu</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $row['nama'] ?>">
                        <label class="form-label">No KTP</label>
                        <input type="text" name="no_ktp" class="form-control" value="<?php echo $row['no_ktp'] ?>">
                        <label class=" form-label">No HP</label>
                        <input type="text" name="no_hp" class="form-control" value="<?php echo $row['no_hp'] ?>">
                        <label class=" form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat'] ?>">
                    </div>
                    <button class=" btn btn-success">Ganti</button>
                    <a href="tamu.php" class="btn btn-secondary">batal</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>