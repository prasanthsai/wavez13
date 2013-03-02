<?php
include"../membersite_config.php";
session_start();

if( isset($_GET['value']) and isset($_SESSION['username']) ){
	$query = "UPDATE users SET accom = '{$_GET['value']}' WHERE username = '{$_SESSION['username']}'";
	$result = mysql_query($query);
	if($result) {
?>
	<script type='text/javascript'>
		window.opener.popUpClosed("hospi.php");

		self.close();
	</script>
<?php	
	}
}

else echo"Something went Wrong, Try again!";

?>
