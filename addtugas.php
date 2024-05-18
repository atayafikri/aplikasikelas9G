<html>

<head>
    <title>Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="judulmya text-center mt-4">
        <h2>Tambah Tugas</h2>
    </div>
    <a class="btn btn-success ms-4 mt-3" href="tugasinformasi.php" role="button">Kembali</a>
    <br /><br />

    <div class="container-fluid">
        <form action="addtugas.php" method="post" name="form1">
            <div class="form-group mx-sm-3 mb-2">
                <label for="haritangga1" class="sr-only">Hari/Tanggal</label>
                <input type="text" class="form-control" id="haritanggal" placeholder="Masukan hari/tanggal" name="haritanggal">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="tugas2" class="sr-only">Tugas</label>
                <input type="text" class="form-control" id="tugas2" placeholder="Masukan tugas" name="tugas">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="mapel2" class="sr-only">Mata Pelajaran</label>
                <input type="text" class="form-control" id="mapel2" placeholder="Masukan mapel" name="mapel">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="deadline2" class="sr-only">Deadline</label>
                <input type="text" class="form-control" id="deadline" placeholder="Masukan dealine" name="deadline">
            </div>
            <button href="admintugas.php" type="submit" name="Submit" value="Add" class="btn btn-primary ms-3 mt-2">Submit</button>

        </form>
    </div>

    <?php

    // Check If form submitted, insert form data into pengumuman table.
    if (isset($_POST['Submit'])) {
        $haritanggal = $_POST['haritanggal'];
        $tugas = $_POST['tugas'];
        $mapel = $_POST['mapel'];
        $deadline = $_POST['deadline'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tugas(haritanggal,tugas,mapel,deadline) VALUES('$haritanggal','$tugas','$mapel','$deadline')");

        header("location:admintugas.php");
        // Show message when user added
        // echo "User added successfully. <a href='admin.php'>View Users</a>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>