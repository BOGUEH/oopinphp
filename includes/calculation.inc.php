<?php 
    include_once './autoload.inc.php';

    $operator = $_POST['opera'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $calc1 = new Calc($num1, $num2, $operator);

   echo $calc1->operate();

?>