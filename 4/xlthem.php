<?php
	session_start();

	$conn = new PDO('mysql:host=localhost;dbname=de4;charset=utf8', 'root', '');

	$un = $_POST['username_'];
	$pw = $_POST['password_'];
	$em = $_POST['email_'];
	$na = $_POST['name_'];

	$query_insert = "INSERT INTO user VALUES(NULL, :u, :p, :e, :n)";
	$sth = $conn->prepare($query_insert);
	$sth->bindParam(":u", $un);
	$sth->bindParam(":p", $pw);
	$sth->bindParam(":e", $em);
	$sth->bindParam(":n", $na);

	if($sth->execute()){
		$_SESSION['thong_bao'] = "Created Successfully";
		header('location: signup.php');
	}else{
		var_dump($sth->errorInfo());
	}
?>