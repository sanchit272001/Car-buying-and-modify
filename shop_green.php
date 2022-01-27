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
#left {
float: left;
margin-left: 50px;
}
#right {
float: right;
margin-right: 50px;
}

[type=radio] {
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}
/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}
/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 5px solid #00FF00;
}
.text_wrapper{
	border-radius : 30px;
	background-color: rgba(255,255,255,0.7);
	border: 3px solid #000000;
	margin: 0 auto;
	padding-bottom:4cm;
	padding-left:1cm;
	padding-right:1cm;
	width:1000px;
	font-size:25px;
	font-family:'Times New Roman';
}
.color_wrapper{
	border-radius : 30px;
	background-color: rgba(255,255,255,0.0);
	/*border: 3px solid #000000;*/
	margin: 0 auto;
	padding-bottom:0cm;
	padding-left:1cm;
	padding-right:1cm;
	width:900px;
	font-size:25px;
	font-family:'Times New Roman';
}
.tyre_wrapper{
	border-radius : 30px;
	background-color: rgba(255,255,255,0.0);
	/*border: 3px solid #000000;*/
	margin: 0 auto;
	padding-bottom:0cm;
	padding-left:1cm;
	padding-right:1cm;
	width:900px;
	font-size:25px;
	font-family:'Times New Roman';
}

a:hover img{
	/*opacity: 0.3;*/
	background: rgba(0,0,0,0.6)
}

</style>

<br><br><br><br>

<body>


<br>
<div class="text_wrapper">
	<center><h2><u> Shop </u></h2></center>

	<left><h3><u>Choose a Colour!</u></h3></left>
	<center>
	<img src="img/SRgreen.png" width=655 height=400 alt="Blue Car"><br><br>
		<table>
			<tr>
				<td>
					<a href="shop_blue.php"><img src="img/IconBlue.png"/ width=130 height=130></a>
					<center> Sky Blue </center>
				</td>
				<td>
					<a href="shop_gold.php"><img src="img/IconGold.png"/ width=130 height=130></a>
					<center> Midas Gold </center>
				</td>
				<td>
					<a href="shop_green.php"><img src="img/IconGreen.png"/ width=150 height=150></a>
					<center> Lawn Green </center>
				</td>
				<td>
					<a href="shop_red.php"><img src="img/IconRed.png"/ width=130 height=130></a>
					<center> Satin Red </center>
				</td>
			</tr>
		</table>
	</center>
 <br>
	<left><h3><u>Choose Your Tyres!</u></h3></left>
	<center>
	<div class="tyre_wrapper">
		<label><input type="radio" name="tyre" value="hoosier" checked>
  	<img src="img/Hoosier_Logo.png" width=100 height=100></label>
		&emsp;&emsp;
		<label><input type="radio" name="tyre" value="mrf">
  	<img src="img/MRF_Logo.png" width=100 height=100></label>
		&emsp;&emsp;
		<label><input type="radio" name="tyre" value="bridgestone">
  	<img src="img/BridgeStone_Logo.png" width=100 height=100></label>
	</div>
	</center>

	<div id="left">
		<br><br>
		<b><u>Confirm Your Order:</u></b>
		<a href="confirm.php"><input name='view' type="submit" id="view_btn" value="ORDER NOW"/>
	</div>






		</div>
</div>

<br><br><br>

</body>
</html>
