<?php

// Write your code here

// isNegative ////////////////////////////////////////////////


// function isNegative($number)
// {
//   if (is_numeric($number) !== false) {
//     if ($number < 0)
//     {
//       return true;
//     } else if ($number > 0)
//     {
//       return false;
//     }
//   } else {
//     return NULL;
//   }
// }

// average  //////////////////////////////////////////////////

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
