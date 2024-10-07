<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'My Website' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css " rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-light">
    <aside class="col-1 bg-primary fixed-top h-100" style="width: 80px">
        <div class="d-flex flex-row p-3 justify-content-center">
            <button class="btn btn-white custom-toggle text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                <i class="bi bi-list fs-4"></i>
            </button>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item align-self-center my-3">
                <a href="index.php" class="nav-link link link-secondary text-white">
                    <i class="bi bi-house fs-4"></i>
                </a>
            </li>
            <li class="nav-item align-self-center my-3">
                <a href="tambahData.php" class="nav-link link link-secondary text-white">
                    <i class="bi bi-plus-square fs-4"></i>
                </a>
            </li>
        </ul>
        <div class="offcanvas offcanvas-start bg-primary" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-white d-flex justify-content-center" id="offcanvasSidebarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body  p-2">
                <ul class="nav flex-column align-items-start">
                    <li class="nav-item py-2 mt-4">
                        <a href="index.php" class="nav-link link link-secondary text-white ">
                            <i class="bi bi-house fs-4"></i>
                            <span class="fs-5 ms-2">Home</span>
                        </a>
                    </li>
                    <li class="nav-item py-2 mt-3">
                        <a href="tambahData.php" class="nav-link link link-secondary text-white">
                            <i class="bi bi-plus-square fs-4"></i>
                            <span class="fs-5 ms-2 ">Tambah Data</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <div class="content ">
        <?= $content ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>