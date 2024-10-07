<?php
require "database.php";
require "proses.php";

$database = new Database();
$db = $database->getConnection();

$proses = new Proses($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $proses->name = $_POST['name'];
    $proses->location = $_POST['location'];
    $proses->capacity = $_POST['capacity'];
    $proses->status = $_POST['status'];
    $proses->opening_hour = $_POST['opening_hour'];
    $proses->closing_hour = $_POST['closing_hour'];

    if ($proses->create()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambah pelanggan.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Masukan Data</title>
</head>

<body>
    <div class="header bg-white shadow-sm mb-5">
        <h2 class="title text-center py-4 fw-medium fs-3">TAMBAH DATA </h2>
    </div>
    <div class="container p-3 w-50 mt-4 d-flex justify-content-center rounded-4 bg-white shadow ">
        <div class="row w-100 mt-4">
            <form action="tambahData.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label fw-medium">Nama Gudang</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label fw-medium">Lokasi Gudang</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>

                <div class="mb-3">
                    <label for="capacity" class="form-label fw-medium">Kapasitas Gudang</label>
                    <input type="number" class="form-control" id="capacity" name="capacity" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label fw-medium">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="aktif">Aktif</option>
                        <option value="tidak_aktif">Tidak Aktif</option>
                    </select>
                </div>
                <div class="d-flex mt-3">
                    <div class="w-50">
                        <label for="opening_hour" class="form-label fw-medium">Jam Buka</label>
                        <input type="time" class="form-control" id="opening_hour" name="opening_hour" required>
                    </div>

                    <div class="w-50 ms-3">
                        <label for="closing_hour" class="form-label fw-medium ">Jam Tutup</label>
                        <input type="time" class="form-control" id="closing_hour" name="closing_hour" required>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-3">
            </form>
        </div>
    </div>

    <?php
    $content = ob_get_clean();
    include 'layout.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>