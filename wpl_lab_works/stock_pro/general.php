<?php
$c=new mysqli("localhost","root","");
$sql="CREATE DATABASE IF NOT EXISTS PRODUCT;";
if($c->query($sql))
{
    echo "<script>alert('database created')</script>";
}
else{

    echo "connection error:",$c->connect_error;
}
$con=new mysqli("localhost","root","","PRODUCT");

$sql="CREATE TABLE IF NOT EXISTS STOCKTABLE (ID INT(11) PRIMARY KEY,PNAME VARCHAR(20),UP VARCHAR(20),TQ VARCHAR(20))";

if ($con->query($sql)) {
    
    echo "<script>alert('TABLE CREATED');</script>";

}
else{

    echo "connection error:",$con->connect_error;
}




?>