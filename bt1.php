<?php
/**
 * Check if parameter is divisible by 3?
 * @param int $num
 * @return bool
 */
 function isDivisibleToThree(int $num): bool
{
    return $num % 3 === 0;
}
/**
 * Check if parameter is divisible by 5?
 * @param  int $num
 * @return bool
 */
function isDivisibleToFive(int $num): bool
{
    return $num % 5 === 0;
}
/**
 * Check if parameter is divisible by 3 and 5?
 * @param int $num
 * @return bool
 */
function isDivisibleToThreeAndFive(int $num): bool
{
    return isDivisibleToThree($num) && isDivisibleToFive($num);
}
/**
 * Print out numbers from 1 to 100
 * If the number is divisible by 3, print "Three"
 * If the number is divisible by 5, print "Five"
 * If the number is divisible by 3 and 5, print "Three-Five"
 * @return mixed
 */
for ($i = 1; $i <= 100; $i++) {
    switch ($i) {
        case isDivisibleToThreeAndFive($i):
            echo "Three-Five\n";
            break;
        case isDivisibleToThree($i):
            echo "Three\n";
            break;
        case isDivisibleToFive($i):
            echo "Five\n";
            break;
        default:
            echo $i . "\n";
    }

}
?>