<?php
// Using IF...ELSE statement, write a code that check if given string is more than 5 characters. 
echo '<br> #1 Using IF...ELSE statement';
echo '<br> -------------------------<br>';
$word1 = 'class';
$word2 = 'kodego';
$word3 = 'top';

function checkCharacterCount($value)
{
    if (strlen($value) > 5) {
        echo $value . ' is more than 5 characters 😲 <br>';
    } else {
        echo $value . ' is less than characters 👶 <br>';
    }
}
checkCharacterCount($word1);
checkCharacterCount($word2);
checkCharacterCount($word3);

// There are two deals of an item to buy. The quantities and prices of the item are given below. Write a program in PHP to find the best deal to purchase the item.
echo ' <br> #2 Best deal to purchase';
echo '<br> -------------------------<br>';


$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

function bestDeal($quantity1, $price1, $quantity2, $price2)
{
    $total1 = $quantity1 * $price1;
    $total2 = $quantity2 * $price2;

    if ($total1 < $total2) {
        echo 'Product one with ' . $quantity1 . ' pcs at a price of ' . $price1 . ' is the BEST DEAL to purchase';
    } else if ($total1 > $total2) {
        echo 'Product two with ' . $quantity1 . ' pcs at a price of ' . $price1 . ' is the BEST DEAL to purchase';
    } else if ($total1 === $total2) {
        echo 'ITS THE SAME';
    } else {
        echo 'Invalid';
    }
}

bestDeal($quantity1, $price1, $quantity2, $price2);

// Using SWITCH CASE statement, write a code that determine the number of days in a given month. Return "invalid" if the operator is invalid. (10pts)
echo '<br><br> #3 Days is a Month';
echo '<br> -------------------------<br>';
$monthName = 'March';

function daysInAMonths($monthName)
{
    switch ($monthName) {
        case 'January':
        case 'March':
        case 'May':
        case 'July':
        case 'August':
        case 'October':
        case 'December':
            echo $monthName . ' has 31 days.';
            break;
        case 'April':
        case 'June':
        case 'September':
        case 'November':
            echo $monthName . ' has 30 days.';
            break;
        case 'February':
            echo $monthName . ' has 28 or 29 days.';
            break;
        default:
            echo 'Invalid month name.';
            break;
    }
}

daysInAMonths($monthName);

// Write a program to loop over the given JSON data. Display the values via loops or recursion. (10pts)
echo '<br><br> #4 Display Value';
echo '<br> -------------------------<br>';
$students =  '[{"name" : "John Garg","age"  : "15","school" : "Ahlcon Public school"},
    {"name" : "Smith Soy","age"  : "16","school" : "St. Marie school"},
    {"name" : "Charle Rena","age"  : "16","school" : "St. Columba school"}]';

$studentsArray = json_decode($students, true);


foreach ($studentsArray as $student) {
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "School: " . $student['school'] . "<br><br>";
}


// Write a program to loop over the given JSON data. Display the values via loops or recursion. (10pts)
echo '<br><br> #5 Division Table';
echo '<br> -------------------------<br>';

$size = 5;
echo '<style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
      </style>';

echo '<table>';
echo '<tr>';
echo '<th></th>';

for ($i = 1; $i <= $size; $i++) {
    echo "<th>$i</th>";
}
echo '</tr>';
for ($i = 1; $i <= $size; $i++) {
    echo '<tr>';
    echo "<th>$i</th>";

    for ($j = 1; $j <= $size; $j++) {
        $result = $i / $j;
        echo "<td>$result</td>";
    }

    echo '</tr>';
}
echo '</table>';
