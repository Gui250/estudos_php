<?php

    session_start();

    unset($_SESSION['usuario']);
    header('Location: index.php');
    exit;

?>