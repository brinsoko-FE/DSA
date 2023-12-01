<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stran</title>
</head>
<body>

<nav>
<a href="/index.php">Domov</a>
<a href="/login.php">Naprej</a>
<a href="/logout.php">NaprejNaprej</a>

</nav>


<form action="/login.php" metod = "POST">
    <label for="ime">Username</label> <br>
    <input id = "ime" type="text" name="ime">
    <label for="geslo">Password</label><br>
    <input id="geslo" type="password" name="geslo">
    <button type="submit">Login</button>

</form>
    <?php

    $user = "Brin";
echo "Hello $user";

?>
    
</body>
</html>