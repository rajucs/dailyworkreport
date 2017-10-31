<?php 
	$servername		=	'localhost';
	$username		=	'root';
	$password		=	'';
	$db				=	'users';
	$conn			=	mysqli_connect($servername,$username,$password,$db);
	if (!$conn) {
		die('connection Failed'.mysqli_connect_error());
	}

	// else echo "connection Successfully";

	if (isset($_POST['submit'])) {
		$username	=	$_POST['user_name'];
		$password	=	$_POST['user_password'];
		$sql		=	"INSERT INTO login(user_name,password) VALUES('$username',$password)";
		if (!mysqli_query($conn,$sql)) {
			die("ERROR".mysqli_errno($conn).mysqli_error($conn));
		}
		else {
			header('Location:index.php');
		}
	}
 ?>