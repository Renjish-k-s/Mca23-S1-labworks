<?php



$con=new mysqli("localhost","root","","MCA_DEPT");

if ($con->connect_error)
{
    die("CONNECTION FAILED".$con->connect_error);
}

?>