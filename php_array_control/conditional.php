<?php


function grade($grade){


    if($grade>=95){
        echo "A";
    }elseif($grade>75 && $grade<=95){
        echo "B";
    }elseif($grade>65 && $grade<=75){
        echo "C";
    }else{
        echo "D";

    }
}
print_r(grade(75));

//not equal
var_dump((1<>2));//false
var_dump((1!=2));//true

//identical
var_dump(1==="1");//false


$num=1000;

if($num>=10)
{
    if($num<=1000)
    {
        echo "Your number is range ";
    }else
    {
        echo "your number is grether then 1000";
    }
}else
{
    echo "your number is NOT in range";
}

var_dump(($number=true) || false);

switch(date('1'))
{
    case "monday";
    echo "starting day";
    break;
    case "tuesday";
    echo "wash a car";
    break;
    case "wednesday";
    echo "holiday";
    break;
    case "thursday";
    echo "vacation";
    break;
    case "friday";
    echo "day of";
    break;
    case "saturday";
    echo "free day";
    break;
    default;
    case "sunday";
    echo "long holiday";
    

}
