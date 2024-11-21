<?php
    session_start();
    if(isset($_SESSION["time_now"]))
        unset($_SESSION["time_now"]);
    if(isset($_SESSION["user"]))
        unset($_SESSION["user"]);
    if(isset($_SESSION["pw"]))
        unset($_SESSION["pw"]); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessione scaduta</title>
</head>
<body>
    <div style="width: 50%; margin: 1.rem auto 1rem auto;">    
        <h1 style="color:red;"> La tua sessione è scaduta </h1>
        <a href="index.html" target="_self"> Torna alla Homepage </a> 
    </div>
</body>
</html>