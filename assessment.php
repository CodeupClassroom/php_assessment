<?php

// Write your code here

// isNegative ////////////////////////////////////////////////


function isNegative($number)
{
  if (is_numeric($number) !== false) {
    if ($number < 0)
    {
      return true;
    } else if ($number > 0)
    {
      return false;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

// average  //////////////////////////////////////////////////

function average($array) {
  if (is_array($array)) {
    $average = array_sum($array) / count($array);
    return $average;
  } else {
    return false;
  }
}
echo  average([4, 6, 8, 10, 12]);

// count odds ////////////////////////////////////////////////


function countOdds($array) {
  if (is_array($array)){
    $count = 0;
    foreach($array as $key => $value) {
      if (is_numeric($value)) {
        if ($value % 2 !== 0) {
          $count++;
        } else {
          continue;
        }
      } else if (defined($value) == false){
        continue;
      }

    }
    return $count.PHP_EOL;
  } else {
    return false;
  }
}


// convertNameToAssociativeArray //////////////////////////////


function convertNameToAssociativeArray($name) {
  $nameArray = explode(" ", $name);
    $nameArray = [
      "firstName" => $nameArray[0],
      "lastName" => $nameArray[1]
    ];
    return $nameArray;
  }


// fiveTo ///////////////////////////////////////////////////


function fiveTo($number) {
  $integerArray =[];
  if ($number > 5 && $number != NULL) {
    for ($i = 5; $i <= $number; $i++) {
      array_push($integerArray, $i);
    }
  } else if ($number < 5 && $number != NULL) {
    for ($i = 5; $i >= $number; $i--) {
      array_push($integerArray, $i);
    } else {
      array_push($integerArray, $number);
    }
  }
  return $integerArray;
}
print_r(fiveTo(-2));



// fiveTo ///////////////////////////////////////////////////


function upperCaseLastNames($array) {
  foreach($array as $key => $value) {
    $array[$key]['lastName'] = ucwords($value['lastName']);
  }
  return $array;
}
