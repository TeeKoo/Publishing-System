<?php
//starting the session.
if (!isset($_SESSION)) {
session_start();
}

$usern = $_SESSION['myusername'];
if($usern){
	//simple echo to see which user is online incase you forget your name(?)
echo "<b style='color: white; font-size: 25px; font-weight: bold;'>Logged in as: " . $usern . "</b>";
}
else{
header('location: mainlogin.php');
}

?>

<html>
<head>
<link href="consolestyles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script language="Javascript" type="text/javascript" src="console.js"></script>
</head>
<body>
<div id="sidemenu">

</div>
<div id="logoutbutton" title="Logout"></div>
<div id="consolewrapper">
		Title</br>
		<input type="text" id="titleinput"/></br>
		Item Description 
		<textarea id="maincontent"></textarea></br>
		<div style="width: 200px;">
		
		Price
		<input type="text" id="priceinput" class="inputs">
	</div>
	<div>
		<img src="#" style="width: 250px; height: 250px; float: right;" id="setimg" /></br>
		Picture(URL) <input type="text" id="urlinput" class="inputs"> </br></br>
		Add link</br>
		<input class="inputs" id="linkinput">
	</div>
	</br>
		Select Category: 
	<select id="category">
	<option value="0">-</option>
	<option value="electronics">Electronics</option>
	<option value="games">Games</option>
	<option value="phones">Phones</option>
	<option value="gadgets">Gadgets</option>
	<option value="movies">Movies</option>
	</select></br><hr>
	<input type="button" id="publishbutton" value="Publish"/>

</div>
	

</body>
</html>
