<?php include("config.php"); ?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        body {
            margin-left: 21%;
            margin-right: 21%;
            background-image: url(img/abtrak.jpg); 
            background-size: cover;
            background-repeat: repeat;

        }

        table {
            border: black;

        }

        table td {
            text-align: center!important;

        }

        .warna {
            background-color: black;
            color: white;
        }

        .total {
            margin-top: 10px;
            border: 1px solid black;
        }

        table button {
            background-color: #28a745;
            border-color: #28a745;
            display: inline-block;
            font-weight: 400;
            /* color: #212529; */
            text-align: center;
            vertical-align: middle;
            /* background-color: transparent; */
            border: 1px solid transparent;
            padding: .370rem .70rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            margin-bottom: 5px;
        }
        table a{
            text-decoration: none!important;
            color: white;
        }
        body a:hover {
            text-decoration: none !important;
            color: white;
        }
    </style>
</head>

<body class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3>Siswa yang sudah mendaftar</h3>

    <nav>
        <button btn btn-link><a href="form_daftar.php" class=".color">[+] Tambah baru</a></button>
        <button btn btn-link><a href="index.php">[-] Kehalaman utama</a></button>
    </nav>

    <br>

    <table border="1" cellspacing="0" class="table">
        <tr class="warna">
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Sekolah Asal</td>
            <td>Tindakan</td>
            <!-- <td>Selanjutnya</td> -->
        </tr>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($conn, $sql);

        while ($siswa = mysqli_fetch_array($query)) {
            echo "<tr>";

            echo "<td>" . $siswa['id'] . "</td>";
            echo "<td>" . $siswa['nama'] . "</td>";
            echo "<td>" . $siswa['alamat'] . "</td>";
            echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
            echo "<td>" . $siswa['agama'] . "</td>";
            echo "<td>" . $siswa['asal_sekolah'] . "</td>";

            echo "<td>";
            echo "<button><a href='form_edit.php?id=" . $siswa['id'] . "'>Edit</a></button> ";
            // echo "</td>";
            // echo "<td>";
            echo "<button><a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a></button>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    <!-- </table>

    <table class="total table"> -->
        <tr>
            <td>
                <p>Total : <?php echo mysqli_num_rows($query); ?></p>
            </td>
        </tr>
    </table>
</body>

</html>