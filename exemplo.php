<?php

session_start();

if (!isset($_SESSION['utilizador']))

    header("Location: exemplo-login.php");
echo "Entrei no exemplo <br>";



echo $_SESSION['utilizador'] . "<br>";

echo session_id() . "<br>";

?>

<a href="exemplologout.php">LOGOUT</a>