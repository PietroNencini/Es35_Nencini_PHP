<?php 
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "admin" && $password == "1234") {       // Se il login non va a buon fine non salvo neanche le varibili di sessione
        if(!isset($_SESSION["time_now"]))
            $_SESSION["time_now"] = time();
        if(!isset($_SESSION["user"]))
            $_SESSION["user"] = $username;
        if(!isset($_SESSION["pw"]))
            $_SESSION["pw"] = $password;
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: error.php");
        exit();   
    }
?>