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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .write-diary-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px auto;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 18px;
            border: 2px solid #0056b3;
            text-align: center;
            max-width: 200px
        }

        .write-diary-button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .write-diary-button:active {
            transform: translateY(1px);
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .empty-message {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }
    </style>

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