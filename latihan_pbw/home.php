<?php
    session_start();
    if(!$_SESSION['isLoggedIn'])
    {
        header("Location: form.php");
        exit;
    }
    include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang <?php echo $_SESSION['username'] ?></h1>
    <a href="logout.php">Logout</a>

    <h4>Daftar user</h4>
    <table border=1 cellspacing=0>
        <tr>
            <td>No</td>
            <td>Username</td>
            <td>Status</td>
            <td>Aksi</td>
        </tr>

        <?php
        $rs = $koneksi->query("SELECT * FROM users");
        $users = $rs->fetchAll(PDO::FETCH_ASSOC);
        $i=1;
        //print_n($user);
        foreach($users as $user){

        }
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$user['username']?></td>
            <td><?=$user['active'] == 1?"aktif":"tidak aktif"?></td>
            <td>Edit | Delete</td>
        </tr>
    </table>
</body>
</html>