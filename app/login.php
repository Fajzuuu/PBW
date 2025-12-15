<?php
    include "koneksi.php";

    if (!isset($_POST['uname'], $_POST['pwd'])) {
        die("Akses tidak valid");
    }

    $uname = $_POST['uname'];
    $paswd = $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE username = ? AND password = ? AND active = 1";

    $ps = $koneksi->prepare($sql);
    $resultSet = $ps->execute([$uname,$paswd]);
    $rs = $ps->fetchAll();

    if(count($rs) > 0){
        session_start();
        $upd = $koneksi->prepare("UPDATE users SET last_login=? WHERE id=?");
        $upd->execute([date('Y-m-d H:i:s'), $rs[0]['id']]);
        $_SESSION=[
            'username' => $uname,
            'isLoggedIn' => true,
            'userId' => $rs[0]['id']
        ];
        header("location: home.php");
        exit;
    } else {
        echo "Login Gagal"; ?>
        <br><br>
        <a href="form.php">Kembali</a>
        <?php
    }