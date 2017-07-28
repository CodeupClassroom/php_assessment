<?php

//Negative Checker
function isNegative($num){
	if ($num < 0){
		return true;
	} else {
		return false;
	}
}

//Average
function average($arr) {
	$sum = array_sum($arr);
	$avg = $sum/count($arr);
	return $avg;
}

//Odd counter
function countOdds($arr){
	$oddCount = 0;
	for ($i = 0; $i < count($arr); $i++){
		if ($arr[$i]%2 != 0){
			$oddCount++;
		}
	}
	return $oddCount;
}

//Convert Name to Assoc Arr
function convertNameToAssociativeArray($name){
	$nameArr = [];
	$nameArr = explode(' ', $name);
	$assocArray = ['firstName' => $nameArr[0], 'lastName' => $nameArr[1]];
	return $assocArray;
}

//Five To
function fiveTo($targetNum){
	$arr = [];
	if ($targetNum < 5) {
		for ($i = 5; $i >= $targetNum; $i--){
			array_push($arr, $i);
		}
		return $arr;
	} else {
		for ($i = 5; $i <= $targetNum; $i++){
			array_push($arr, $i);
		}
		return $arr;
	}
}
//Upper Last Names
$names = [
     ['firstName' => 'Harry', 'lastName' => 'Potter'],
     ['firstName' => 'Ron', 'lastName' => 'weasley'],
     ['firstName' => 'Hermione', 'lastName' => 'granger'],
 ];

function upperCaseLastNames($arr){
	for ($i = 0; $i < count($arr); $i++){
		$arr[$i]{"lastName"} = ucfirst($arr[$i]{"lastName"});
	}
	return $arr;
}

print_r(upperCaseLastNames($names));

