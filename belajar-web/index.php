<?php
//panggil header.php
include('header.php');

//content tengah
 if(!isset($_GET['ref'])){
        require "module/home.php";
    }else{
        if($_GET['ref'] == "home"){
            require "module/home.php";
        }elseif ($_GET['ref'] == "berita") {
            require "module/berita.php";
        }elseif ($_GET['ref'] == "pendaftaran") {
            require "module/pendaftaran.php";
        }else{
            require "module/404.php";
        }
    }

//panggil footer.php
include('footer.php');
?>