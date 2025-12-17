<?php
    include "koneksi.php";

    $usr = $_POST['username'];
    $paswd = $_POST['paswd'];
    $cpaswd = $_POST['cpaswd'];

    if($paswd == $cpaswd) {
        $cpaswd = password_hash($paswd, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, paswd, active) values (?,?,?)";
        $stmt = $koneksi->prepare($sql);
        if($stmt->execute([$usr,$cpaswd,1]))
        {
            echo "<script>alert('user baru berhasil ditambah');</script>";
        }
        else
        {
            echo "<script>alert('user baru gagal ditambahkan');</script>";
        }
    }
    else
    {
        echo "<script>alert('password dan konfirmasi password harus sama');</script>";
    }