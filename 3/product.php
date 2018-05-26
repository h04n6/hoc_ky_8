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
			<b>SẢN PHẨM NỔI BẬT</b>
		</div>
		<div id="san-pham">
			<ul>
				<?php
					$conn = new PDO('mysql:host=localhost;dbname=de3;charset=utf8', 'root', '');

					$query_select = "SELECT * FROM product";
					$sth = $conn->prepare($query_select);
					if($sth->execute()){
						while($row = $sth->fetch(PDO::FETCH_ASSOC)){
							$gia = number_format($row['gia'], 0, ',', '.');
							$anh = "image/" . $row['anh'];
				?>
				<li>
					<div class="dong">
						<div class="anh-sp">
							<a href="#"><img class="anh-sp" src=<?= $anh ?>></a>
						</div>
						<div class="thong-tin-sp">
							<p><b><?= $row['ten'] ?></b></p>
							<p><b>Bảo hành: </b><?= $row['bao_hanh'] ?></p>
							<p><b>Trạng thái: </b><?= $row['trang_thai'] ?></p>
						</div>
					</div>
					<div class="nut">
						<button class="button" id="btn-gia">Giá <?= $gia ?></button>
						<button class="button" id="btn-chi-tiet">Chi tiết</button>
					</div>	
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