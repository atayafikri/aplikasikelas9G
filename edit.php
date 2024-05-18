<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="judul text-center mt-4">
        <h2>EDIT PENGUMUMAN</h2>
    </div>
    <br />
    <a class="btn btn-success ms-4 mb-4" href="admin.php" role="button">Kembali</a>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($mysqli, "select * from pengumuman where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>

        <div class="container-fluid">
            <form action="update.php" method="post" name="form1">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="nama2" class="sr-only">Hari/Tanggal</label>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" class="form-control" id="name2" placeholder="Masukan nama" name="name" value="<?php echo $d['name']; ?>">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="keterangan3" class="sr-only">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan3" placeholder="Masukan Keterangan" name="keterangan" value="<?php echo $d['keterangan']; ?>">
                </div>
                <button type="submit" name="Submit" value="Add" class="btn btn-primary ms-3 mt-2">Update</button>

            </form>
        </div>

        <!-- <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Hari/Tanggal</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="name" value="<?php echo $d['name']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form> -->
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>