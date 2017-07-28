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