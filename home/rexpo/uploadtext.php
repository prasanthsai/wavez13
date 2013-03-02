<?php
session_start();

if( isset($_SESSION['username']) ){
	$quer = "SELECT * FROM users WHERE username = '{$_SESSION['username']}'";
	$resu = mysql_query($quer);
	$row1 = mysql_fetch_assoc($resu);
	if($row1['rexpo']){
		echo"submitted";
	}
	else{
?>
		<a href="javascript:ajhome('home/rexpo/uploadform.php');">Click here to submit synopsis of presentation</a>

<?php
	}
}
else
		{
?>
		<a  href="#" onclick="javascript:window.open('login/login.php','Login','width=500,height=480,scrollbars=no,resizable=no,top=100,left=100')"><b>login to submit synopsis of presentation</b></a>
<?php
		}

?>
