<div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-center">
        <img src="<?= BASEURL?>/img/spDigital.png" class="img-fluid" width="200px" alt="Logo Hanoman">
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
        <form action="<?= BASEURL?>/blog/update" method="post"`>  
        <input type="hidden" name="id_blog" value="<?= $data['blog']['id_blog'] ?>">
   <input type="hidden" name="penulis_blog" value="<?= $data['blog']['penulis_blog']; ?>">
   <input type="hidden" name="tanggal_pembuatan" value="<?= $data['blog']['tanggal_pembuatan']; ?>">

      
            <div class="mb-3">
                <input type="text" name="judul_blog" placeholder="Judul blog" class="form-control" value ="<?= $data['blog']['judul_blog']?> " required>
            </div>
            <div class="mb-3">
          <label for="message">Deskripsi Blog:</label><br>
        <textarea name="deskripsi_blog" class="form-control" id="message" name="message"><?= $data['blog']['deskripsi_blog']?></textarea>
            </div>
            <a href="<?= BASEURL?>/blog/viewBlog" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
        </form>
    </div>
  </div>
</div>