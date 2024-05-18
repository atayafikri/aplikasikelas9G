<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SEKOLAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="atas fixed-top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#">HI! Makhluk kelas 9G!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav  ms-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="admin.php">pengumuman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admintugas.php">Tugas dan informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="judul mt-4 ms-2 text-center">
        <h2>DAFTAR PENGUMUMAN</h2>
    </div>
    <br />
    <a class="btn btn-primary m-3" href="add.php" role="button">+ TAMBAH</a>
    <br />
    <br />
    <table class="table m-3">
        <thead>
            <tr>
                <th>NO</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <?php
        include_once('koneksi.php');
        $no = 1;
        $data = mysqli_query($mysqli, "SELECT * FROM pengumuman ORDER BY id DESC");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['name']; ?></td>
                <td><?php echo $d['keterangan']; ?></td>
                <td>
                    <a class="btn btn-success" href="edit.php?id=<?php echo $d['id']; ?>" role="button">EDIT</a>
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $d['id']; ?>" role="button">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>