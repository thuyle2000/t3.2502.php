<?php

//demo if else statement
$age = 20;
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
echo "\n";

//set timezone to saigon
date_default_timezone_set('Asia/Ho_Chi_Minh');

//demo if else if statement
$time = date("H");  // Get current hour from server [0-23]
if ($time < 12) {
    echo "Good morning!";
} elseif ($time < 18) {
    echo "Good afternoon!";
} else if ($time < 22) {
    echo "Good evening!";
}
else {
    echo "Good night!";
}
echo "\nToday is " . date("d-m-Y H:i:s") ;
echo "\nToday is " . date("d-M-Y H:i:s") ;


//demo switch statement
$day = date("D");  // Get current day of the week [Mon, Tue, Wed, Thu, Fri, Sat, Sun]
switch ($day) {
    case "Mon":
        echo "\nToday is Monday.";
        break;
    case "Tue":
        echo "\nToday is Tuesday.";
        break;
    case "Wed":
        echo "\nToday is Wednesday.";
        break;
    case "Thu":
        echo "\nToday is Thursday.";
        break;
    case "Fri":
        echo "\nToday is Friday.";
        break;
    case "Sat":
        echo "\nToday is Saturday.";
        break;
    case "Sun":
        echo "\nToday is Sunday.";
        break;
    default:
        echo "\nInvalid day.";
}