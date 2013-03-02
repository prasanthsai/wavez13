<div style="position:absolute; top:15px; width:100%;">
<center><b>Reaching IIT Madras</b></center>
</div>

<div style="position:absolute; float:left; width:46%; top:40px;">
	<b>From Chennai Central Station:</b><br>
		Catch 18B or 19S buses to Gandhi Mandapam/IIT Madras or take 1LSS, 4LSS, 6LSS, 6A to Adyar and from the Adyar signal you can get to IIT easily by bus.

	<br><b> From Airport:</b><br>
		Catch the bus PP21 to IIT Madras or 21G to Gandhi Mandapam
</div>

<div style="position:absolute; right:0%; width:46%; top:40px;">
	<b> From Egmore Station:</b><br>
		Catch 23C which is direct bus to IIT Madras. Or take any one of 23E, 23A or 23G to Adyar from where there are number of buses to IIT Madras.
	<br><b> From CMBT:</b><br>
		Catch the bus PP21 to IIT Madras or 21G to Gandhi Mandapam.

</div>

<div style="position:absolute; top:205px; width:100%;">
<center><b>Apply for Accommodation</b><br>
Accommodation will be provided on first come first serve basis. Limited Accomodation available. So make sure, you register early if you require accommodation.<br>
For queries contact Jaya Chandra: 9789058156<br><br>

<?php

include "membersite_config.php";
session_start();

	if( isset($_SESSION['username']) ) {
		$quer = "SELECT * FROM users WHERE username = '{$_SESSION['username']}'";
		$resu = mysql_query($quer);
		$row1 = mysql_fetch_assoc($resu);
		if($row1['accom'] == 1){
?>
			<a  href="#" onclick="javascript:window.open('accom/request.php?value=0','Accommodation','width=500,height=480,scrollbars=no,resizable=no,top=100,left=100')"><b>De-register for accommodation</b></a>
<?php		}			
		else{
?>
			<a  href="#" onclick="javascript:window.open('accom/request.php?value=1','Accommodation','width=500,height=480,scrollbars=no,resizable=no,top=100,left=100')"><b>Register for accommodation</b></a>
<?php		
		}
		
	}
	else
		{
?>
		<a  href="#" onclick="javascript:window.open('login/login.php','Login','width=500,height=480,scrollbars=no,resizable=no,top=100,left=100')"><b>login to register for accommodation</b></a>
<?php
		}
?>
</center>
</div>
