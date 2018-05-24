<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		if(isset($_SESSION['thong_bao'])){
			echo $_SESSION['thong_bao'];
			unset($_SESSION['thong_bao']);
		}
	?>
	<form id="form-insert" method="post" action="xlthem.php">
		<div id="header">
			<img src="5.jpg" height="38px" width="450px">
		</div>
		<div id="main-content">
			<div class="form-group">
				<label for="your-name">Your name:</label>
				<input name="your_name" id="your-name" class="form-control">
			</div>
			<div class="form-group">
				<label for="your-subname">Your subname:</label>
				<input name="your_subname" id="your-subname" class="form-control">
			</div>
			<div class="form-group">
				<label for="email-">Email:</label>
				<input type="email" name="email_" id="email-" class="form-control">
			</div>
			<div class="form-group">
				<label for="message-" class="top-label">Message:</label>
				<textarea rows="5" name="message_" id="message-" class="form-control"></textarea>
			</div>
			<div class="action">
				<button id="btn-insert" type="submit" class="button">Send</button>
			</div>
		</div>
		<div id="footer">
			<img src="5.jpg" height="68px" width="450px">
		</div>
	</form>

	<script type="text/javascript">
		document.getElementById("btn-insert").addEventListener('click', function(e){
			var $yn = document.getElementById("your-name").value;
			var $ysn = document.getElementById("your-subname").value;
			var $em = document.getElementById("email-").value;
			var $me = document.getElementById("message-").value;
			if($yn == '' || $ysn == '' || $em == '' || $me == ''){
				alert('You must fill all fields');
				e.preventDefault();
			}
		})
	</script>
</body>
</html>