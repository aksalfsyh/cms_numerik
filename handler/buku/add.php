<?php 

    if ($_POST) {
        # memanggil file controller Buku
        require_once '../../controller/buku.php';
        
        # membuat object dari class Buku
        $buku = new Buku();
        $create  = $buku->create($_POST['judul'], $_POST['kategori'], $_POST['jumlah'], $_POST['penulis'], $_POST['penerbit'], $_POST['rating'], $_POST['deskripsi']);
        // var_dump($create); die();
        if (!$create) {
            echo json_encode("Buku gagal dicreate");
            return;
        }
        echo json_encode("Buku berhasil dicreate");
    }else{
        echo 'Permintaan tidak diizinkan';
    }

?>