<?php

$con=new mysqli("localhost","root","");


$sql="CREATE DATABASE MCA_DEPT";

if($con->query($sql)==TRUE)
{
    echo "DATABASE CREATED SUCESSFULL";
}
else
{
    echo "CONNECTION ERROR",$con->connect_error;
}



?>