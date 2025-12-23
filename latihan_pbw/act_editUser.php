<?php
    include "koneksi.php";

    $usr = $_POST['username'];
    $paswd = $_POST['paswd'];
    $cpaswd = $_POST['cpaswd'];
    $active = $_POST['active'];
    $id = $_POST['id'];

    if($paswd == "" )
    {
        $query = "UPDATE users SET username = ?, active = ? WHERE id = ?";
        $stmt = $koneksi->prepare($query);
        $stat = $stmt->execute([$usr,$active,$id]);
    }
    else
    {
        if($paswd == $cpaswd) {
            $npaswd = password_hash($paswd, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET username = ?, active = ? WHERE id = ?";
            $stmt = $koneksi->prepare($sql);
            if($stmt->execute([$usr,$npaswd,$active,$id]))
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
    }
    
    if ($stat)
    {
        echo "<script>alert('Update user berasil';</script>";
        header ("location: home.php?page-list");
    }