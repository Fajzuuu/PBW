<?php
    session_start();
    if(!$_SESSION['isLoggedIn'])
    {
        header("Location: form.php");
        exit;
    }
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
</body>
</html>