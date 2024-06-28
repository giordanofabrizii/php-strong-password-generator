<?php 

require_once __DIR__ . '/utilities/db.php';

/**
 * 
 * Dato un array di utenti, ovvero array associativi con username e password in chiaro
 * Creiamo una sicurissima e semplicissima pagina di login in cui l'utente puo' autenticarsi via form con:
 * - un username
 * - una password
 * La pagina di login (login.php) ci redireziona, una volta effettuato e SOLO se avvenuto correttamente,
 * alla pagina principale della nostra applicazione (index.php), in cui visualizziamo via sessione il nome dell'utente loggato.
 * Creiamo poi una pagina di logout (logout.php) che rimuova le informazioni della sessione dalla sessione attuale e redirezioni
 * all pagina di login (login.php).
 * Bonus 1:
 * Impedire la visualizzazione dei contenuti di index.php (anche semplici di prova) fino a quanto l'utente non sia loggato.
 * Bonus 2:
 * Prevedere l'uso di qualsiasi controllo attraverso una funzione inserita in un file separato in 'src/functions.php/'
 */


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="./utilities/login.php">Login</a>
                </li>
                <li>
                    <a href="./utilities/logout.php">Login</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Fai pure l'accesso</h1>
    </main>
</body>
</html>