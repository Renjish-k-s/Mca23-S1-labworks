<?php

$con=new mysqli("localhost","root","");

if ($con->connect_error)
{
    die("CONNECTION FAILED".$con->connect_error);
}
else
{
    echo "success";
}

?>