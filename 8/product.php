<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div id="khung-ngoai">
		<div id="tieu-de">
			<p><b>SẢN PHẨM NỔI BẬT</b></p>
		</div>
		<div id="san-pham">
			<ul>
				<?php
				$conn = new PDO('mysql:host=localhost;dbname=de8;charset=utf8', 'root', '');

				$query_select = "SELECT * FROM product";
				$sth = $conn->prepare($query_select);
				if($sth->execute()){
					while($row = $sth->fetch(PDO::FETCH_ASSOC)){
						$anh = "image/" . $row['anh'];
						$ten = $row['ten'] . ', ' . $row['mo_ta'] . ',' . $row['khuyen_mai'];
				?>
					<li>
						<img class="anh-sp" src=<?= $anh ?>>
						<p><b><?= $ten ?></b></p>
						<p>Giá: <?= number_format($row['gia'], 0, ',', '.') ?> đ</p>
					</li>
				<?php
					}
				}else{
					var_dump($sth->errorInfo());
				}
				?>
			</ul>
		</div>
	</div>
</body>
</html>