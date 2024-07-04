<?php
// Controller for About
class About extends Controller{
    public function index($nama = ''){
        $data['title'] = "about index";
        $data['nama'] = $nama;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
         $data['title'] = "about page";
          $this->view('templates/header', $data);
        $this->view('about/page');
           $this->view('templates/footer');
    }
}