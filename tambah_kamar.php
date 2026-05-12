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
    <title>Tambah Kamar</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>
    <div class="container mt-5">
        <div class="card" style="max-width: 500px; margin: auto;">
            <div class="card-header bg-primary text-white">
                <h4>Tambah Kamar</h4>
            </div>
            <div class="card-body">
                <form action="proses_kamar.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">NOMER KAMAR</label>
                        <input type="text" name="nomor_kamar" class="form-control">
                        <label class="form-label">TIPE KAMAR</label>
                        <select name="tipe_kamar" class="form-select" required>
                            <option value="">Pilih suplier</option>
                            <option value="1">Single</option>
                            <option value="2">Double</option>
                            <option value="3">Suite</option>
                        </select>
                        <!-- <input type="text" name="tipe_kamar" class="form-control"> -->
                        <label class="form-label">HARGA KAMAR</label>
                        <input type="text" name="harga_per_malam" class="form-control">
                        <label class="form-label">STATUS</label>
                        <select name="status" class="form-select">
                            <option value="">pilih status</option>
                            <option value="1">tersedia</option>
                            <option value="2">tidak tersedia</option>
                        </select>
                    </div>
                    <button class="btn btn-success">Simpan</button>
                    <a href="kamar.php" class="btn btn-secondary">batal</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>