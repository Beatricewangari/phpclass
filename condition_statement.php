<?php
$marks=50;
// this is an if statement-nb-not widely used
if ($marks==50){

    echo "It is true";

}
echo "<br>";
//if...else statement
if ($marks>=50){
    echo "You have passed";

}else{
    echo "You have failed";
}
echo "<br>";
//if...elseif...else
if ($marks>=0 && $marks<=39){
    echo "You have failed";
}elseif ($marks>=40 and $marks<=59){
    echo "you have passed";
}else{
    echo "wrong input";
}

echo "<br>";
//if statement
$age=100;

if ($age==18){
    echo "You qualify to be a kenyan voter";
}
echo "<br>";
//if else statement
if ($age>=18){
    echo "You are an adult";

}else{
    echo "you are a child";
}
echo "<br>";
//if...else..if statement
if ($age>=18 && $age<=35){
    echo "You are a kenyan youth";
}elseif ($age>=36 && $age<=70){
    echo "You are approaching retirement age";
}elseif ($age>=1 && $age<=10){
    echo "you are a baby";
}
else{
    echo "You have reached your retirement age";
}

echo "<br>";

//using switch
$age=35;
switch ($age){
    case 35;
        echo "You are a kenyan youth";
    break;
    case 70;
        echo "You are approaching retirement age";
        break;
    case 10;
        echo "you are a baby";
        break;
    default:
        echo "You are not eligible to be a kenyan citizen";

}
