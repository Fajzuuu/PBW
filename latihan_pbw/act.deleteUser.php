<?php
    session_start();
    if(!$_SESSION['isLoggedIn'])
    {
        header("Location: form.php");
    }

    include "koneksi.php";
    $sql = 'DELETE FROM users where id=?';
    $start = $koneksi->prepare($sql);
    if($stmt->excute([$_GET['id']]))
    {
        header("Location : home.php?page=list");
    }
    else
    {
        echo "<script>alert('User gagal dihapus')
        history.go(-1)
        </script>";
    }