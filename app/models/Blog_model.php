<?php


class Blog_model{
    private $db;

public function __construct ()
{
    $this->db = new Database;
}

public function view(){
       $this->db->query("SELECT * FROM blog_sederhana");
       return $this->db->resultSet();
    }

    public function save($data){
        $query = "INSERT INTO `blog_sederhana` ( `judul_blog`, `deskripsi_blog`, `penulis_blog`, `tanggal_pembuatan`) VALUES (:judul_blog, :deskripsi_blog, :penulis_blog, :tanggal_pembuatan)";

      $this->db->query($query);
       $this->db->bind('judul_blog', $data['judul_blog']);
       $this->db->bind('deskripsi_blog', $data['deskripsi_blog']);
       $this->db->bind('penulis_blog', $data['penulis_blog']);
       $this->db->bind('tanggal_pembuatan', $data['tanggal_pembuatan']);
    
       $this->db->execute();
       return $this->db->rowCount();
    }

     public function delete($id_blog){
        $this->db->query("DELETE FROM blog_sederhana WHERE `blog_sederhana`.`id_blog` = :id_blog");
        $this->db->bind('id_blog', $id_blog);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function viewOne($id_blog){
        $this->db->query("SELECT * FROM blog_sederhana WHERE id_blog=:id_blog");
        $this->db->bind('id_blog', $id_blog);
        return $this->db->single();
    }

        public function update($data){
        $query = "UPDATE `blog_sederhana` SET `judul_blog` = :judul_blog, `deskripsi_blog` = :deskripsi_blog, `tanggal_pembuatan` = :tanggal_pembuatan WHERE `blog_sederhana`.`id_blog` = :id_blog";

      $this->db->query($query);
       $this->db->bind('judul_blog', $data['judul_blog']);
       $this->db->bind('deskripsi_blog', $data['deskripsi_blog']);
       $this->db->bind('tanggal_pembuatan', $data['tanggal_pembuatan']);
       $this->db->bind('id_blog', $data['id_blog']);

       $this->db->execute();
       return $this->db->rowCount();
    }
}