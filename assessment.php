<?php

// Write your code here

//#1 - Write a function named isNegative that accepts a number and returns true or false based on whether the input is negative.

function isNegative($number) {
// ====== // Add code here // =========== //
	if($number < 0) {
		return true . PHP_EOL;
	} else {
		return false . PHP_EOL;
	}
}

 isNegative(-1); // true
 isNegative(6); // false

//================================
// #2 - Write a function named average that accepts an array of numbers and returns the average of those numbers
function average($numberArray){
	$numberArray = array();
	if (is_numeric($numberArray)) {
		$count = count($numberArray);
		$sum = sum($numberArray);
		$average = $sum / $count;
	}
	
	return $average;
}

average([1, 2, 3]) // 2
average([4, 6, 8, 10, 12]) // 8

//================================ 

// $3 Write a function named countOdds that accepts an array of numbers and returns the number of odd numbers in the array.
function countOdds($numbers){
	$numbers = array();
	$count = count($numbers);
	  if ($i % 2 != 0) {
        count($numbers);
    }
return $count;
}
 countOdds([1, 2, 3]) // 2
 countOdds([4, 6, 8, 10]) // 0
 countOdds([1, 2, 1, 1]) // 3
//================================
//#4 Write a function named convertNameToAssociativeArray that accepts a string that contains a first name and last name separated by a space, and returns an associative array with keys of firstName and lastName.

function convertNameToAssociativeArray($nameString){
	$nameString = array();
	$name = explode[", ",$nameString];
	foreach ($name as $key => $value) {
		$name = [
			$name["firstName"] => $firstName,
			$name["lastName"] => $lastName
		]; 
	}
return $name;
}

 convertNameToAssociativeArray('Harry Potter') // ['firstName' => 'Harry', 'lastName' => 'Potter']
 convertNameToAssociativeArray('Ron Weasley') // ['firstName' => 'Ron', 'lastName' => 'Weasley']
//================================
// #5 - Write a function named fiveTo that accepts a number and returns an array of the integers from 5 to (including) the passed number.

// function fiveTo($number) {
// 	fwrite(STDOUT, "Please enter increment: ");
// 	$increment = trim(fgets(STDIN));
// 	if (! is_numeric($increment)){
// 			exit;
// 		}

// 	if ($increment == "") {
// 		$increment = 1;
// 	}

// 	for ($i = $startingNumber; $i+=$increment){
// 	return $i . PHP_EOL;
// }

 //fiveTo(10) // [5, 6, 7, 8, 9, 10]
 //fiveTo(6) // [5, 6]
 //fiveTo(5) // [5]
 //fiveTo(-2) // [5, 4, 3, 2, 1, 0, -1, -2]
//================================
// #6 - Write a function named upperCaseLastNames that accepts an array of associative arrays where each associative array has indices firstName and lastName and returns the same array of associative arrays with each last name capitalized

 //$names = [
     //['firstName' => 'Harry', 'lastName' => 'Potter'],
     //['firstName' => 'Ron', 'lastName' => 'weasley'],
     //['firstName' => 'Hermione', 'lastName' => 'granger'],
 //];
 //upperCaseLastNames(names);
 /*
 [
     ['firstName' => 'Harry', 'lastName' => 'Potter'],
     ['firstName' => 'Ron', 'lastName' => 'Weasley'],
     ['firstName' => 'Hermione', 'lastName' => 'Granger'],
 ]
 // */