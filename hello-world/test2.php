<?php

function generatePassword($length = 10) {
    $length = 6;
    $small_alphabets = range('a', 'z');
    $cap_alphabets = range('A', 'Z');
    $numbers = range('0', '9');
    $final_array = array_merge($small_alphabets, $numbers, $cap_alphabets);
    $password = "";
    while ($length--) {
        $key = array_rand($final_array);
        $password .= $final_array[$key];
    }    
    if(!preg_match('/[A-Z]/', $password)){
        return generatePassword(6);
    }
    if(!preg_match('/[a-z]/', $password)){
        return generatePassword(6);
    }
    if(!preg_match('/[0-9]/', $password)){
        return generatePassword(6);
    }
    return $password;
}

generatePassword(6);

// how to get current week start date and end date in php
$ts = strtotime(date('Y-m-d'));
$start = (date('w', $ts) == 0) ? $ts : strtotime('last sunday', $ts);
$start_date = date('Y-m-d', $start);
$end_date = date('Y-m-d', strtotime('next saturday', $start));

// how to get current month start date and end date in php
$first_day_this_month = date('m-01-Y');
$last_day_this_month = date('m-t-Y');
?>