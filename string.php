<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $strLower = strtolower($str); 
    for ($i = 0; $i < strlen($strLower); $i++) {
        if (in_array($strLower[$i], $vowels)) {
            $vowelCount++;
        }
    }
    return $vowelCount;
}

function reverseString($str) {
    return strrev($str);
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);
    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
