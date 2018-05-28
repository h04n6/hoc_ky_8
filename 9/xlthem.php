<?php
	session_start();

	$conn = new PDO('mysql:host=localhost;dbname=de9;charset=utf8', 'root', '');

	if(isset($_POST['btn_create'])){
		$un = $_POST['username_'];
		$na = $_POST['name_'];
		$em = $_POST['email_'];
		$pw = $_POST['password_'];

		$query_insert = "INSERT INTO user VALUES(NULL, :u, :n, :e, MD5(:p))";
		$sth = $conn->prepare($query_insert);
		$sth->bindParam(":u", $un);
		$sth->bindParam(":n", $na);
		$sth->bindParam(":e", $em);
		$sth->bindParam(":p", $pw);
		
		if($sth->execute()){
			$_SESSION['tb'] = "Created Successfully.";
			header('location: register.php');
		}else{
			var_dump($sth->errorInfo());
		}
	}
?>