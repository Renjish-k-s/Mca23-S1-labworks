<?php
$con=new mysqli("localhost","root","","MCA_DEPT");

$sql="INSERT INTO S1MCA_STUD (id,sname) VALUES (3,'Hari')";

if ($con->query($sql)==TRUE) {
    
    echo "ADDED";
}
else {
        echo "connection failed:",$con->connect_error;
}


?>