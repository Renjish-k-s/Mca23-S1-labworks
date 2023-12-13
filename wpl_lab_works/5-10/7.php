<?php

$con= new mysqli("localhost","root","","mca_dept");


if(!$con->connect_error)
{
        print("connection sucess");
}
else
{
    print("connectio_error:".$con->connect_error);
}

$sql="CREATE TABLE IF NOT EXISTS TEST (ID INT(10) PRIMARY KEY, SNAME VARCHAR(20))";

if($con->query($sql))
{

    echo"<script>alert('table created')</script>";
}
else
{
    print("connection error:".$con->connect_error);
}

// $sql="INSERT INTO TEST (ID,SNAME) VALUES ('1','hari')";
// if ($con->query($sql)) 
// {
//     echo"<script>alert('inserted')</script>";
// }
// else
// {
//     print("connection error".$con->connect_error);
// }

// $sql="UPDATE TEST SET SNAME='ROY' WHERE ID='1'";
// if ($con->query($sql)) 
// {

//     echo"<script>alert('UPDATED')</script>";    
// }
// else {
//     print("connection error".$con->connect_error);
// }
// $sql="ALTER TABLE TEST ADD AGE VARCHAR(20)";
// if ($con->query($sql)) 
// {
//     echo"<script>alert('ALTERED THE TABLE')</script>";
// }

$sql="DELETE FROM TEST";

if ($con->query($sql)) {
    
   echo"<script>alert('DELETED')</script>";
}
?>