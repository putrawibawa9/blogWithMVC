<?php

class Auth_model{
    private $db;

public function __construct ()
{
    $this->db = new Database;
}

public function register($data){
    // var_dump($data);
    // exit;
    $query = "INSERT INTO `admin` (`username`, `password`) VALUES (:username, :password)";
    $this->db->query($query);
    $this->db->bind('username', $data['username']);
    $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
    $this->db->execute();
    return $this->db->rowCount();
}

public function login($data){

    $this->db->query("SELECT * FROM admin WHERE username = :username");
    $this->db->bind('username', $data['username_admin']);
    $passDB = $this->db->single();
    if(isset($passDB['password'])){
        $passwordVerify = password_verify($data['password_admin'], $passDB['password']);
    }
    if($passwordVerify){
        return $data['username_admin'];
    }
}
}