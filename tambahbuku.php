<?php
require_once "core/init.php";


if (isset($_POST["submit"])) {

    // var_dump($_POST);
    //cek apakah data berharil ditambahkan
    if (tambah($_POST) > 0) {
        echo "
       <script>
       alert('data berhasil ditambahkan!');
       document.location.href = 'index.php';
       </script>
       ";
    } else {
        echo "
       <script>
       alert('data gagal ditambahkan!');
       document.location.href = 'index.php';
       </script>
       ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="mx-auto">
        <div id="kotak" class="card">
            <div class="card-body">
                <form action="" method="post">


                    <div class="mb-3">
                        <label for="judulbuku" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judulbuku" name="judul buku">
                    </div>

                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori">
                    </div>

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah">
                    </div>

                    <div class="mb-3">
                        <label for="penulis" class="form-label">penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>

                    <div class="mb-3">
                        <label for="penerbit" class="form-label">penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit">
                    </div>

                    <div class="mb-3">
                        <label for="rating" class="form-label">rating</label>
                        <input type="text" class="form-control" id="rating" name="rating">
                    </div>


                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input class="form-control" type="file" id="foto">
                    </div>

                    <div class="coll-12">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>