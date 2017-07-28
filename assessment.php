<?php

// Write your code here
function isNegative($var){
	if (is_numeric($var) && $var < 0){
		echo "Its true" .PHP_EOL;
		return true;
	} else {
		echo "Its false" .PHP_EOL;
		return false;
	}
};

echo isNegative(-4);

function average($var){
	$total = 0;
	foreach($var as $indiv){
		$total+=$indiv;
	}
	return $total/count($var);
};

echo average([1,2,3,4,5]);

function countOdds($var){
	$count = 0;
	foreach($var as $indiv){
		if ($indiv % 2 === 1){
			$count += 1;
		}
	}
	return $count;
}

echo countOdds([1,3,5,7,8]);