<?php
// Write your code here
// 1. Write a function named `isNegative` that accepts a number and returns `true` or `false` based on whether the input is negative. 
	function isNegative($input){
  if ( $input > 0 ) {
    return 'Positive';
} elseif( $input < 0 ) {
    return 'Negative';
  }
}
	 returns Negative
        isNegative(-1) // true
        isNegative(6) // false

// 1. Write a function named `average` that accepts an array of numbers and returns
//    the average of those numbers

        average([1, 2, 3]) // 2
        average([4, 6, 8, 10, 12]) // 8
function average($arr) {
  if (count($arr) === 1) {
    $average = $arr[0];
  } else {
    sort($arr);
    $count = count($arr); //count items in array
    $sum = array_sum($arr); //sum of numbers in array
    $median = $sum / $count; //divide sum by count
    $average = ceil($median); //convert number in excess value
  }
   return $average;
}
// 1. Write a function named `countOdds` that accepts an array of numbers and
//    returns the number of odd numbers in the array.

//         countOdds([1, 2, 3]) // 2
//         countOdds([4, 6, 8, 10]) // 0
//         countOdds([1, 2, 1, 1]) // 3
$array = array(1,2,3,4,5,6,7,8,9,10);
usort($array, function($a, $b){
  if ($a % 2 == $b % 2) {
    return $a - $b;
  }
  return $a % 2 != 0;
});
print_r($array);

// 1. Write a function named `convertNameToAssociativeArray` that accepts a string that
//    contains a first name and last name separated by a space, and returns an
//    associative array with keys of `firstName` and `lastName`.

//         convertNameToAssociativeArray('Harry Potter') // ['firstName' => 'Harry', 'lastName' => 'Potter']
//         convertNameToAssociativeArray('Ron Weasley') // ['firstName' => 'Ron', 'lastName' => 'Weasley']

// 1. Write a function named `fiveTo` that accepts a number and returns an array of
//    the integers from 5 to (including) the passed number.

//         fiveTo(10) // [5, 6, 7, 8, 9, 10]
//         fiveTo(6) // [5, 6]
//         fiveTo(5) // [5]
//         fiveTo(-2) // [5, 4, 3, 2, 1, 0, -1, -2]

// 1. Write a function named `upperCaseLastNames` that accepts an array of associative arrays
//    where each associative array has indices `firstName` and `lastName` and returns the
//    same array of associative arrays with each last name capitalized

//         $names = [
//             ['firstName' => 'Harry', 'lastName' => 'Potter'],
//             ['firstName' => 'Ron', 'lastName' => 'weasley'],
//             ['firstName' => 'Hermione', 'lastName' => 'granger'],
//         ];
//         upperCaseLastNames(names);
//         /*
//         [
//             ['firstName' => 'Harry', 'lastName' => 'Potter'],
//             ['firstName' => 'Ron', 'lastName' => 'Weasley'],
//             ['firstName' => 'Hermione', 'lastName' => 'Granger'],
//         ]
//          */
