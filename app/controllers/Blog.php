<?php

class Blog extends Controller{
    public function viewBlog(){
        $data['blog'] = Blog_model::all();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

      public function add(){
        $this->view('templates/header');
        $this->view('blog/add');
        $this->view('templates/footer');
    }

      public function store(){
        $blog = new Blog_model;
        $blog->penulis_blog = $_POST['penulis_blog'];
        $blog->tanggal_pembuatan = $_POST['tanggal_pembuatan'];
        $blog->judul_blog = $_POST['judul_blog'];
        $blog->deskripsi_blog = $_POST['deskripsi_blog'];
        
        if($blog->insert() > 0){
            Flasher::setFlash('sucesfully', 'Added', 'success');
      header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }

       public function delete($id_blog){
        if(Blog_model::delete($id_blog) > 0){
            Flasher::setFlash('sucesfully', 'deleted', 'danger'); 
           header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }

      public function viewOne($id_blog){
        $data['blog'] = Blog_model::find($id_blog);
        $this->view('templates/header');
        $this->view('blog/edit', $data);
        $this->view('templates/footer');
    }

     public function updatee(){
        if($this->repository("BlogRepository")->update($_POST) > 0){
          Flasher::setFlash('sucesfully', 'updated', 'secondary'); 
           header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }

     public function update()
    {
        $id_blog = $_POST['id_blog'];
        $blog = new Blog_model;
        $blog->id_blog = $_POST['id_blog'];
        $blog->penulis_blog = $_POST['penulis_blog'];
        $blog->tanggal_pembuatan = $_POST['tanggal_pembuatan'];
        $blog->judul_blog = $_POST['judul_blog'];
        $blog->deskripsi_blog = $_POST['deskripsi_blog'];        
         if( $blog->update() > 0){
          Flasher::setFlash('sucesfully', 'updated', 'secondary'); 
           header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }


}