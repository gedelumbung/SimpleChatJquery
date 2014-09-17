<?php
include('koneksi.php');
mysql_query("delete from tbl_chat");
header('location:index.php');
?>
