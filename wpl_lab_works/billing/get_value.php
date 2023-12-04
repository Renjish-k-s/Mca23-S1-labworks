<!DOCTYPE html>
<?php include('general.php');  ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<table border="2px bold" align="center">
    <tr>
        <th colspan="2">
            DATA SURVEY
        </th>
    </tr>
<?php

    $sql="SELECT * FROM s1mca_stud ;";
    $req=$con->query($sql);
    $row=mysqli_fetch_array($req);
    $count=mysqli_num_rows($req);
?>

    <tr>
        <th>
            ID
        </th>
        <th>
            <input type="text" name="id" value="<?php echo $count+=1;  ?>" id="" required="on" readonly>
        </th>
        
    </tr>
    <tr>
        <th>
            NAME
        </th>
        <th>
            <input type="text" name="sname" id="" required="on">
        </th>
        
    </tr>
    <tr>
        <th colspan="">

        <input type="submit" name="ok" value="ok">

        </th>
        <th>
        <a href="display.php" style="background-color:;color:black;border: radius 25px;">DISPLAY THE TABLE</a>
        </th>
    </tr>
</table>
</form>
<?php


if (isset($_POST['ok'])) 
{
    $id=$_POST['id'];
    $name=$_POST['sname'];
    
    $sql="INSERT INTO s1mca_stud (id,sname) VALUES ('$id','$name')";
    if ($con->query($sql)==TRUE) {
    
        echo "<script> alert('added successfully');</script>";
    }
    else {
            echo "connection failed:",$con->connect_error;
    }
}

?>
    
</body>
</html>