<html>
<body>
<form action="" method="POST">
<b>Username:-</b><input type="text" name="uname" required=""><br><br>
<b>Password:-</b><input type="text" name="upassword" required=""><br><br>
<input type="submit" name="sub" value="Login">
<?php 
include("config.php");

if(isset($_POST['sub']))
{
$uname = $_POST['uname'];
$upassword = $_POST['upassword'];

$res = mysqli_query($mysqli,"select* from user where uname='$uname'and upassword='$upassword'");
$numRows = mysqli_num_rows($res);
if($numRows  == 1){
echo "You are login Successfully ";
header("location:my-account.php");   // create my-account.php page for redirection 	
}
else
{
	echo "failed ";
}
}
?>
<form>
</body>
</html>