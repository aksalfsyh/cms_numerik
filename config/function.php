<?php 
require "conn.php";

function tambah($data){
    global $conn;
    // ambil data dari tiap elemen
    $nama       = htmlspecialchars($data["nama"]);
    $nim        = htmlspecialchars($data["nim"]);
    $email      = htmlspecialchars($data["email"]);
    $username   = htmlspecialchars($data["username"]);
    $password   = htmlspecialchars($data["pass"]);
    $alamat     = htmlspecialchars($data["alamat"]);

    //query insert data
    $query = "INSERT INTO tbl_user (nama, nim, email, username, encrypted_password, alamat)
    VALUES ('','','$nama','$nim','$email','$username','$password',$alamat)";
    
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}




?>