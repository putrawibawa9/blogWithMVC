<?php

require_once '../controller/Blog.php';

$id_blog = $_GET['id_blog'];

$delete_blog = new Blog;


$delete_blog->deleteBlog($id_blog);

?>