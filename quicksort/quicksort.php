<?php
/*
* Overview of Quick Sort
 * Quick Sort is a divide-and-conquer
 *  algorithm that works by selecting a 'pivot' element from the array and partitioning the other elements into two sub-arrays,
 *  according to whether they are less than or greater than the pivot. The sub-arrays are then sorted recursively.
 *  This can be done in-place, requiring small additional amounts of memory to perform the sorting.
 * this example: Sorting Cards in a Card Game
*/
function quickSort($array)
{
    if (count($array) < 2) {
        return $array;
    }

    $pivot = $array[count($array) - 1];  // Choosing the last element as the pivot
    $left = $right = [];

    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] < $pivot) {  // Note the < to sort in ascending order
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

$hand = [10, 3, 8, 7, 4, 1 ];
$sortedHand = quickSort($hand);

echo "Sorted Hand: \n";
foreach ($sortedHand as $card) {
    echo $card . "\n";
}
?>
