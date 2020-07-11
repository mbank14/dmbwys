<?php 
include('koneksi.php');

$id = $_GET['id'];

mysqli_query($koneksi,"delete from category_tb where id=$id");

header("location:4_viewkat.php");
?>
