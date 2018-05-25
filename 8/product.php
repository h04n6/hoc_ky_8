<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="khung-ngoai">
		<div id="tieu-de">
			<div id="sp-noibat">
				<b>SẢN PHẨM NỔI BẬT</b>
			</div>
		</div>
		<div id="san-pham">
			<ul>
				<?php
				$conn = new PDO('mysql:host=localhost;dbname=de8;charset=utf8', 'root', '');
				$query_select = "SELECT * FROM product";
				$sth = $conn->prepare($query_select);
				$sth->execute();
				while($row = $sth->fetch(PDO::FETCH_ASSOC)){
					$mo_ta = $row['ten'] . ', ' . $row['mo_ta'] . ', ' . $row['khuyen_mai'];
					$gia = 'Giá: ' . $row['gia'];
					$anh = 'image/' . $row['hinh_anh'];
				?>
				<li>
					<img class="anh-sp" src=<?= $anh ?>>
					<p class="mota-sp"><?= $mo_ta ?></p>
					<p class="gia-sp"><?= $gia ?></p>
				</li>	
				<?php
				} 
				?>			
			</ul>
		</div>
	</div>
</body>
</html>