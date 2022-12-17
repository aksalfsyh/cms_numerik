<?php

class Database {
    
    # local variable dengan access-modifier private (hanya class Database saja yang dapat akses)
    # mengembalikan nilai $this->mysqli sebagai object class dari mysqli

    private $host   = "localhost";
    // private $port   = "8889";
    private $user   = "root";
    private $pwd    = "root";
    private $db     = "db_unpam_library";
    public  $mysqli;

    # maapin, lupa taro di __construct
    # jadi taro disini supaya auto-call, ketika object dari class Database terbuat

    function __construct(){

        $this->mysqli = new mysqli($this->host, $this->user, $this->pwd, $this->db);
        
        # check ada error tidak ?
        if ($this->mysqli->connect_error) {

            # die() dapat memberhentikan program.
            # selain die(), dapat menggunakan exit() atau return.
            echo ("Connection failed: " . $this->mysqli->connect_error);
            return;
        }

        # mengembalikan nilai  mysqli (public)
        return $this->mysqli;
    }
}
?>

