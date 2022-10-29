<?php
//$myserver="localhost";
//$myusername="root";
//$password="";
//$conne=new mysqli($myserver,$myusername,$password);
//...

//shortcut for the above code

$connect=new mysqli('localhost',"root","");
if ($connect->connect_error){
    die("FAILED TO CONNECT" .$connect->connect_errno);

    //below code isnt a must check to connect to the database
    } else{
    echo "you have successfully connected";
}
