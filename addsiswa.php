<html>

<head>
    <title>Add siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="judulmya text-center mt-4">
        <h2>Tambah Siswa</h2>
    </div>
    <a class="btn btn-success ms-4 mt-3" href="adminsiswa.php" role="button">Kembali</a>
    <br /><br />

    <div class="container-fluid">
        <form action="addsiswa.php" method="post" name="form1">
            <div class="form-group mx-sm-3 mb-2">
                <label for="nama1" class="sr-only">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="alamat2" class="sr-only">Alamat</label>
                <input type="text" class="form-control" id="alamat2" placeholder="Masukan alamat" name="alamat">
            </div>
            <button href="adminsiswa.php" type="submit" name="Submit" value="Add" class="btn btn-primary ms-3 mt-2">Submit</button>

        </form>
    </div>

    <?php

    // Check If form submitted, insert form data into pengumuman table.
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO siswa(nama,alamat) VALUES('$nama','$alamat')");

        header("location:adminsiswa.php");
        // Show message when user added
        // echo "User added successfully. <a href='admin.php'>View Users</a>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>