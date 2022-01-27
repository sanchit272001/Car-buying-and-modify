<?php
	session_start();
	require 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<style>
.text_wrapper{
	border-radius : 30px;
	background-color: rgba(255,255,255,0.7);
	border: 3px solid #000000;
	margin: 0 auto;
	padding-bottom:1cm;
	padding-left:1cm;
	padding-right:1cm;
	width:800px;
	font-size:25px;
	font-family:'Times New Roman';
}
</style>

<br><br><br><br>

<body>


<br>
<div class="text_wrapper">
	<center>
		<h2><u> CONFIRM YOUR ORDER </u></h2>

		<h2>Cost: $23,000</h2>
		<form method="post">
	<label><b>Name  :</b></label>
	<input name="text" type="text" class="inputvalues" placeholder="Enter your Name"/><br><br>

	<label><b>E-mail:</b></label>
	<input name="text" type="text" class="inputvalues" placeholder="Enter your E-mail ID"/><br><br>

	<label><b>Phone :</b></label>
	<input name="text" type="text" class="inputvalues" placeholder="Enter your Phone Number"/><br><br>

	<input name='button1' type="submit" id="view_btn" class=button value="ORDER NOW"/>

</form>
</center>

<?php
			 if(array_key_exists('button1', $_POST)) {
				 echo "<script>
				 	alert('Your Order has been Processed! Payment Details have been sent to your E-mail');
					window.location.href='contact.php';
					</script>";
			 }
	 ?>

</div>

<br><br><br>
</body>
</html>
