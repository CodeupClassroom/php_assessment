<?php

// Write your code here
function isNegative($var){
	if (is_numeric($var) && $var < 0){
		return true;
	} else {
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

 