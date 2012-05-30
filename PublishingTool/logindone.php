<? 

//simple login check. 
session_start();

if(!$_SESSION['myusername']){
header('mainlogin.php');
}
else
	header('location: console.php');
?>
