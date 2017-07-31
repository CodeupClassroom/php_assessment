<?php

// 1. Write a function named `isNegative` that accepts a number and returns `true` or `false` 
// based on whether the input is negative.

function isNegative($a)
{
if($a < 0)
{
  return true;
} if($a >= 0)
	return false;
}

// var_dump(isNegative(-1));



//         isNegative(-1) // true
//         isNegative(6) // false

// 1. Write a function named `average` that accepts an array of numbers and returns
//    the average of those numbers

function average($array){
	$sum = array_sum($array);
	$divideBy = count($array);
	$average = $sum/$divideBy;
	return $average;
}

// var_dump(average([4, 6, 8, 10, 12]));

//         average([1, 2, 3]) // 2
//         average([4, 6, 8, 10, 12]) // 8

// 1. Write a function named `countOdds` that accepts an array of numbers and
//    returns the number of odd numbers in the array.

function countOdds($array){
	$howMany = 0;
	foreach ($array as $key => $value) {
		if ($value % 2 === 0) {
			continue;
		} else if ($value % 2 === 1) {
			$howMany++;
		}
	}
	return $howMany;
}

// var_dump(countOdds([1, 2, 1, 1]));

//         countOdds([1, 2, 3]) // 2
//         countOdds([4, 6, 8, 10]) // 0
//         countOdds([1, 2, 1, 1]) // 3


// 1. Write a function named `convertNameToAssociativeArray` that accepts a string that
//    contains a first name and last name separated by a space, and returns an
//    associative array with keys of `firstName` and `lastName`.

function convertNameToAssociativeArray($string){
	$newArray = explode(" ", $string);
	$associate = [];
	$associate["firstName"] = $newArray[0];
	$associate["lastName"] = $newArray[1];
	return $associate;
}

// var_dump(convertNameToAssociativeArray("Edgelord Mcgee"));

//         convertNameToAssociativeArray('Harry Potter') // ['firstName' => 'Harry', 'lastName' => 'Potter']
//         convertNameToAssociativeArray('Ron Weasley') // ['firstName' => 'Ron', 'lastName' => 'Weasley']

// 1. Write a function named `fiveTo` that accepts a number and returns an array of
//    the integers from 5 to (including) the passed number.

function fiveTo($number){
	$fiveTo = [];
	if ($number > 5) {
		for ($i= 5; $i <= $number ; $i++) { 
			array_push($fiveTo, $i);
		}

	} else if ($number < 5) {
		for ($i= 5; $i >= $number ; $i--) { 
			array_push($fiveTo, $i);
		}
	} elseif ($number == 5) {
		array_push($fiveTo, 5);
	}
	return $fiveTo;
}

// var_dump(fiveTo(-2));

//         fiveTo(10) // [5, 6, 7, 8, 9, 10]
//         fiveTo(6) // [5, 6]
//         fiveTo(5) // [5]
//         fiveTo(-2) // [5, 4, 3, 2, 1, 0, -1, -2]

// 1. Write a function named `upperCaseLastNames` that accepts an array of associative arrays
//    where each associative array has indices `firstName` and `lastName` and returns the
//    same array of associative arrays with each last name capitalized

function upperCaseLastNames($array){
	$theseGuys = $array;
	foreach ($theseGuys as $key => $value) {
		$value["lastName"] = ucfirst($value["lastName"]);
		return $value;
	}
	return $theseGuys;
}
        $names = [
            ['firstName' => 'Harry', 'lastName' => 'potter'],
            ['firstName' => 'Ron', 'lastName' => 'weasley'],
            ['firstName' => 'Hermione', 'lastName' => 'granger']
            ];

var_dump(upperCaseLastNames($names));

//         ];
//         upperCaseLastNames(names);
//         /*
//         [
//             ['firstName' => 'Harry', 'lastName' => 'Potter'],
//             ['firstName' => 'Ron', 'lastName' => 'Weasley'],
//             ['firstName' => 'Hermione', 'lastName' => 'Granger'],
//         ]
//          */
// // Write your code here