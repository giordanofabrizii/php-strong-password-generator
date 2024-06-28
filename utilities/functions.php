<?php 

require_once __DIR__ . '/db.php';

function allowLogin($name, $pass, $array) {
    foreach($array as $user) {
        if ($user['nome'] === $name) {
            // $hashed_password = password_hash($password, PASSWORD_BCRYPT)
            if (password_verify($pass, $user['password'])) {
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