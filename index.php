<?php
require "database.php";
require "proses.php";


$database = new Database();
$db = $database->getConnection();

$proses = new Proses($db);

$stmt = $proses->read();
$num = $stmt->rowCount();

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $stmt = $proses->search($search);
    $num = $stmt->rowCount();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Warehouse</title>
</head>

<body>

<div class="header bg-white shadow-sm mb-5">
    <h2 class="title text-center py-4 fw-semibold fs-3">DATA WAREHOUSE</h2>
</div>

<div class="container p-5 w-75 mt-4 d-flex justify-content-center rounded-4 bg-white shadow">
    <div class="table mt-5">
        <h5 class="table-header fw-bold fs-4 d-center">LIST GUDANG</h5>

        <form class="row justify-content-between" method="get">
                <div class="col-2 d-flex w-25">
                    <input type="text" class="form-control mb-3" id="text" placeholder="Search " name="search">
                    <button class="btn btn-primary mb-3 ms-3" type="submit"> <i class='bi bi-search position-relative align-middle'></i></button>
                </div>
            </form>

        <?php
        if ($num > 0) {
            echo "<table class='table table-striped table-hover '>";
            echo "<thead class=' text-center opacity-50'>
                    <tr>
                        <th>ID</th>
                        <th>NAMA GUDANG</th>
                        <th>LOKASI</th>
                        <th>KAPASITAS</th>
                        <th>STATUS</th>
                        <th>JAM BUKA</th>
                        <th>JAM TUTUP</th>
                    </tr>
                 </thead>";

            echo "<tbody class='table-group-divider text-center align-middle'>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo "<tr>";
                echo "<td>{$id}</td>";
                echo "<td>{$name}</td>";
                echo "<td>{$location}</td>";
                echo "<td>{$capacity}</td>";
                switch ($status) {
                    case 'aktif':
                        $status = '<span class="badge bg-success">Aktif</span>';
                        break;
                    case 'tidak_aktif':
                        $status = '<span class="badge bg-danger">Tidak Aktif</span>';
                        break;
                }
                echo "<td>{$status}</td>";
                echo "<td>{$opening_hour}</td>";
                echo "<td>{$closing_hour}</td>";
                echo "<td>";
                echo "<div class='btn-group d-flex justify-content-center'>";
                echo "<a href='editData.php?id={$id}' class='btn btn-sm btn-primary m-1'><i class='bi bi-pencil-fill'></i></a> ";
                echo "<a href='delete.php?id={$id}' class='btn btn-sm btn-danger m-1' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'><i class='bi bi-trash-fill'></i></a>";
                echo "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p class='alert alert-info'>Tidak ada data pelanggan.</p>";
        }
        ?>
    </div>
</div>

    <?php
    $content = ob_get_clean();
    include 'layout.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>