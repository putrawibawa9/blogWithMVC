<?php

class Blog_model extends Model
{
    // Table
    protected static $table = 'blog_sederhana';
    protected static $primaryKey = 'id_blog';


    // Fields
    public $id_blog;
    public $penulis_blog;
    public $tanggal_pembuatan;
    public $judul_blog;
    public $deskripsi_blog;
}
?>
