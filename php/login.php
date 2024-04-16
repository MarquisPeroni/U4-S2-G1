<?php

require_once('config.php');

$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $sql_select = "SELECT * FROM users WHERE username = '$username'"; 
    if($result = $connessione->query($sql_select)){
        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(password_verify($password, $row['password'])){
                session_start();

                $_SESSION['logged'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header("location: ../private.php");
            }else{
                echo "password errata";
            }
        }else{
            echo "nessun account con quel username";
        }            
    }else{
        echo "Errore in fase di login";
    }

$connessione->close();

}
