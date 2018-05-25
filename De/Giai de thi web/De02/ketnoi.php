<?php
$conn = mysqli_connect('localhost', 'root', '', 'de02')
or die('Không kết nối đc!');
mysqli_set_charset($conn, 'utf8');