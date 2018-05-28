<?php
	session_start();

	$conn = new PDO('mysql:host=localhost;dbname=de7;charset=utf8', 'root', '');

	if(isset($_POST['btn_dang_nhap'])){
		$tai_khoan = $_POST['tai_khoan'];
		$mat_khau = $_POST['mat_khau'];

		$query_select = "SELECT * FROM user WHERE username = :tk AND password = :mk";
		$sth = $conn->prepare($query_select);
		$sth->bindParam(":tk", $tai_khoan);
		$sth->bindParam(":mk", $mat_khau);
		if($sth->execute()){
			if($sth->rowCount() > 0){
				$row = $sth->fetch(PDO::FETCH_ASSOC);
				if($row['status'] == 1){
					$_SESSION['tb'] = "Đăng nhập thành công";
				}else{
					$_SESSION['tb'] = "Tài khoản của bạn đã bị khóa";
				}
			}else{
				$_SESSION['tb'] = "Sai tên tài khoản hoặc mật khẩu";
			}
			header('location: login.php');
		}else{
			var_dump($sth->errorInfo());
		}
	}else{
		header('location: login.php');
	}
?>