<?php
	session_start();

	$conn = new PDO('mysql:host=localhost;dbname=de1;charset=utf8', 'root', '');

	$un = $_POST['user_name'];
	$pw = $_POST['pass_'];

	$query_select = "SELECT * FROM user WHERE username='$un' AND password='$pw'";
	$sth = $conn->prepare($query_select);
		
	if($sth->execute()){
		if($sth->rowCount() > 0){
			if($row['status'] == 0)
				$_SESSION['thong_bao'] = "blocked";
			else
				$_SESSION['thong_bao'] = "ok";
		}
		else
			$_SESSION['thong_bao'] = "failed";

		header('location: login.php');
	}
?>