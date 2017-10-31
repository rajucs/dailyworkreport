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
		$user_mail	=	$_POST['user_mail'];
		$user_mobile=	$_POST['user_mobile_num'];
		$employee_id=	$_POST['employee_id'];
		$sql		=	"INSERT INTO user_signup(user_name,password,user_email,user_mobile,employe_id) VALUES('$username',$password,'$user_mail','$user_mobile','$employee_id')";
		if (!mysqli_query($conn,$sql)) {
			die("ERROR".mysqli_errno($conn).mysqli_error($conn));
		}
		else {
			header('Location:login.php');
		}
	}
	if (isset($_POST['loginsubmit'])) {
		$employee_id=	$_POST['employe_id'];	
		$password	=	$_POST['user_password'];
		$sql		=	"SELECT * FROM user_signup WHERE employe_id=$employee_id and password=$password";
		$result		=	mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)==1) {
			session_start();
			$_SESSION['password']	=	$password;
			header('Location: index.php');
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("invalid username or password");location.href="login.php"';
			echo '</script>';
		}
	}

	if (isset($_POST['dwf_submit'])) {
		$assigned_job	=	$_POST['dwf_assigned_job'];
		$project_name	=	$_POST['DWF_project_name'];
		$progress		=	$_POST['DWF_progress'];
		$remarks		=	$_POST['DWF_remarks'];

		$sql			=	"INSERT INTO  dailywork(assigned_job,project_name,progress,remarks) VALUES('$assigned_job','$project_name','$progress','$remarks')";
		if (!mysqli_query($conn,$sql)) {
			die("ERROR".mysqli_errno($conn).mysqli_error($conn));
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("Insert Successfully");location.href="dailywork.php"';
			echo '</script>';
		}
	}

 ?>