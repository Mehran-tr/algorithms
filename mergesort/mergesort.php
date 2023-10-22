<?php

/*
* Overview of Merge Sort
*Merge Sort is an efficient, stable, comparison-based,
*divide and conquer sorting algorithm.
*Most implementations produce a stable sort,
*meaning that the implementation preserves the input order of equal elements in the sorted output.
*/
function mergeSortGame($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }

    $mid = intdiv(count($arr), 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSortGame($left);
    $right = mergeSortGame($right);

    return gameMerge($left, $right);
}

function gameMerge($left, $right)
{
    $result = [];

    while (count($left) > 0 && count($right) > 0) {
        echo "\nLeft: " . $left[0] . " | Right: " . $right[0] . "\n";
        echo "Which number is next in the merged list? ";

        $guess = intval(trim(fgets(STDIN)));

        if ($guess == $left[0] && $left[0] <= $right[0] || $guess == $right[0] && $right[0] < $left[0]) {
            $result[] = ($guess == $left[0]) ? array_shift($left) : array_shift($right);
            echo "Correct!\n";
        } else {
            echo "Incorrect. The right answer was " . ($left[0] <= $right[0] ? $left[0] : $right[0]) . ".\n";
            exit;
        }
    }

    while (count($left) > 0) {
        $result[] = array_shift($left);
    }

    while (count($right) > 0) {
        $result[] = array_shift($right);
    }

    return $result;
}

echo "Welcome to the Merge Sort Challenge!\n";
$numbers = [5, 2, 9, 1, 4, 6]; // You can shuffle or change this list if you want
echo "Your numbers are: " . implode(", ", $numbers) . "\n";
$sortedNumbers = mergeSortGame($numbers);
echo "Congratulations! The sorted numbers are: " . implode(", ", $sortedNumbers) . "\n";

?>

