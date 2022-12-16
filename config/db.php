<?php

class Database {
    
    # local variable dengan access-modifier private (hanya class Database saja yang dapat akses)
    # mengembalikan nilai $this->mysqli sebagai object class dari mysqli

    private $host   = "localhost";
    private $user   = "root";
    private $pwd    = "";
    private $db     = "cms";
    public  $mysqli;

    # maapin, lupa taro di __construct
    # jadi taro disini supaya auto-call, ketika object dari class Database terbuat

    function __construct(){

        $this->mysqli = new mysqli($this->host, $this->user, $this->pwd, $this->db);
        
        # check ada error tidak ?
        if ($this->mysqli->connect_error) {

            # die() dapat memberhentikan program.
            # selain die(), dapat menggunakan exit() atau return.
            die("Connection failed: " . $this->mysqli->connect_error);
        }

        # mengembalikan nilai  mysqli (public)
        return $this->mysqli;
    }
}
?>

