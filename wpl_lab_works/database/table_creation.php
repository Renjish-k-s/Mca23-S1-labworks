<?php
$con=new mysqli("localhost","root","","MCA_DEPT");

$sql="CREATE TABLE S1MCA_STUD (id INT(2) PRIMARY KEY,sname VARCHAR(10) NOT NULL)";

if ($con->query($sql)==TRUE) {
    
    echo "CREATED SUCESSFULLY";
}
else {
    echo "connection error",$con->connect_error;
}



?>