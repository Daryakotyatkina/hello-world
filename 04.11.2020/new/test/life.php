<?php
require_once('functions.php');
$a = $_POST['string'];
$b = $_POST['string'];

if ($_POST["nameFUNC"] == "one") {
    echo life($a,$b);
}
if ($_POST["nameFUNC"] == "two") {
    echo life2;($a,$b);
}
if ($_POST["nameFUNC"] == "three") {
    echo life3($a,$b);
}
if ($_POST["nameFUNC"] == "four") {
    echo life4($a,$b);
}
if ($_POST["nameFUNC"] == "five") {
    echo life5($a,$b);
}
