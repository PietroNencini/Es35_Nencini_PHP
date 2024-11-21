<?php
    session_start();
    if(!isset($_SESSION["time_now"])) {
        header("Location: error.php");
        exit();
    }
    if(time() - $_SESSION["time_now"] > 20) {
        header("Location: session_outdated.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
</head>
<body>

    <h1> BENVENUTO </h1>

    <div style="width: 50%; margin: 1rem auto 1rem auto">
        <p> Nome utente: <?php echo $_SESSION["user"] ?> </p>
        <p> Nome: Pietro </p>
        <p> Conome: Nencini </p>
        <p> Data di nascita: 9/7/2006 </p>
        <p> Data e ora del login: <?php echo date("Y/m/d h:i:s", $_SESSION["time_now"]); ?> </p>
        <a href="script_logout.php">
            <button style="background-color: crimson; cursor: pointer;"> LOGOUT </button>
        </a>
    </div>
</body>
</html>