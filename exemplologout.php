<?php

session_start();

unset($_SESSION['utilizador']);

header("Location: exemplo.php");
