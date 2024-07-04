<?php 
    require_once 'layouts/header.php';
    require_once '../controller/Blog.php'; 

$id_blog = $_GET['id_blog'];

$viewBlog = new Blog;

$blog =$viewBlog->viewBlog($id_blog);
if(isset($_POST['submit'])){
   $edit_blog = new blog;
   

   if($edit_blog->editBlog($_POST)){
    echo "<script>
            alert('data berhasil dirubah');
            document.location.href = 'index.php';
      </script>";
   }else{
     echo "  <script>
            alert('data gagal dirubah');
            document.location.href = 'index.php';
            </script>";
   }
}

?>
<div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-center">
        <img src="../assets/img/download (1).png" class="img-fluid" width="200px" alt="Logo Hanoman">
      </div>
    </div>
  </div>

  <div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
      <h4 class="text-center">Edit blog</h4>
    </div>
    </div>
    </div>


<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <form action="" method="post"`>  
        <input type="hidden" name="id_blog" value="<?= $id_blog ?>">
   <input type="hidden" name="penulis_blog" value="<?= $blog['penulis_blog']; ?>">
   <input type="hidden" name="tanggal_pembuatan" value="<?= $blog['tanggal_pembuatan']; ?>">

      
            <div class="mb-3">
                <input type="text" name="judul_blog" placeholder="Judul blog" class="form-control" value ="<?= $blog['judul_blog']?> " required>
            </div>
            <div class="mb-3">
          <label for="message">Deskripsi Blog:</label><br>
        <textarea name="deskripsi_blog" class="form-control" id="message" name="message"><?= $blog['deskripsi_blog']?></textarea>
            </div>
            <a href="index.php" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
        </form>
    </div>
  </div>
</div>


<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-category').addClass('active');
</script>