<?php

session_start();

$login = $_POST['email'];
$password = $_POST['password'];


require_once("connection/connection.php");

$qLogin = "select userspt.* from userspt where email='$login' and password = md5('$password')";

$rsLogin =  $csogani->query($qLogin);

$totalRows_rsLogin = $rsLogin->num_rows;

$rsLogin->free();
$csogani->close();

if ($totalRows_rsLogin > 0) {
    $_SESSION['utilizador'] = $login;
} else {
    header("Location: exemplo-login.php");
}
