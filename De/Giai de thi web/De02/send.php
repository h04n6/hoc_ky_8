<?php
include 'ketnoi.php';

if (isset($_POST['btnSend'])){
	$name = $_POST['txtName'];
	$surname = $_POST['txtSurName'];
	$email = $_POST['Email'];
	$message = $_POST['txtMessage'];

	$qr = "insert into contact values (null, '$name', '$surname', ' $message', '$email')";
	$send = mysqli_query($conn, $qr);

	if($send){
		echo 'thanh cong <a href="contact.php">Quay lai</a>';
	}else {
		echo 'that bai';
	}
}
?>