<?php
    include "koneks.php"
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
</body>
</html>