<?php 

require_once __DIR__ . '/utilities/db.php';

session_start();

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
            <button>
                <?php if (isset($_SESSION['username'])) { 
                    echo '<a href="./utilities/logout.php">Logout</a>';
                } else {
                    echo '<a href="./utilities/login.php">Login</a>';
                }
                ?>
            </button>

        </nav>
    </header>
    <main>
        <?php // ! Controllo del login
            if (!isset($_SESSION['username'])) {
                // # unable to login
                echo '<h1>Fai pure l\'accesso</h1>';
                echo '<h3>Devi andare alla pagina di login</h3>';
            }
        ?>

        <?php if (isset($_SESSION['username'])) { ?>
            <h1>Benvenut* <?php echo $_SESSION['username'] ?> </h1>

            <section>
                <h3>Questi sono i tuoi contenuti</h3>
                <article>
                    <img src="https://emoji.slack-edge.com/T91QPE3BP/rick-tamarro/401d02cc2c4ce103.gif" alt="Riccardo swag">
                </article>
                <article>
                    <img src="https://emoji.slack-edge.com/T91QPE3BP/rick-tamarro/401d02cc2c4ce103.gif" alt="Riccardo swag">
                </article>
                <article>
                    <img src="https://emoji.slack-edge.com/T91QPE3BP/rick-tamarro/401d02cc2c4ce103.gif" alt="Riccardo swag">
                </article>
                <article>
                    <img src="https://emoji.slack-edge.com/T91QPE3BP/rick-tamarro/401d02cc2c4ce103.gif" alt="Riccardo swag">
                </article>
                <article>
                    <img src="https://emoji.slack-edge.com/T91QPE3BP/rick-tamarro/401d02cc2c4ce103.gif" alt="Riccardo swag">
                </article>

            </section>
        <?php } ?>
    </main>
</body>
</html>