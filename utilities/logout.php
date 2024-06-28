<?php 

@require_once __DIR__ . '/functions.php';

session_start();

session_unset();

sleep(3);



?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>

    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/logout.css">

</head>
<body>
    <main>
        <h1>LOGOUT</h1>
        <h5>Sarai ritrasmesso alla home a breve</h5>
    </main>
</body>
</html>