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
		echo $_SESSION['thong_bao'];
		unset($_SESSION['thong_bao']);
	}
	?>
	<form id="form-create-account" method="post" action="xlthem.php">
		<div id="tieu-de">
			<p class="line"><b>Create your account</b></p>
		</div>
		<div id="main-content">
			<div class="form-group">
				<label for="name-">Name:</label>
				<input id="name-" name="name_" class="form-control">
			</div>
			<div class="form-group">
				<label for="email-">Email:</label>
				<input type="email" id="email-" name="email_" class="form-control">
			</div>
			<div class="form-group">
				<label for="username-">Userame:</label>
				<input id="username-" name="username_" class="form-control">
			</div>
			<div class="form-group">
				<label for="password-">Password:</label>
				<input type="password" id="password-" name="password_" class="form-control">
			</div>
			<div class="form-group">
				<label for="password2-">Password Again:</label>
				<input type="password" id="password2-" name="password2_" class="form-control">
			</div>
			<div class="form-group">
				<label></label>
				<button id="btn-create" type="submit">Create Account</button>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		document.getElementById('btn-create').addEventListener('click', function(e){
			$email = document.getElementById('email-');
			$filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!$filter.test($email.value)){
				alert("You enter an incorrect email address.\nExample@gmail.com");
				$email.focus();
				e.preventDefault();
			}else{
				$p1 = document.getElementById('password-');
				$p2 = document.getElementById('password2-');
				if($p1.value != $p2.value){
					alert("You typed wrong 'password again' field!");
					$p2.focus();
					e.preventDefault();
				}
			}
		})
	</script>
</body>
</html>