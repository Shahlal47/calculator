<?php

session_start();

$operation = $_POST['operation'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

//echo $operation;
//echo $number1;
//echo $number2;


if(isset($operation) && ($_POST['operation']) == "add"){

    $_SESSION['sum'] = $number1 + $number2;
    header("location:calculator.php");

}