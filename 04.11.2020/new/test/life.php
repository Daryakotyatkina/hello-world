<?php
require_once('functions.php');
$a = $_POST['string'];
$b = $_POST['string_2'];

if ($_POST["nameFUNC"] == "one") {
    echo life($a,$b);
}
if ($_POST["nameFUNC"] == "two") {
    echo life2($a,$b);
}