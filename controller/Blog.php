<?php
    require_once "connect.php";

class Blog extends Connect{
    
    public function readBlog(){
        $conn = $this->getConnection();
        $query = "SELECT * FROM blog_sederhana ORDER BY id_blog DESC";
        $result = $conn->query($query);
        $pelapor = $result->fetchAll();
        return $pelapor;
        }


    public function addBlog($data){
        $conn = $this->getConnection();
        $penulis_blog = $data['penulis_blog'];
        $judul_blog = $data['judul_blog'];
        $deskripsi_blog = $data['deskripsi_blog'];
        $tanggal_pembuatan = $data['tanggal_pembuatan'];
        $query = "INSERT INTO blog_sederhana VALUES 
        (null,?,?,?,?)";
    
        $stmt = $conn->prepare($query);
    
        $stmt->bindParam(1,$judul_blog);
        $stmt->bindParam(2,$deskripsi_blog);
        $stmt->bindParam(3,$penulis_blog);
        $stmt->bindParam(4,$tanggal_pembuatan);
        $stmt->execute();
        return true;
    }


    public function deleteBlog($id_blog){
        $conn = $this->getConnection();
        $query = "DELETE FROM blog_sederhana WHERE id_blog = $id_blog";
    $rowsAffected = $conn->exec($query);
    if($rowsAffected !== false){
      echo "<script>
      alert('data berhasil dihapus');
      document.location.href = '../view/';
        </script>";
        }else{
        echo "  <script>
      alert('data gagal dihapus');
      document.location.href = '../pelapor/';
      </script>";
    }
}

    public function viewBlog($id_blog){
        $conn = $this->getConnection();
        $query = "SELECT * FROM blog_sederhana WHERE id_blog = $id_blog";
        $result = $conn->query($query);
        $blog = $result->fetch();
        return $blog;
    }

 public function editBlog($data){
    // var_dump($data);
    // exit;
        $conn = $this->getConnection();
        $judul_blog = $data['judul_blog'];
        $deskripsi_blog = $data['deskripsi_blog'];
        $id_blog = $data['id_blog'];
        $penulis_blog = $data['penulis_blog'];
        $tanggal_pembuatan = $data['tanggal_pembuatan'];
        $query = "UPDATE blog_sederhana SET
        judul_blog = ?,
        deskripsi_blog = ?,
        penulis_blog = ?,
        tanggal_pembuatan = ?
        WHERE id_blog = ?
        ";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(1,$judul_blog);
                $stmt->bindParam(2,$deskripsi_blog);
                $stmt->bindParam(3,$penulis_blog);
                $stmt->bindParam(4,$tanggal_pembuatan);
                $stmt->bindParam(5,$id_blog);
                $stmt->execute();
                return true;
    }

}

?>