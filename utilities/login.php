<?php 
    require_once __DIR__ . '/functions.php';

    session_start();

    // Save the datas
    if (isset($_POST['username']) && isset($_POST['password'])) {
        
        // < Check if the user exist
        $logged = allowLogin($_POST['username'], $_POST['password'], $users); 
        //  # if true => logged, if false => wrong pass, if null => don't exist

        if ($logged === true) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
        };
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/general.css">
</head>
<body>
    <main>
        <section>
            <form action="login.php" method="POST">
                <input type="text" name="username" id="username" placeholder="Inserisci l'username">
                <input type="text" name="password" id="password" placeholder="Inserisci la password">

                <button type="submit">Login</button>
            </form>
            
            <?php if (isset($_POST['username'])) {
                if ($logged === false)  { 
                    echo '<h3>L\'username esiste, ma la password non &egrave; corretta</h3>';
                } else if ($logged === null) {
                    echo '<h3>L\'username non esiste</h3>';
                };
            } ?>
        </section>
    </main>
</body>
</html>