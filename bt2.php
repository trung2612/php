<?php
/**
 * Print out the multiplication table
 * @return mixed
 */
for ($i = 1; $i <= 10; $i++) {
    echo "Bảng cửu chương $i:\n";
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo "$i x $j = $result\n";
    }
    echo "\n";
}
?>