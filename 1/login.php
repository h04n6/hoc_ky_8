<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	if(isset($_SESSION['thong_bao'])){
		if($_SESSION['thong_bao'] == "blocked"){
			echo "Tài khoản của bạn đã bị khóa";
		}else if($_SESSION['thong_bao'] == "ok"){
			echo "Đăng nhập thành công";
		}else{
			echo "Sai tên đăng nhập hoặc mật khẩu";
		}
		unset($_SESSION['thong_bao']);
	}
	?>
	<form id="form-login" method="post" action="xldangnhap.php">
		<div id="header">
			<b>Form Login Account</b>
		</div>
		<div id="main-content">
			<div class="form-group">
				<label for="user-name">Username:</label>
				<input name="user_name" id="user-name" class="form-control">
			</div>
			<div class="line"></div>
			<div class="form-group">
				<label for="pass-">Password:</label>
				<input type="password" name="pass_" id="pass-" class="form-control">
				<br><a href="#" id="forgot-pass">Forgot password?</a>
			</div>
		</div>
		<div id="footer">
			<div class="action">
				<button id="btn-cancel" name="btn_cancel" class="button">Cancel</button>
				<button id="btn-login" name="btn_login" class="button">Login</button>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		document.getElementById("btn-login").addEventListener('click', function(e){
			$un = document.getElementById("user-name").value;
			$pw = document.getElementById("pass-").value;
			if($un == ''){
				alert("Bạn phải điền username");
				document.getElementById("user-name").focus();
				e.preventDefault();
			}else if($pw == ''){
				alert("Bạn phải điền password");
				document.getElementById("pass-").focus();
				e.preventDefault();
			}
		})
	</script>
</body>
</html>