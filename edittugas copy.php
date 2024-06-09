<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="judul text-center mt-4">
        <h2>EDIT TUGAS</h2>
    </div>
    <br />
    <a class="btn btn-success ms-4 mb-4" href="admintugas.php" role="button">Kembali</a>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($mysqli, "select * from tugas where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>

        <div class="container-fluid">
            <form action="updatetugas.php" method="post" name="form1">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="haritanggal4" class="sr-only">Hari/Tanggal</label>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" class="form-control" id="haritanggal4" placeholder="Masukan Hari/Taanggal" name="haritanggal" value="<?php echo $d['haritanggal']; ?>">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="tugas4" class="sr-only">Tugas</label>
                    <input type="text" class="form-control" id="tugas4" placeholder="Masukan tugas" name="tugas" value="<?php echo $d['tugas']; ?>">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="mapel4" class="sr-only">Mata Pelajaran</label>
                    <input type="text" class="form-control" id="mapel4" placeholder="Masukan mapel" name="mapel" value="<?php echo $d['mapel']; ?>">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="deadline4" class="sr-only">Mata Pelajaran</label>
                    <input type="text" class="form-control" id="deadline4" placeholder="Masukan deadline" name="deadline" value="<?php echo $d['deadline']; ?>">
                </div>
                <button type="submit" name="Submit" value="Add" class="btn btn-primary ms-3 mt-2" href="admintugas.php">Update</button>

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