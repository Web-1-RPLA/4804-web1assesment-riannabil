<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tamu</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>
    <div class="container mt-5">
        <div class="card" style="max-width: 500px; margin: auto;">
            <div class="card-header bg-primary text-white">
                <h4>Tambah tamu</h4>
            </div>
            <div class="card-body">
                <form action="proses_tamu.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama tamu</label>
                        <input type="text" name="nama" class="form-control">
                        <label class="form-label">No KTP</label>
                        <input type="text" name="no_ktp" class="form-control">
                        <label class="form-label">No HP</label>
                        <input type="text" name="no_hp" class="form-control">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <button class="btn btn-success">Simpan</button>
                    <a href="tamu.php" class="btn btn-secondary">batal</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>