<?php
	session_start();

	$conn = new PDO('mysql:host=localhost;dbname=de2;charset=utf8', 'root', '');

	$name = $_POST['name_'];
	$surname = $_POST['surname_'];
	$email = $_POST['email_'];
	$message = $_POST['message_'];

	$query_insert = "INSERT INTO contact VALUES(NULL, :n, :sn, :e, :m)";
	$sth = $conn->prepare($query_insert);
	$sth->bindParam(":n", $name);
	$sth->bindParam(":sn", $surname);
	$sth->bindParam(":e", $email);
	$sth->bindParam(":m", $message);

	if($sth->execute()){
		$_SESSION['thong_bao'] = "Sent successfully";
		header('location: contact.php');
	}else{
		var_dump($sth->errorInfo());
	}
?>