<?php
session_start();
if(isset($_POST['enter'])){
	if($_POST['name'] != ""){
		$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
	}
	else{
		echo '<span class="error">Namanya masih kosong mas brow :D..!!!</span>';
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chat Sederhana Dengan PHP &amp; jQuery</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<?php
if(!isset($_SESSION['name'])){
	echo'
	<div id="loginform">
	<form action="index.php" method="post">
		<p>Masukin namanya dulu mas/mbak brow :</p>
		<label for="name">Nama:</label>
		<input type="text" name="name" id="name" />
		<input type="submit" name="enter" id="enter" value="Enter" />
	</form>
	</div>
	';
}
else{
?>
<div id="wrapper">
	<div id="menu">
		<p class="welcome">Hallo mas/mbak, <b><?php echo $_SESSION['name']; ?></b></p>
		<p class="logout"><a id="exit" href="media.php?module=logout">Keluar</a></p>
		<div style="clear:both"></div>
	</div>	
	<div id="chatbox"><?php
	include('log.php');
	?></div>
	
	<form name="message" action="">
		<input name="usermsg" type="text" id="usermsg" />
		<input name="submitmsg" type="submit"  id="submitmsg" value="Kirim" />
	</form>
<div>Chat Sederhana Dengan PHP dan jQuery - <a href="http://gedelumbung.co.cc" target="_blank">Gede Lumbung</a><br> <a href="bersih-db.php">Bersihkan Database</a></div>
</div>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//parameter ajax kiriman
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
	
	//Load tampilan chat
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url: "log.php",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal');//scrool otomatis, biar langsung nye-Crool
				}				
		  	},
		});
	}
	setInterval (loadLog, 1000);
});
</script>
<?php
}
?>
</body>
</html>
