<?php
require_once "connect.php";
session_start();

class Auth extends Connect{
    public $error =false;
    public $row;

public function register($data){
    
   $conn = $this->getConnection();
        $username = $data['username'];
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO admin VALUES 
        (null,?,?)";
    
        $stmt = $conn->prepare($query);
    
        $stmt->bindParam(1,$username);
        $stmt->bindParam(2,$password);
        $stmt->execute();
        return true;
}
    
public function login ($username, $password){
    $connection = $this->getConnection();
    $query = "SELECT password FROM admin WHERE username = ?";
    $result = $connection->prepare($query);
    $result->execute([$username]);
    $passDB = $result->fetch();
    $passwordVerify = password_verify($password, $passDB['password']);
    if($passwordVerify){
        $_SESSION['nama_admin'] = $username;  
        header("Location: ../view/index.php");
    }else{
        header("Location: ../index.php?status=0");
        exit();
    };
   
    }

public function logout(){
    session_destroy();
    header("Location: ../index.php");
    exit;
}
}
?>