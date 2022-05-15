<?php

if(empty($_POST['day'])) {
    die("Enter date");
}
if(empty($_POST['month'])) {
    die("Enter month");
}
if(empty($_POST['year'])) {
    die("Enter year");
}

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

if (!is_numeric ($day) ) {
    die ("Day has to be positive number");
}
if (!is_numeric($month)) {
    die ("Month has to be positive number");
}
if (!is_numeric($day)) {
    die ("Year has to be positive number");
}

if (!checkdate($month, $day,$year)) {
    echo "The enter date isn't validate!";
} else {
    echo "The enter date is : " . $month. "/" .$day. "/" .$year;
}


?>

