<?php

    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['senha']);
    header("location: login.php");

?>