<?php
/**
 * Generates random strings consisting of numbers and uppercase letters
 */
for ($i = 1; $i <= 100; $i++) {
    echo randomString(6) . '<br>';
}

function randomString(
    $length,
    $allowedCharacters = '123456789ABCDEFGHIJKLMNPQRSTUVWXYZ'//No 0's or O's
)
{
    $maxIndex = strlen($allowedCharacters)-1;
    $string = '';
    for ($i = 1; $i <= $length; $i++) {
        $string .= $allowedCharacters[mt_rand(0, $maxIndex)];
    }
    return $string;
}
