<?php

$str = "013021";

// Lấy giờ
$hour = substr($str, 0, 2);

// Lấy phút
$minute = substr($str, 2, 2);

// Lấy giây
$second = substr($str, 4, 2);

// Tạo chuỗi kết quả
$time = $hour . ":" . $minute . ":" . $second;

echo $time; 