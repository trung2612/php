<?php

/**
 * Solve quadratic equations
 * @param int $a
 * @param int $b
 * @param int $c
 * @return void
 */
function quadraticEquations(int $a, int $b, int $c)
{
    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        echo "The equation has no solution";
    } elseif ($delta === 0) {
        $result = -$b / 2 / $a;

        echo "The equation with a double solution is {$result}";
    } else {
        $numerator1 = -$b + sqrt($delta);
        $numerator2 = -$b - sqrt($delta);
        $denominator = 2 * $a;
        $result1 = $numerator1 / $denominator;
        $result2 = $numerator2 / $denominator;

        echo "The equation with 2 solutions is \n";
        echo "x1 = {$result1} ";
        echo "and x2 = {$result2}";
    }

}

quadraticEquations(1, -3, 2);