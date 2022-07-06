<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>form</title>
	
	<style type="text/css">
		.back_button{
		text-align:center;
		margin:10px
		}
		.back_button a{
		background:#ddd;
		box-shadow:1px 1px 1px #999;
		padding:8px 30px;
		text-decoration:none;
		}
		
	</style>
</head>
<body>

<?php
$email = "arif.jhinuk@gmail.com";
$message = "The following information was submitted from the form on your website:\n
";
$message .= "Name: ".$_REQUEST["name__1"]."\n\n";
$message .= "Email: ".$_REQUEST["name__2"]."\n\n";
$message .= "Message: ".$_REQUEST["name__3"]."\n\n";
mail( $email, "Form Submission from your www.jhinuk.6te.net/template/KoiJass website", $message, "From:
 jhinuk.6te.net/template/KoiJass" );
header("Location: http://mywork.allbonus.info/form.php");
?>

<!-- Message sent! (change the text below as you wish)-->
	  <div style="text-align:center;">
		<h1>Congratulations!!</h1>
		   <p>Thank you <b><?=$name;?></b>, Your message is sent!</p>
	  </div>
	  <div class="back_button">
		<a href="index.html">Back</a>
	  </div>
</body>
</html>
