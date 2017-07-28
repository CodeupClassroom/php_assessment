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

var_dump(isNegative(6));



//         isNegative(-1) // true
//         isNegative(6) // false

// 1. Write a function named `average` that accepts an array of numbers and returns
//    the average of those numbers

$numbers = array(1, 2, 3,4,5);

function average($array) {
 return array_sum($array) / count($array);
}


// 1. Write a function named `countOdds` that accepts an array of numbers and
//    returns the number of odd numbers in the array.

//         countOdds([1, 2, 3]) // 2
//         countOdds([4, 6, 8, 10]) // 0
//         countOdds([1, 2, 1, 1]) // 3
$numbers = array(1,2,3,4,5);

function countOdds ($array) {
	 if(is_numeric($input)) {
        return $input % 2 === 0;
    } else {
    	if(is_numeric($input)) {
        return $input % 2 === 0;

    }
    return false;
	
}

// 1. Write a function named `convertNameToAssociativeArray` that accepts a string that
//    contains a first name and last name separated by a space, and returns an
//    associative array with keys of `firstName` and `lastName`.

        $a= array('Harry Potter');
        $aa= array('');// ['firstName' => 'Harry', 'lastName' => 'Potter']
//         convertNameToAssociativeArray('Ron Weasley') // ['firstName' => 'Ron', 'lastName' => 'Weasley']

function convertNameToAssociativeArray ($a;)
foreach ( = array('firstName' => 'Harry', 'lastName' => 'Potter')) {
  $aa[$val] = $idx + 1;
}
print_r($aa);


// <!-- // 1. Write a function named `fiveTo` that accepts a number and returns an array of
//    the integers from 5 to (including) the passed number.

//         fiveTo(10) // [5, 6, 7, 8, 9, 10]
//         fiveTo(6) // [5, 6]
//         fiveTo(5) // [5]
//         fiveTo(-2) // [5, 4, 3, 2, 1, 0, -1, -2]
$numberOuput = array();
function fiveTo () {
	for ($i=0; $i > 0 ; $i+) { 
		return $numberOuput;
	}

}

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
//          */ -->
// // Write your code here