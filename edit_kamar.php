<?php
require_once "koneksi.php";

$id = $_GET['id'];
$sql_kamar = "SELECT * FROM kamar WHERE id = '$id'";
$result = mysqli_query($conn, $sql_kamar);
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
    <title>Edit Kamar</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>
    <div class="container mt-5">
        <div class="card" style="max-width: 500px; margin: auto;">
            <div class="card-header bg-primary text-white">
                <h4>Edit Kamar</h4>
            </div>
            <div class="card-body">
                <form action="proses_edit_kamar.php?id=<?php echo $row['id']; ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nomer Kamar</label>
                        <input type="text" name="nomor_kamar" class="form-control" value="<?php echo $row['nomor_kamar'] ?>">
                        <label class="form-label">TIPE KAMAR</label>
                        <input type="text" name="tipe_kamar" class="form-control" value="<?php echo $row['tipe_kamar'] ?>">
                        <label class=" form-label">harga</label>
                        <input type="text" name="harga_per_malam" class="form-control" value="<?php echo $row['harga_per_malam'] ?>">
                        <label class=" form-label">STATUS</label>
                        <input type="text" name="status" class="form-control" value="<?php echo $row['status'] ?>">
                    </div>
                    <button class=" btn btn-success">Ganti</button>
                    <a href="kamar.php" class="btn btn-secondary">batal</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>