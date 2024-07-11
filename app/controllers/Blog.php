<?php

class Blog extends Controller{
    public function viewBlog(){
         $data['blog'] = $this->repository('BlogRepository')->view();
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
        if($this->repository("BlogRepository")->save($_POST) > 0){
            Flasher::setFlash('sucesfully', 'Added', 'success');
      header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }

       public function delete($id_blog){
        if($this->repository("BlogRepository")->delete($id_blog) > 0){
            Flasher::setFlash('sucesfully', 'deleted', 'danger'); 
           header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }

      public function viewOne($id_blog){
        $data['blog'] = $this->repository('BlogRepository')->viewOne($id_blog);
        $this->view('templates/header');
        $this->view('blog/edit', $data);
        $this->view('templates/footer');
    }

     public function update(){
        if($this->repository("BlogRepository")->update($_POST) > 0){
          Flasher::setFlash('sucesfully', 'updated', 'secondary'); 
           header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }


}