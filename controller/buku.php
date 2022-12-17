<?php
    
    class Buku {
        
        private $db;

        function __construct(){
            
            # memanggil class Database
            # lalu membuat object dari class Database dengan variabel local $db

            require_once __DIR__.'/../config/db.php';
            $this->db = new Database();
        }

        function create($judul, $kategori, $jumlah, $penulis, $penerbit, $rating, $deskripsi)
        {
            // $debug = [
            //     'judul' => $judul,
            //     'kategori' => $kategori,
            //     'jumlah' => $jumlah,
            //     'penulis' => $penulis,
            //     'penerbit' => $penerbit,
            //     'rating' => $rating,
            //     'deskripsi' => $deskripsi
            // ];
            // var_dump($debug); die();
            $create = $this->db->mysqli->query("INSERT INTO tbl_buku 
                (judul_buku, kategori, jumlah, penulis, penerbit, rating, deskripsi) VALUES
                ('$judul', '$kategori', '$jumlah', '$penulis', '$penerbit', '$rating', '$deskripsi')");
            
            if (!$create) {
                return false;
            }
            return true;
        }
        function read($id)
        {
            if (!$id) {
                return false;
            }
        }
        function update($id)
        {
            if (!$id) {
                return false;
            }
        }
        function delete($id)
        {
            if (!$id) {
                return false;
            }
        }

    }

?>