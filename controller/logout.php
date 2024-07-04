<?php
include_once "Connect.php";
include_once "Auth.php";
$logout = new Auth;
$logout->logout();
?>