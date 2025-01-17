<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penjadwalan | PAIS</title>
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/images/logo_ikan.png" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/penjadwalan.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <style>
    .custom-card {
        width: 300px;
        height: 150px;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="container pt-5 mx-5 mb-5">
            <div class="container">
                <h1 class="text-white">Penjadwalan</h1>
                <p class="text-white fs-4">Pakan Ikan Otomatis</p>
            </div>
        </div>

        <div class="container text-center">
            <?php $index = 1; ?>
            <?php foreach ($data['kolam'] as $kolam): ?>
            <?php if (isset($kolam['id_kolam']) && isset($kolam['nama_kolam'])): ?>
            <?php if ($index % 2 === 1): ?>
            <div class=" row mb-3">
                <?php endif; ?>
                <div class="col-sm-6">
                    <div class="d-flex justify-content-center">
                        <div class="card custom-card"
                            onclick="location.href='?controller=c_jadwal_kolam&method=jadwal_kolam&params=<?php echo urlencode($kolam['id_kolam']); ?>'">
                            <div class="card-header">
                                <p class="card-title text-start">Kolam <?php echo $index; ?></p>
                            </div>
                            <div class=" card-body d-flex align-items-center justify-content-center">
                                <h4 class="card-text fw-bold">Kolam <?php echo $kolam['nama_kolam']; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($index % 2 === 0 || $index === count($data['kolam'])): ?>
            </div>
            <?php endif; ?>
            <?php $index++; ?>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= BASEURL; ?>/js/penjadwalan.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</html>