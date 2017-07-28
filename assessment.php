<?php

function isNegative($number) 
{
	if(is_Numeric($number)) {
		if ($number < 0) {
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
};

function average($numberArray) 
{
	$allNumbersAdded = 0;
	foreach($numberArray as $number) {
		$allNumbersAdded += $number;
	}
	$averageOfNumbers = $allNumbersAdded/count($numberArray);
	return $averageOfNumbers;
}

function countOdds($numberArray) 
{
	$oddNumberCount = 0;
	foreach($numberArray as $number) {
		if($number % 2 !==0) {
			$oddNumberCount += 1;
		}
	}
	return $oddNumberCount;
}
// needs work
function convertNameToAssociativeArray($nameString) 
{
	$nameArray = explode(' ',$nameString);
	array_walk($nameArray, function($nameArray) {
    	$nameArray["first"] = $nameArray[0];
    	$nameArray["last"] = $nameArray[1];
    	unset($nameArray[0]);
    	unset($nameArray[1]);
    });
    return $nameArray;

}

function fiveTo($number) 
{
	$fiveToNumber = [];
	if ($number >= 5) {
		for($i = 5; $i <= $number; $i++){
			array_push($fiveToNumber, $i);
		}
		return $fiveToNumber;
	} else if ($number < 5) {
		for($i = 5; $i >= $number; $i--){
			array_push($fiveToNumber, $i);
		}
		return $fiveToNumber;
	}
}

function upperCaseLastNames($names) 
{
	foreach($names as $name) {
		foreach($name as $key => $value) {
			return [$key]['lastName'];
		}
	}
}
 $names = [
     ['firstName' => 'Harry', 'lastName' => 'Potter'],
     ['firstName' => 'Ron', 'lastName' => 'weasley'],
     ['firstName' => 'Hermione', 'lastName' => 'granger'],
 ];
  var_dump(upperCaseLastNames($names));