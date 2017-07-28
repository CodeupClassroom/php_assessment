<?php

//Negative Checker

function isNegative($num){
	if ($num < 0){
		return true;
	} else {
		return false;
	}
}

function average($arr) {
	$sum = array_sum($arr);
	$avg = $sum/count($arr);
	return $avg;
}