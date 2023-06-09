<?php
$array = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];
$arrayCopy = $array;

$length = count($array);

/**
 * @param array $arr
 * @return float|int
 */
function average(array $arr)
{
    $sum = array_sum($arr);
    $length = count($arr);

    return $sum / $length;
}

# 1. Tính trung bình cộng các số trong mảng
echo "Trung bình cộng: " . average($array);

sort($arrayCopy);

# 2. Tìm số lớn nhất, số nhỏ nhất trong mảng
echo "\nSố nhỏ nhất: " . $arrayCopy[0];
echo "\nSố lớn nhất: " . $arrayCopy[$length - 1];

# 3. Liệt kê 5 số nguyên nhỏ nhất, 2 số nguyên lớn nhất trong mảng
echo "\n5 số nhỏ nhất: ";

for ($i = 0; $i < 5; $i++) {
    echo "$arrayCopy[$i] ";
}

echo "\n2 số lớn nhất: ";

for ($i = $length - 1; $i > $length - 3; $i--) {
    echo "$arrayCopy[$i] ";
}

# 4. Sắp xếp mảng theo thứ tự tăng dần các phần tử
sort($arrayCopy);

echo "\nMảng theo thứ tự tăng dần là: ";

foreach ($arrayCopy as $v) {
    echo "$v ";
}

# 5. Sắp xếp mảng theo thứ tự tăng dần các phần tử
rsort($arrayCopy);

echo "\nMảng theo thứ tự giảm dần là: ";

foreach ($arrayCopy as $v) {
    echo "$v ";
}

# 6. Thay thế phần tử thứ 5 của mảng ban đầu bằng số 1000
$array[4] = 1000;

echo "\nThay thế phần tử thứ 5 của mảng ban đầu bằng số 1000:";

foreach ($array as $v) {
    echo "$v ";
}

?>