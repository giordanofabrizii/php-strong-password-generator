<?php 


session_start();

session_unset();

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
        <h5>Torna alla pagina principale</h5>
        <button>
            <a href="../index.php">Home</a>
        </button>
    </main>
</body>
</html>