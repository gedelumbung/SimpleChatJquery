<?php
	include('koneksi.php');
	$q=mysql_query("select * from tbl_chat");
	while($r=mysql_fetch_array($q))
	{
	echo "<div class='msgln'><b>".$r['username']."</b> : ".$r['pesan']."</div>";
	}
?>
