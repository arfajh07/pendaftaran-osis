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

        body form {

            text-align: center;
            left: 38%;
            top: 23%;
            padding: px;
            position: absolute;
            background-color: #e3e5e6;

        }

        body a:hover {
            text-decoration: none !important;
            color: white;
        }

        body a {
            text-decoration: none !important;
            color: white;
        }
        body label {
            font-weight: 700;
        }
        body option {
            font-weight: 700;
        }
    </style>
</head>

<body>


    <form  action="proses_daftar.php" method="POST" class="shadow p-3 mb-5 bg-white rounded jumbotron jumbotron-fluid">
        <h2>Formulir pendaftaran siswa</h2>
        <frameset>
            <p>
                <label for="">Nama</label><br>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
            </p>
            <p>
                <label for="">Alamat</label><br>
                <textarea name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama"></textarea>
            </p>
            <p>
                <label for="">Asal Sekolah</label><br>
                <input type="text" name="asal_sekolah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
            </p>
            <p>
                <label for="">Agama</label><br>
                <select class="form-select" name="agama" id="" aria-label="Pilih">
                    <option selected>Pilih</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            
            <p>
                <label for="">Jenis Kelamin</label><br>
                <label for=""><input class="form-check-input " type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label><br>
                <label for=""><input class="form-check-input " type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar"  class="btn btn-success"/>
                <button class="btn btn-secondary"><a href="index.php">Kembali</a></button>
            </p>
        </frameset>
    </form>
</body>

</html>