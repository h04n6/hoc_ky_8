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
	<form id="form-send" method="post" action="xlgui.php">
		<div id="header">
			<b>Messenger Form</b>
		</div>
		<div id="main-content">
			<div class="form-group">
				<label for="name-">Your name:</label>
				<input name="name_" id="name-" class="form-control">	
			</div>
			<div class="line"></div>
			<div class="form-group">
				<label for="surname-">Your surname:</label>
				<input name="surname_" id="surname-" class="form-control">	
			</div>
			<div class="line"></div>
			<div class="form-group">
				<label for="email-">Your email:</label>
				<input type="email" name="email_" id="email-" class="form-control">	
			</div>
			<div class="line"></div>
			<div class="form-group">
				<label for="message-">Message:</label>
				<textarea id="message-" name="message_" rows="5" class="form-control"></textarea>
			</div>
		</div>
		<div id="footer">
			<div class="action">
				<button id="btn-send" class="button" type="submit">Send</button>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		document.getElementById('btn-send').addEventListener('click', function(e){
			$name = document.getElementById('name-').value;
			$surname = document.getElementById('surname-').value;
			$email = document.getElementById('email-').value;
			$message = document.getElementById('message-').value;

			if($name == ''){
				alert("You must enter a name");
				document.getElementById('name-').focus();
				e.preventDefault();
			}else if($surname == ''){
				alert("You must enter a surname");
				document.getElementById('surname-').focus();
				e.preventDefault();
			}else if($email == ''){
				alert("You must enter an email");
				document.getElementById('email-').focus();
				e.preventDefault();
			}else if($message == ''){
				alert("You must enter a message");
				document.getElementById('message-').focus();
				e.preventDefault();
			}
		})
	</script>
</body>
</html>