<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list_siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>Formulir Edit Siswa | SMK Coding</title>

    <style>
        body{
            background-image: url(img/abtrak.jpg); 
            background-size: cover;
            background-repeat: repeat;
        }
        body form {
            text-align: center;
            left: 41%;
            top: 20%;
            padding: px;
            position: absolute;
            background-color: #e3e5e6;
        }
    </style>
</head>

<body>
    <header>

    </header>

    <form action="proses_edit.php" method="POST" class="shadow p-3 mb-5 bg-white rounded ">
        <h3>Formulir Edit Siswa Pendaftar</h3>
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label><br>
            <input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label><br>
            <textarea name="alamat" class="form-control"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="asal_sekolah">Sekolah Asal: </label><br>
            <input type="text" name="asal_sekolah" class="form-control" value="<?php echo $siswa['asal_sekolah'] ?>" />
        </p>
        <p>
            <label for="agama">Agama: </label><br>
            <?php $agama = $siswa['agama']; ?>
            <select class="form-select" name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
            </select>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label><br>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" class="form-check-input " value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
            <br><label><input type="radio" name="jenis_kelamin" class="form-check-input " value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
        </p>
        <p>
            <input type="submit" class="btn btn-success" value="Simpan" name="simpan" />
        </p>


    </form>

</body>

</html>