<?php

//There are 5 categories and $selectionid gets one of them depenging on what category user clicked.
if(isset($_GET['selectionid']))
$containerselection = $_GET['selectionid'];
else 
	$containerselection = "0"; //this is default which will print the whole database. AKA all the products entered.

//connecting to a database
$con = mysql_connect('kalorikulutus.fi','kaloriku_teekoo','tulppat');
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('kaloriku_PICS', $con);
	
	//getting all the contents depening what category link is clicked.
	if($containerselection=="0")
	$result = mysql_query('SELECT * FROM html_tb');
		else
			$result = mysql_query("SELECT * FROM html_tb WHERE category_string='$containerselection'"); 
	while($row = mysql_fetch_array($result))
	{
		$out = $row['htmlcode_string'];  
		$out = str_replace("%%", "'", $out); //on sendhtmlcontent.php the " ' " marks are switched to "%%" and here they are reverted back.
		echo $out;
		echo "<div id='space'><hr></div>";
		
	}
	echo mysql_error($con);
	
	mysql_close($con);
?>