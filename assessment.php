<?php


	function isNegative($input)
	{
		if($input < 0){
			return true;
		}
		return false;
	}


	function average($arr)
	{
		return array_sum($arr) / count(array_filter($arr));
	}


	function countOdds($arr)
	{
		$counter = 0;
		foreach ($arr as $value) {
			if($value % 2 !== 0) {
				$counter += 1;
			}
		}
		return $counter;
	}


	function convertNameToAssociativeArray($str)
	{
		$arr = explode(" ", $str);
		$finalArray = ["firstName" => $arr[0], "lastName" => $arr[1]];		
		return $finalArray;
	}


	function fiveTo($input)
	{
		$array = [];
		$i = 5;
		array_push($array, $i);
		while ($i !== $input){	
			if ($input > 5) {
				$i++;
				array_push($array, $i);
			} elseif ($input < 5){
				$i--;
				array_push($array, $i);
			} 
		}
		return $array;
		}


// 1. Write a function named `upperCaseLastNames` that accepts an array of associative arrays
//    where each associative array has indices `firstName` and `lastName` and returns the
//    same array of associative arrays with each last name capitalized

        // $names = [
        //     ['firstName' => 'Harry', 'lastName' => 'Potter'],
        //     ['firstName' => 'Ron', 'lastName' => 'weasley'],
        //     ['firstName' => 'Hermione', 'lastName' => 'granger'],
        // ];
//         upperCaseLastNames(names);
        
//         [
//             ['firstName' => 'Harry', 'lastName' => 'Potter'],
//             ['firstName' => 'Ron', 'lastName' => 'Weasley'],
//             ['firstName' => 'Hermione', 'lastName' => 'Granger'],
//         ]

	function upperCaseLastNames($aArray)
	{

	foreach ($aArray as $value) {
		foreach($value as $key => &$val2){
		$val2[0] = strtoupper($val2[0]);
		echo $val2[0];		
		}
	}
}

	// upperCaseLastNames($names);


         