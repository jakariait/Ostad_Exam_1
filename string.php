<?php

$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowel($string)
{
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count  = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

// Iterate over each string and perform operations
foreach ($strings as $string) {
    $vowelCount     = countVowel($string);
    $reversedString = strrev($string);

    echo "Original String: {$string}, Vowel Count: {$vowelCount}, Reversed String: {$reversedString} <br>" . PHP_EOL;
}
