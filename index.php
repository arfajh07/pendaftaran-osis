<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Pendaftaran Siswa Baru | SMK Coding</title>

    <style>
        body {
            background-image: url(img/abtrak.jpg); 
            background-size: cover;
            background-repeat: repeat;
        }

        body button {
            margin-bottom: 5px;
        }

        body a:hover {
            text-decoration: none !important;
            color: white;
        }
        body a {
            text-decoration: none !important;
            color: white;
        }
        body form{
            text-align: center;
            left: 37%;
            top: 40%;
            padding: 20px;
            position: absolute;
            background-color: #e3e5e6;
        }
        body form{
            background-color: transparent;
        }
    </style>
</head>

<body>
    <form class="shadow p-3 mb-5 ">
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>SMK Negeri 1 Padaherang</h1>
        <nav>
            <button class="btn btn-success"><a href="form_daftar.php">Daftar Baru</a></button>
            <button class="btn btn-info"><a href="list_siswa.php">Pendaftar</a></button>
        </nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                if($_GET['status'] == 'sukses'){
                    echo 'Pendaftaran Sukses';
                }else{
                    echo 'Pendaftaran Gagal';
                }
                ?>
                <?php endif; ?>
            </p>
    </form>
</body>
</html>