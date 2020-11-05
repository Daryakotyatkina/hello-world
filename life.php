<?php
include_once './functions.php';
if(!empty($_POST)){
    $str= $_POST ['string'];
    $nameFUNC=$_POST['nameFUNC'];
    if($nameFUNC=='one1'){
        echo ('one1 str one1');
    }elseif($nameFUNC=='two2') {
        echo('one1 str two2');
    }
}
//print_r($_POST);
echo "<br>";
//echo $_POST['one1'];
echo "<br>";
//echo $_POST['two2'];