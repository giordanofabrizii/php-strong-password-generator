<?php 

session_start();

if (isset($__POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}

if (isset($__POST['password'])) {
    $_SESSION['password'] = $_POST['password'];
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>

    <form action="login.php" method="POST">
        <input type="text" name="username" id="username" placeholder="Inserisci l'username">
        <input type="text" name="password" id="password" placeholder="Inserisci la password">

        <button type="submit">Login</button>
    </form>

    <?php
    if (isset($_SESSION['username'])) {
        echo "<p>Benvenuto, " . $_SESSION['username'] . "!</p>";
    }
    ?>
</body>
</html>