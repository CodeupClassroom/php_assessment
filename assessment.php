<?php

//First Problem

function isNegative($num) {
    if (is_numeric($num)) {
        return $num < 0;
    }
    return false;
}

// Second Problem

function average($arr) {
    if (gettype($arr) == "array") {
        $total = 0;
        foreach ($arr as $element) {
            if (is_numeric($element)) {
                $total += $element;
            }
            else {
                return false;
            }
        }
        return $total / sizeof($arr);
    }
    return false;
}

//Third Problem

function countOdds($arr) {
    if (gettype($arr) == "array") {
        $total = 0;
        foreach($arr as $element) {
            if (is_numeric($element)) {
                if ($element % 2 != 0) {
                    $total++;
                }
            }
            else {
                return false;
            }
        }
        return $total;
    }
    return false;
}

//Fourth Problem

function convertNameToAssociativeArray($str) {
    if (gettype($str) == "string") {
        $arr = explode(" ", $str);
        $person["firstName"] = $arr[0];
        $person["lastName"] = $arr[1];
        return $person;
    }
    return false;
}

//Fifth Problem

function fiveTo($num) {
    if(is_numeric($num)) {
        $arr = [];
        if ($num == 5) {
           $arr[0] = 5;
           return $arr;
        }
        elseif ($num > 5) {
            $count = 0;
            for ($i = 5; $i <= $num; $i++) {
                $arr[$count] = $i;
                $count++;
            }
            return $arr;
        }
        else {
            $count = 0;
            for ($i = 5; $i >= $num; $i--) {
                $arr[$count] = $i;
                $count++;
            }
            return $arr;
        }
    }
    return false;
}

//Sixth Problem

function upperCaseLastNames($arr) {
    if (gettype($arr == "array")) {
        foreach($arr as $key => &$value) {
            $value["lastName"] = ucfirst($value["lastName"]);
        }
        return $arr;
    }
    return false;
}
