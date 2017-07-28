<?php
// Write your code here

/******************* FUNCTION 1 *******************/

function isNegative($input){
  if (is_numeric($input)) {
    if ($input < 0) {
      return true;
    }else {
      return false;
    }
  }else {
    return false;
  }
}

/******************* FUNCTION 2 *******************/

function average($input){
  if (is_array($input)) {
    $sum = 0;
    foreach ($input as $value) {
      if (is_numeric($value)) {
        $sum += $value;
      }
    }
    $average = $sum/count($input);
    return $average;
  }else {
    return false;
  }
}

/******************* FUNCTION 3 *******************/

function countOdds($input){
  if (is_array($input)) {
    $count = 0;
    foreach ($input as $value) {
      if (is_numeric($value)) {
        if ($value % 2 !==0) {
          $count++;
        }
      }
    }
    return $count;
  }else {
    return false;
  }
}

/******************* FUNCTION 4 *******************/

function convertNameToAssociativeArray($input){
  if (is_string($input)) {
    $input = explode(' ', $input);
    $name['firstName'] = $input[0];
    $name['lastName'] = $input[1];
    return $name;
  }else {
    return false;
  }
}

/******************* FUNCTION 5 *******************/

function fiveTo($input){
  if (is_numeric($input)) {
    if ($input > 0) {
      $fiveArray =[5];
      for ($i=1; (5+$i <= $input); $i++) {
        $fiveArray[$i] = 5+$i;
      }
      return $fiveArray;
    }elseif ($input < 0) {
      $fiveArray =[5];
      for ($i=1; (5-$i >= $input); $i++) {
        $fiveArray[$i] = 5-$i;
      }
      return $fiveArray;
    }
  }else {
    return false;
  }
}
/******************* FUNCTION 6 *******************/

function upperCaseLastNames($input){
  if (is_array($input)) {
    foreach ($input as $key => $name) {

      $name['lastName'] = ucfirst($name['lastName']);
      $input[$key] = $name;
    }
    return $input;
  }else {
    return false;
  }
}
