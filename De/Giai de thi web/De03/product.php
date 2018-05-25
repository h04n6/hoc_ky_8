<?php
    $conn = mysqli_connect('localhost', 'root', '', 'de03');
    mysqli_set_charset($conn, 'utf8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="product">
        <div class="title">
            <h3>Sản phẩm nổi bật</h3>
        </div>
        <div class="sanpham">
            <?php
                $qr = "select * from product";
                $sanpham = mysqli_query($conn, $qr);
                while ($row = mysqli_fetch_assoc($sanpham)){
            ?>
            <div class="osanpham">
                    <div class="dong1">
                        <div class="anhsp">
                            <img src="img/<?php echo $row['anhsp'] ?>" alt="">
                        </div>
                        <div class="thongtinsp">
                            <p><strong><?php echo $row['tensp'] ?></strong></p>
                            <p><strong>Bảo hành:</strong> <?php echo $row['baohanh'] ?></p>
                            <p><strong>Tình trạng:</strong><br> <?php echo $row['tinhtrang'] ?></p>
                        </div>
                    </div>
                    <div class="nutbam">
                            <button class="btn" id="nutgia"><?php echo number_format($row['gia'], 0, ',','.') ?> VND</button>
                            <button class="btn" id="nutchitiet">Chi tiết</button>
                    </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>