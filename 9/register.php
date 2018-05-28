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
	<form id="form-create" method="post" action="xlthem.php">
		<div id="tieu-de">
			<p>Create an account</p>
		</div>
		<div id="noi-dung">
			<p id="detail">Your personal detail</p>
			<div class="form-group">
				<label for="username-">Your username *</label>
				<input id="username-" name="username_" class="form-control">
			</div>
			<div class="form-group">
				<label for="name-">Your name *</label>
				<input id="name-" name="name_" class="form-control">
			</div>
			<div class="form-group">
				<label for="email-">Email *</label>
				<input type="email" id="email-" name="email_" class="form-control">
			</div>
			<p id="password">Your password</p>
			<div class="form-group">
				<label for="password-">Password *</label>
				<input type="password" id="password-" name="password_" class="form-control">
			</div>
			<div class="form-group">
				<label for="password2-">Confirm password *</label>
				<input type="password" id="password2-" name="password2_" class="form-control">
			</div>
		</div>
		<div id="action">
			<div class="form-group">
				<label></label>
				<button class="button" id="btn-create" type="submit" name="btn_create">Create an account</button>
				<button class="button" id="btn-cancel" type="submit" name="btn_cancel">Cancel</button>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		document.getElementById('btn-create').addEventListener('click', function(e){
			$un = document.getElementById('username-').value;
			$na = document.getElementById('name-').value;
			$em = document.getElementById('email-').value;
			$p1 = document.getElementById('password-').value;
			$p2 = document.getElementById('password2-');
			if($un == '' || $na == '' || $em == '' || $p1 == '' || $p2.value == ''){
				alert('Bạn chưa điền đầy đủ các ô có chứa dấu *');
				e.preventDefault();
			}else if($p1 != $p2.value){
				alert('Mật khẩu nhập lại chưa trùng khớp.');
				$p2.focus();
				e.preventDefault();
			}
			
		})
	</script>
</body>
</html>