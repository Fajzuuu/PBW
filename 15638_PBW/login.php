<?php
    include "koneksi.php";

    $uname = $_POST['uname'];
    $paswd = $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE username='".$uname."' AND paswd='".$paswd."' AND activate=1";
    $ps = $koneksi->prepare($sql);
    $resultSet = $koneksi->query($sql);
    $rs = $ps->fetchAll();

    if(count($rs) > 0){
        echo "Login Berhasil";
        $upd = $koneksi->prepare("UPDATE users SET last_login=? WHERE id=?");
        $upd-?execute((date('Y-m-d H:i:s'), $rs[0]['id']));
    } else {
        echo "Login Gagal";
    }