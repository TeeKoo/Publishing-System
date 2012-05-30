<style>
body{
background-color: rgb(230,230,230);
}

table{
	font-size: 45px;
	font-family: helvetica;
	font-weight:bold;
	text-shadow: 1px 1px 5px gray;
	border-radius: 10px;
	box-shadow: 2px 2px 5px black;
	background-color: white;
	
}
#centered{
margin-top: 10%;
}
table input{
	width: 200px;
	height: 50px;
	font-size: 30px;
	font-family: Georgia;
	color: rgb(95,95,95);
	border-radius: 10px;
}
</style>
<div id="centered">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" >
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="10">
<tr>
<td colspan="3"><strong style="font-size: 60px;">Login </strong></br></br></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="text" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input style="cursor: pointer;" type="submit" name="Submit" value="Ready"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>