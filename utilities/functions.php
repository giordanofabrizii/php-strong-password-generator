<?php 

require_once __DIR__ . '/db.php';

function allowLogin($name, $pass, $array) {
    foreach($array as $user) {
        if ($user['nome'] === $name) {
            if ($user['password'] === $pass) {
                // login corretto
                header('location: ../index.php');
                return true;
            } else {
                // password sbagliata
                return false;
            }
        }
    } 
    // non esiste questo user
    return null;
};
?>