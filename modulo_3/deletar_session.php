<?php 

session_start();


unset($_SESSION['idade']); // deletando session 

print_r($_SESSION);
?> 