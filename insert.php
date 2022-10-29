<?php
$connect=new mysqli('localhost',"root","","mitsept");
if ($connect->connect_error) {
    die("FAILED TO CONNECT" . $connect->connect_errno);
}

//NB can remove the above code and replce with the below"

require'connect.php';
//the above code will connect to the var connect
$insert="INSERT INTO admin(firstname,lastname,email)VALUES ('Jane','Wambui','janewambui@gmail.com')";
if($connect->query($insert)===TRUE)
{
    echo "New record added successfully";
}else{
    echo "Error".$insert ."<>,br" .$connect->error;
}
$connect->close();
