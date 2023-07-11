<?php
//Create a function that check if a character is a vowel or consonant.
echo '#1 ------------ <br>';
function checkIfVowel($char)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    if (in_array(strtolower($char), $vowels)) {
        return 'Vowel';
    } else {
        return 'Consonant';
    }
}

$character1 = 'A';
$character2 = 'B';
$result1 = checkIfVowel($character1);
$result2 = checkIfVowel($character2);
echo "$character1 is a $result1 <br>";
echo "$character2 is a $result2";

// Create a function that convert a digit into its word counterpart. E.g. 721 to Seven Two One. 
echo '<br><br> #2 ------------ <br>';
function digitToWord($number)
{
    $digitWords = [
        9 => 'Nine',
        8 => 'Eight',
        7 => 'Seven',
        6 => 'Six',
        5 => 'Five',
        4 => 'Four',
        3 => 'Three',
        2 => 'Two',
        1 => 'One',
        0 => 'Zero'
    ];

    $numberString = strval($number);
    $result = '';

    for ($i = 0; $i < strlen($numberString); $i++) {
        $digit = intval($numberString[$i]);

        if (isset($digitWords[$digit])) {
            $result .= $digitWords[$digit] . ' ';
        }
    }

    return trim($result);
}

$number = 9876543210;
$word = digitToWord($number);
echo "$number in word form: $word";

// Create a function that convert a digit into its word counterpart. E.g. 721 to Seven Two One. 
echo '<br><br> #3 ------------ <br>';
function isDivisibleByThree($number)
{
    return $number % 3 === 0;
}

$number = 31;
if (isDivisibleByThree($number)) {
    echo "$number is divisible by 3.";
} else {
    echo "$number is not divisible by 3.";
}

//Create a function that delete the recurring elements inside a sorted list of strings. 
echo '<br><br> #4 ------------ <br>';
function deleteRecurringElements($sortedList)
{
    $result = [];
    $previousElement = null;

    foreach ($sortedList as $element) {
        if ($element !== $previousElement) {
            $result[] = $element;
        }
        $previousElement = $element;
    }

    return $result;
}

$list = ['apple', 'apple', 'banana', 'banana', 'banana', 'orange', 'orange', 'pear'];
$uniqueList = deleteRecurringElements($list);
print_r($uniqueList);


//Create a function that determine if the given number is an Armstrong Number. An Armstrong Number is a number such that the sum of the cubes of its digits is equal to the number itself. E.g. 153,  1*1*1 + 5*5*5 + 3*3*3 = 153 is an Armstrong number 
echo '<br><br> #5 ------------ <br>';
function isArmstrongNumber($number)
{
    $numString = strval($number);
    $numDigits = strlen($numString);
    $sum = 0;

    for ($i = 0; $i < $numDigits; $i++) {
        $digit = intval($numString[$i]);
        $sum += pow($digit, $numDigits);
    }

    return $sum === $number;
}

$number = 123123123123;
if (isArmstrongNumber($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
