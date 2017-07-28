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
function average ($array) 
{
 if(is_array) && $array = array_sum($array) / count($array);

 return $result;
}

//      echo average([1, 2, 3]);  // 2
//         average([4, 6, 8, 10, 12]) // 8

// 1. Write a function named `countOdds` that accepts an array of numbers and
//    returns the number of odd numbers in the array.
function countOdds ($input) 
{
if(is_array($input) && is_numeric($input) % 2 == 1) {
	return $input;
}

//         countOdds([1, 2, 3]); // 2
//         countOdds([4, 6, 8, 10]) // 0
//         countOdds([1, 2, 1, 1]) // 3

// 1. Write a function named `convertNameToAssociativeArray` that accepts a string that
//    contains a first name and last name separated by a space, and returns an
//    associative array with keys of `firstName` and `lastName`.

// function convertNameToAssociativeArray()
// {

// }

//         convertNameToAssociativeArray('Harry Potter') // ['firstName' => 'Harry', 'lastName' => 'Potter']
//         convertNameToAssociativeArray('Ron Weasley') // ['firstName' => 'Ron', 'lastName' => 'Weasley']

// 1. Write a function named `fiveTo` that accepts a number and returns an array of
//    the integers from 5 to (including) the passed number.

function fiveTo ($a)
{
	$results = [];
if(is_numeric($a = 5)) {
	array_push($a)	

	} 
	

}

        fiveTo(10) // [5, 6, 7, 8, 9, 10]
//         fiveTo(6) // [5, 6]
//         fiveTo(5) // [5]
//         fiveTo(-2) // [5, 4, 3, 2, 1, 0, -1, -2]

// 1. Write a function named `upperCaseLastNames` that accepts an array of associative arrays
//    where each associative array has indices `firstName` and `lastName` and returns the
//    same array of associative arrays with each last name capitalized

function upperCaseLastNames($array)
{
   
	foreach($array as $key => value)
	}
}
	
   




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








?>