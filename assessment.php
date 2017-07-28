<?php

// Write your code here
// 1. Write a function named isNegative that accepts a number and returns true or false 
// based on whether the input is negative.

function isNegative($number)
{
    return $number < 0;
}


// 2. Write a function named average that accepts an array of numbers and returns the average of those numbers
function average($arrayNumbers)
{
    $total = 0;
    foreach($arrayNumbers as $number)
    {
        $total += $number;
    }

    return $total/count($arrayNumbers);
}


// 3. Write a function named countOdds that accepts an array of numbers 
// and returns the number of odd numbers in the array.

function countOdds($arrayNumbers)
{
    $total = 0;
    foreach ($arrayNumbers as $number)
    {
        if ($number % 2 == 1)
        {
            $total += 1;
        }
    }
    return $total;
}

// 4. Write a function named convertNameToAssociativeArray that accepts a string that contains a first name 
// and last name separated by a space, and returns an associative array with keys of firstName and lastName.

function convertNameToAssociativeArray($nameString)
{
    $result = [];
    $temp = explode(" ", $nameString);
    $result['firstName'] = $temp[0];
    $result['lastName'] = $temp[1];

    return $result;
}

// 5. Write a function named fiveTo that accepts a number and returns an array of the integers from 
// 5 to (including) the passed number.

function fiveTo($number)
{
    $result = [];
    if ($number >= 5){
        for ($i = 5; $i <= $number; $i ++)
        {
            array_push($result, $i);
        }
    } else {
        for ($i = 5; $i >= $number; $i --)
        {
            array_push($result, $i);
        }
    }

    return $result;
}

// 6. Write a function named upperCaseLastNames that accepts an array of associative arrays 
// where each associative array has indices firstName and lastName and returns the same array 
// of associative arrays with each last name capitalized

function upperCaseLastNames($arrayOfPeople)
{
    for ($i = 0; $i < count($arrayOfPeople); $i++){
        $arrayOfPeople[$i]['lastName'] = ucwords($arrayOfPeople[$i]['lastName']);
    }

    return $arrayOfPeople;
}
