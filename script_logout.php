<?php
    session_start();
    if(isset($_SESSION["time_now"]))
        unset($SESSION["time_now"]);
    if(isset($_SESSION["user"]))
        unset($_SESSION["user"]);
    if(isset($_SESSION["pw"]))
        unset($_SESSION["pw"]);    
    header("Location: index.html");
?>