<?php

error_reporting(-1);
/**
 * Created by Liang Sun on 27, August, 2011
 * http://liangsun.org
 */

$to = "g.prasanth963@gmail.com";
$subject = "test";
//$mime_boundary = "----test----".md5(time());
//$message = "--$mime_boundaryn";

$message = "Content-Type: text/html; charset=UTF-8n";
//$message .= "Content-Transfer-Encoding: 8bitnn";
//$message .= "Hello! Holla!n";
//$message .= "--$mime_boundary--nn";

$sender = "test@wavez.iitm.ac.in";
$headers = "From: test <${sender}>n";
//$headers .= "Reply-To: test <${sender}>n";
//$headers .= "MIME-Version: 1.0n";
//$headers .= "Content-Type: multipart/alternative; boundary="$mime_boundary"n";

echo mail($to, $subject, $message, $headers);
?>
