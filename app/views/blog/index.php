<div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-center">
        <img src="<?= BASEURL?>/img/spDigital.png" class="img-fluid" width="200px" alt="Logo SP Digital">
      </div>
    </div>
  </div>


<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
      <h4 class="text-center">Data Blog</h4>
      <p class="text-center">Selamat datang <span class="text-primary"><?= $_COOKIE['admin']?></span> </p>
      <div class="text-center">
          <a class="btn btn-primary btn-sm" href="<?= BASEURL;?>/blog/add">Tambah Data Blog</a>
      </div>
    </div>
    </div>
    </div>
  
      <div class="container">
    <div class="row">
      <div class="col-12">
        <?php Flasher::flash()?>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="row">
        <div class="col-12 p-3 bg-white">
          
          <table class="table table-bordered" id="pengaduanTable">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">ID</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Blog</th>
                    <th class="text-center">Penulis</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Aksi</th>
                  </tr>
            </thead>
            <tbody>
              <?php $i=1?>
              <?php foreach($data['blog'] as $row):?>
                <tr>
                  <td><?=$i++ ?></td>
                  <td ><?=$row['id_blog']?></td>
                  <td ><?=$row['judul_blog']?></td>
                  <td ><?=$row['deskripsi_blog']?></td>
                  <td ><?=$row['penulis_blog']?></td>
                  <td ><?=$row['tanggal_pembuatan']?></td>
                    <td class="text-center">
                        <a href="<?= BASEURL;?>/blog/viewOne/<?= $row['id_blog']?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= BASEURL;?>/blog/delete/<?= $row['id_blog']?>" onclick="return confirm('yakin?');"  class="btn btn-danger btn-sm" >Hapus</a>
                  <?php endforeach; ?>
                 
                  </td>
                </tr>
                </tbody>
        </table>
        <div>
          
          </div>
    </div>
  </div>
</div>