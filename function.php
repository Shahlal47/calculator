<?php

session_start();

$operation = $_POST['operation'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

//echo $operation;
//echo $number1;
//echo $number2;


if(isset($operation) && ($_POST['operation']) == "add")
{
    $_SESSION['sum'] = $number1 + $number2;
    header("location:calculator.php");
}



//if(isset($operation) && ($_POST['operation']) == "sub"){
//
//    $_SESSION['sub'] = $number1 - $number2;
//    header("location:calculator.php");
//
//}


if(isset($operation) && ($_POST['operation']) == "sub"){

    if($number1<$number2)
    {
        $_SESSION['suberror'] = "Your First Number Must Be Grater Than Second Number.";
        header("location:calculator.php");
    }
    if($number1>$number2)
    {
        $_SESSION['sub'] = $number1 - $number2;
        header("location:calculator.php");
    }
}




if(isset($operation) && ($_POST['operation']) == "div"){

    if($number2 == 0)
    {
        $_SESSION['diverror'] = "It is NOT Possible to Divide a Number BY Zero.";
        header("location:calculator.php");
    }
    else
    {
        $_SESSION['div'] = $number1 / $number2;
        header("location:calculator.php");
    }
}



if(isset($operation) && ($_POST['operation']) == "multi"){

    $_SESSION['multi'] = $number1 * $number2;
    header("location:calculator.php");

}