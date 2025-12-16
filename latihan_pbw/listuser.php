<?php
    include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List user</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['username'] ?></h1>
    <a href="logout.php">Logout</a>
    <?php
        if(isset($_GET['page']))
        {
            switch($_GET['page'])
            {
                case 'add' : include("adduser.php");break;
                default: include("listuser.php");break;
            }
        }
        else {
            echo " Dashboard";
        }
    ?>
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
            <td>Edit | <a href="act_deleteUser.php?id" <?=$user['id']?>>Hapus</a></td>
        </tr>
    </table>
</body>
</html>