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
			<b>THẾ GIỚI LAPTOP</b>
		</div>
		<div id="san-pham">
			<ul>
			<?php
				$conn = new PDO('mysql:host=localhost;dbname=de6;charset=utf8', 'root', '');

				$query_select = "SELECT * FROM product";
				$sth = $conn->prepare($query_select);
				if($sth->execute()){
					while($row = $sth->fetch(PDO::FETCH_ASSOC)){
						$anh = "image/" . $row['anh'];
						if(strcmp($row['trang_thai'], "Mới") == 0)
							$new = "image/new.gif";
						else
							$new = "";
			?>
				<li>
					<p><b><?= $row['ten'] ?></b></p>
					<img alt="Cũ - 99%" class="new-sp" src=<?= $new ?>>
					<img alt="Image NULL" class="anh-sp" src=<?= $anh ?>>
					<p><b>Giá: <?= number_format($row['gia'], 0, '.' , ',') ?> VNĐ</b></p>
					<a href="#" class="mua-hang"><p>Mua hàng online</p></a>
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