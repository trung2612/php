<?php

/**
 * Summary of isStringContainingString
 * @param string $string1
 * @param string $string2
 * @return string
 */
function echoStringContainingString(string $string1, string $string2): string
{
    if (str_contains($string1, $string2)) {
        return "OKIE";
    } else {
        return "Không OKIE";
    }
}

$str1 = "Hello World";
$str2 = "Hello";

echo echoStringContainingString($str1, $str2);

?>