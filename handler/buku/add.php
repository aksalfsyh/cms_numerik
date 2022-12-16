<?php 

    function add()
    {
        if ($_POST) {
            
            # memanggil file controller Buku
            require_once '../../controller/buku.php';
            
            # membuat object dari class Buku
            $process = new Buku();
            $create  = $process->create($_POST['judul'], $_POST['kategori'], $_POST['jumlah'], $_POST['penulis'], $_POST['penerbit'], $_POST['deskripsi']);

            if (!$create) {
                echo 'create buku gagal';
                return;
            }
            echo 'create buku sukses';
            return;
        }
    }

?>