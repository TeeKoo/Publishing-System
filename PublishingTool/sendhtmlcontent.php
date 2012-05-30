<?php

//getting stuff from console.php
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$picture = $_POST['picture'];
$link = $_POST['link'];
$category = $_POST['category'];


//Some checks for security
//the "%%" marks will be replaced back to " ' " after they're pulled out from the database on gethtmlcontent.php
$description = str_replace("'", '%%', $description);
$title = str_replace("'", '%%', $title);
$price = str_replace("'", '%%', $price);
$picture = str_replace("'", '%%', $picture);
$link = str_replace("'", '%%', $link);
$category = str_replace("'", '%%', $category);

$description = str_replace("--", '**', $description);
$title = str_replace("--", '**', $title);
$price = str_replace("--", '**', $price);
$picture = str_replace("--", '**', $picture);
$link = str_replace("--", '**', $link);
$category = str_replace("--", '**', $category);

//validationg urls.
if (filter_var($link, FILTER_VALIDATE_URL) === FALSE) {
	die('Not a valid URL for link');

}
if (filter_var($picture, FILTER_VALIDATE_URL) === FALSE) {
	die('Not a valid URL for link');

}
//********************************END OF CHECKS



//Complete string of a product which contains picture, description, title and link and category
$combined  = "<div id=''textdiv''><div id=''picdiv''><img src=''$picture'' width=''200'' height=''200'' align=''center''/></br></div><p><h2>$title</h2>$description
</br>
<b>Price: $price</b></br>

<a href=''$link''>Buy it here!</a></br></br>Category: $category
		    </p>
		   </div>"; 
//**********************************************END OF HTML STRING

//for formatting
$combined = nl2br($combined);

//NOT ACTUALLY THE REAL PARAMETERS FOR SQL QUERIES. TRUST ME.
$host="HOSTI"; // Host name 
$username="JUUSERNEIM"; // Mysql username 
$password="PASSVÖRT"; // Mysql password 
$db_name="TATAPASE"; // Database name 
$tbl_name="users"; // Table name

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name", $con) or die("cannot select DB");

//adding the huge html string and category to the database.
$sql="INSERT INTO $tbl_name (htmlcode_string, category_string) VALUES('$combined', '$category')";

mysql_query($sql);
if(mysql_errno($con))
echo mysql_error($con);
else
	echo "Product published";
mysql_close($con);

?>