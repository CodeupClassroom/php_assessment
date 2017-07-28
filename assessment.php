<?php

// Write a function named isNegative that accepts a number and returns true or false based on whether the input is negative.

function isNegative($input)
{
	if($input < 0){
		return true;
	} else {
		return false;
	}
}

//Write a function named average that accepts an array of numbers and returns the average of those numbers

function average($input)
{
	$numberOfElements = count($input);

	$sum = array_sum($input);

	$average = $sum / $numberOfElements;

	return $average;
}

//Write a function named countOdds that accepts an array of numbers and returns the number of odd numbers in the array.

function countOdds($input)
{
	$count = 0;

	foreach ($input as $key => $value) {
		if($value % 2 != 0){

			$count++;
		}	
	}

	return $count;

}

//Write a function named convertNameToAssociativeArray that accepts a string that contains a first name and last name separated by a space, and returns an associative array with keys of firstName and lastName.

$testName = "Harry Potter";

function convertNameToAssociativeArray ($input)
{

	$nameArray = explode(" ", $input);

	foreach ($nameArray as $key => &$value) {
		$nameArray['firstName'] = $nameArray[0];
		$nameArray['lastName'] = $nameArray[1];
	}

	return $nameArray;
}

convertNameToAssociativeArray($testName);





//Write a function named fiveTo that accepts a number and returns an array of the integers from 5 to (including) the passed number.



function fiveTo($input)
{
	$numberArray = array( );

	if($input > 5){

		$i = 5;

		do {

			array_push($numberArray, $i);
			$i++;

		} while ($i <= $input);
	
	} elseif ($input < 5){

		$i = 5;

		do {

			array_push($numberArray, $i);
			$i--;

		} while ($i >= $input);

	} else{

		 array_push($numberArray, $input);
	}

	return ($numberArray);

}





//Write a function named upperCaseLastNames that accepts an array of associative arrays where each associative array has indices firstName and lastName and returns the same array of associative arrays with each last name capitalized



 $names = [
     ['firstName' => 'Harry', 'lastName' => 'Potter'],
     ['firstName' => 'Ron', 'lastName' => 'weasley'],
     ['firstName' => 'Hermione', 'lastName' => 'granger'],
 ];



function uppperCaseLastNames($input){

	 foreach ($names as $key => $value) {
	 	
	 	 $names[$key]['lastName'] = ucfirst();
	 	 print_r($names[$key][ucfirst('lastName')]);
	 }

	
}

 var_dump($names);






















