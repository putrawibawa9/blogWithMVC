<?php
// Controller for About
class Sepatu extends Controller{
    public function index(){
        $data['sepatu'] = $this->model('Sepatu_model')->view();
        $data['title'] = "Sepatu index";
        $this->view('templates/header', $data);
        $this->view('sepatu/index', $data);
        $this->view('templates/footer');
    }
    public function add(){
        $data['title'] = "Add Sepatu";
        $this->view('templates/header', $data);
        $this->view('sepatu/add');
        $this->view('templates/footer');
    }

    public function save(){
        if($this->model("Sepatu_model")->save($_POST) > 0){
            Flasher::setFlash('sucesfully', 'Added', 'success');
      header('Location: '. BASEURL . '/sepatu');
        }
    }

    public function delete($kode_sepatu){
        if($this->model("Sepatu_model")->delete($kode_sepatu) > 0){
            Flasher::setFlash('sucesfully', 'deleted', 'danger'); 
           header('Location: '. BASEURL . '/sepatu');
        }
    }


    public function update(){
        if($this->model("Sepatu_model")->update($_POST) > 0){
          Flasher::setFlash('sucesfully', 'updated', 'secondary'); 
           header('Location: '. BASEURL . '/sepatu');
        }
    }

    public function viewOne($kode_sepatu){
        $data['sepatu'] = $this->model('Sepatu_model')->viewOne($kode_sepatu);
        $data['title'] = "Edit Sepatu";
        $this->view('templates/header', $data);
        $this->view('sepatu/edit', $data);
        $this->view('templates/footer');
    }
    
}