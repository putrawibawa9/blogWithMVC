<?php
// Controller for About
class Home extends Controller{
    public function index($nama = "Putra", $umur = "22"){
         $data['title'] = "home index";
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
          $this->view('templates/footer');
    }

    public function lover($nama = "Linda", $umur = "23"){
         $data['title'] = "about lover";
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $this->view('templates/header', $data);
        $this->view('home/lover', $data);
          $this->view('templates/footer');
    }



}