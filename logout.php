<?php  
//Log out the account
session_start();
session_unset();
header('Location: index.php');
?>