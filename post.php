<?php
include('koneksi.php');
session_start();
if(!isset($_SESSION['names'])){
$q=mysql_query("insert into tbl_chat(username,pesan,jam) values('".$_SESSION['name']."','".$_POST['text']."',".date('g').")");
}
?>
