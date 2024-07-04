<?php

class Blog extends Controller{
    public function viewBlog(){
         $data['blog'] = $this->model('Blog_model')->view();
          $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

      public function add(){
        $this->view('templates/header');
        $this->view('blog/add');
        $this->view('templates/footer');
    }

      public function save(){
        if($this->model("Blog_model")->save($_POST) > 0){
            Flasher::setFlash('sucesfully', 'Added', 'success');
      header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }

       public function delete($id_blog){
        if($this->model("Blog_model")->delete($id_blog) > 0){
            Flasher::setFlash('sucesfully', 'deleted', 'danger'); 
           header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }

      public function viewOne($id_blog){
        $data['blog'] = $this->model('Blog_model')->viewOne($id_blog);
        $this->view('templates/header');
        $this->view('blog/edit', $data);
        $this->view('templates/footer');
    }

     public function update(){
        if($this->model("Blog_model")->update($_POST) > 0){
          Flasher::setFlash('sucesfully', 'updated', 'secondary'); 
           header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }


}