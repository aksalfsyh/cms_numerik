<?php 

<<<<<<< HEAD
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
=======
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
>>>>>>> 5f41790b149468e64ab6c0e62e8153d06200237d
    }

?>