<?php
$number1 = $_POST["number1"];
$number1 =(float)$number1;
echo "your First number is : ".$number1. "and";

$number2 = $_POST["number2"];
$number2 =(float)$number2;
echo "your First number is : ".$number2;
$button=$_POST["button"];
echo"<br>";





if ($button== "+")
{
    echo "Addition:". $number1+$number2;
}
if ($button== "-")
{
    echo "Substruction:". $number1-$number2;
}
if ($button== "*")
{
    echo "Multiplication:". $number1*$number2;
}
if ($button== "/")
{
    echo "Division:". $number1/$number2;
}
?>