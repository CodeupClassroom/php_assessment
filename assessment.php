<?php

// Write your code here
function isNegative($var){
	if (is_numeric($var) && $var < 0){
		return true;
	} else {
		return false;
	}
};

// echo isNegative(-4);

function average($var){
	$total = 0;
	foreach($var as $indiv){
		$total+=$indiv;
	}
	return $total/count($var);
};

// echo average([1,2,3,4,5]);

function countOdds($var){
	$count = 0;
	foreach($var as $indiv){
		if ($indiv % 2 === 1){
			$count += 1;
		}
	}
	return $count;
}

// echo countOdds([1,3,5,7,8]);

function convertNameToAssociativeArray($var){
	$stringArray = explode(" ",$var);
	$newArray = ["firstName" => $stringArray[0],"lastName" => $stringArray[1]];
	return $newArray;
}

// var_dump(convertNameToAssociativeArray("emmett peters"));

function fiveTo($var){
	$array = [];
	$i=5;
	if ($var > 5){
		while($i<=$var){
			array_push($array,$i);
			$i+=1;
		}	
	} else {
		while($i>=$var){
			array_push($array,$i);
			$i-=1;
		}
	}
	return $array;
}

// var_dump(fiveTo(1));

function upperCaseLastNames($mainArray){
	$newArray = [];
	foreach($mainArray as $key => $nameArray){
		$newNameArray = ['firstName'=>$nameArray['firstName'], 'lastName'=>ucfirst($nameArray['lastName'])];
		array_push($newArray,$newNameArray);
	}
	return $newArray;
	
}

upperCaseLastNames([["firstName" => "emmett","lastName" => "peters"],["firstName" => "cody","lastName" =>"hastings"]]);


















