<?php
if(isset($_POST['login'])){
    include_once "Connect.php";
    include_once "Auth.php";
    $auth = new Auth;
    $username = $_POST["username_admin"];
    $password = $_POST["password_admin"];
    
    $result = $auth->login($username, $password);
}



?>
