<?php
$servername = '192.168.10.252';
$userdb = "a112415638_pwb";
$password = "";

try{
    $koneksi = new PDO("mysql:host=$servername;dbname=a112415638_faaizzuhdi", $userdb ,$password);
    $koneksi->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_ERRMODE);
}
catch(PDOException $e)
{
    echo "koneksi Gagal ",$e->getMessage();
}
