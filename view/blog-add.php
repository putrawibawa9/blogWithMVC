<?php 
session_start();
$penulis_blog = $_SESSION['nama_admin'];
    require_once 'layouts/header.php';
    require_once '../controller/Blog.php';

if(isset($_POST['submit'])){
    $add = new Blog;

    $result =$add->addBlog($_POST);
    
    //check the progress
    if ($result){
        echo "
            <script>
            alert('data berhasil ditambah');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo " <script>
        alert('data gagal ditambah');
        document.location.href = 'pelapor-tambah.php';
        </script>
    ";
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
      <h4 class="text-center">Tambah Blog</h4>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="penulis_blog" value="<?= $penulis_blog?>">
          <input type="hidden" name="tanggal_pembuatan" value="<?php echo date('Y-m-d'); ?>">
            <div class="mb-3">
                <input type="text" name="judul_blog" class="form-control" required placeholder="Judul Blog">
            </div>
            <div class="mb-3">
          <label for="message">Deskripsi Blog:</label><br>
        <textarea name="deskripsi_blog" class="form-control" id="message" name="message"></textarea>
            </div>
            <a href="index.php" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
        </form>
    </div>
  </div>
</div>


<!-- <?php require_once '../admin/footer.php';?> -->


<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-binatang').addClass('active');
</script>