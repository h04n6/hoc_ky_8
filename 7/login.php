<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		session_start();

		if(isset($_SESSION['tb'])){
			echo $_SESSION['tb'];
			unset($_SESSION['tb']);
		}
	?>
	<form id="form-dang-nhap" method="post" action="xldangnhap.php">
		<div id="tieu-de">
			<img id="anh-tieu-de" alt="Anh Tieu De" src="image/user.png">
			<b>ĐĂNG NHẬP HỆ THỐNG</b>
		</div>
		<div id="noi-dung">
			<div class="form-group">
				<label for="tai-khoan">Tài khoản</label>
				<input id="tai-khoan" name="tai_khoan" class="form-control">
			</div>
			<div class="form-group">
				<label for="mat-khau">Mật khẩu</label>
				<input type="password" id="mat-khau" name="mat_khau" class="form-control">
			</div>
			<div class="form-group">
				<label></label>
				<button class="button" type="submit" name="btn_dang_nhap">Đăng nhập</button>
				<button class="button" type="submit" name="btn_thoat">Thoát</button>
			</div>			
		</div>
	</form>

	<script type="text/javascript">
		document.getElementById('btn-dang-nhap').addEventListener('click', function(e){
			$tai_khoan = document.getElementById('tai-khoan');
			if($tai_khoan.value == ''){
				alert("Bạn phải điền tài khoản");
				$tai_khoan.focus();
				e.preventDefault();
			}else{
				$mat_khau = document.getElementById('mat-khau');
				if($mat_khau.value == ''){
					alert("Bạn phải điền mật khẩu");
					$mat_khau.focus();
					e.preventDefault();
				}
			}
		})
	</script>
</body>
</html>