<?php
class BlogRepositories{
    private $db;
    private $queryBuilder;

public function __construct ()
{
    $this->db = new Database;
     $this->queryBuilder = new QueryBuilder($this->db);
}

public function view(){
      return $this->queryBuilder->table('blog_sederhana')->select()->all();
    }

    public function save($data){
        $judul_blog = $data['judul_blog'];
        $deskripsi_blog = $data['deskripsi_blog'];
        $penulis_blog = $data['penulis_blog'];
        $tanggal_pembuatan = $data['tanggal_pembuatan'];
        $this->queryBuilder->table('blog_sederhana')
        ->insert([
            'judul_blog' => $judul_blog,
            'deskripsi_blog' => $deskripsi_blog,
            'penulis_blog' => $penulis_blog,
            'tanggal_pembuatan' => $tanggal_pembuatan
        ])
        ->execute();
       return $this->db->rowCount();
    }

     public function delete($id_blog){
    var_dump( $this->queryBuilder->table('blog_sederhana')->where('id_blog', '=', $id_blog)->delete()->getQuery());
          return $this->db->rowCount();
    }

    public function viewOne($id_blog){
     return $this->queryBuilder->table('blog_sederhana')->select()->where('id_blog', '=', $id_blog)->get();
    }

  public function update($data) {
    $judul_blog = $data['judul_blog'];
    $deskripsi_blog = $data['deskripsi_blog'];
    $penulis_blog = $data['penulis_blog'];
    $tanggal_pembuatan = $data['tanggal_pembuatan'];
    $id_blog = $data['id_blog'];
    $query = "UPDATE blog_sederhana SET judul_blog = :judul_blog, deskripsi_blog = :deskripsi_blog, penulis_blog = :penulis_blog, tanggal_pembuatan = :tanggal_pembuatan WHERE id_blog = :id_blog";
    $this->db->query($query);
    $this->db->bind('judul_blog', $judul_blog);
    $this->db->bind('deskripsi_blog', $deskripsi_blog);
    $this->db->bind('penulis_blog', $penulis_blog);
    $this->db->bind('tanggal_pembuatan', $tanggal_pembuatan);
    $this->db->bind('id_blog', $id_blog);
    $this->db->execute();
    return $this->db->rowCount();
}

}