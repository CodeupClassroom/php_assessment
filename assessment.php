<?php

// write a function called isNegative that returns true or false if a given input is negative
function isNegative($input)
{
    if(!is_numeric($input)) {
        return false;
    }

    return $input < 0;
}

// write a function called average that takes in an array of numbers and returns the average of all those numbers
function average($input) 
{
    if(!is_array($input)) {
        return false;
    }

    foreach($input as $value) {
        if(!is_numeric($value)) {
            return false;
        }
    }

    return array_sum($input) / count($input);
}

// write a function called countOdds that takes in an array of numbers and returns the count of any odd number`
function countOdds($input)
{
    $count = 0;

    if(!is_array($input)) {
        return false;
    }

    foreach($input as $value) {
        if(is_numeric($value) && $value % 2 !== 0) {
            $count++;
        } 
    }

    return $count;
}

function convertNameToAssociativeArray($input)
{
    if(!is_string($input)) {
        return false;
    }

    $inputArray = explode(" ", $input);

    $outputArray = [];
    $outputArray['firstName'] = $inputArray[0];
    $outputArray['lastName'] = $inputArray[1];

    return $outputArray;
}

// write a function called fiveTo that takes in a number and returns an array of numbers from 5 up to and including that number.
function fiveTo($input)
{
    if(!is_numeric($input)) {
        return false;
    }

    return range(5, $input);
}


// write a function called upperCaseLastNames that takes in an array of associative arrays. Each associative array should have a 'firstName' key and a 'lastName' key. Make sure that every lastName value has the first character capitalized.

function upperCaseLastNames($input)
{
    if(!is_array($input)) {
        return false;
    }

    foreach($input as $key => $person) {
        $person['lastName'] = ucfirst($person['lastName']);
        
        $input[$key] = $person;
    }

    return $input;
}