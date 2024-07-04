<?php
// Controller for About
class Auth extends Controller{
    public function login(){
      $this->view('auth/login');
    }

    public function signin(){
        if($this->model("Auth_model")->login($_POST)){
          $admin = $this->model("Auth_model")->login($_POST);
          setcookie("admin", $admin, time() + 3600, '/');
            header('Location: '. BASEURL . '/blog/viewBlog');
      }else{
        header("Location: ../index.php?status=0");
        exit();
      };
    }

    public function logout(){
        session_destroy();
    }

    public function register(){
      if($this->model("Auth_model")->register($_POST) > 0){
           header('Location: '. BASEURL . '/auth/login');
        }
    }

}