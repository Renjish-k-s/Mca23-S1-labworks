<?php include('general.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2px solid" align="center">
        <tr>
        <th colspan='5'>
            <h1>HONEY SUPERMARKET</h1>
</th>       
</tr> 
<tr>
        <th colspan='5'>
            <h5>BILL INVOICE</h5>
</th>       
</tr> 
<tr>
    <th>
        SL NO
    </th>
    <th>
        ITEM NAME
    </th>
    <th>
        QUANTITY
    </th>
    <th>
        UNIT PRICE
</th>
<th>
    TOTAL
</th>
</tr>
<?php
$a=0;
$price=array('PEN'=>10,'PENCIL'=>20,'RUBBER'=>30,'SCALE'=>40,'BOOK'=>50,);
$sql="SELECT * FROM bill_table";
$res=$con->query($sql);
while($row=$res->fetch_assoc())
{



?>

<tr>
    <th>
       <?php echo ++$a;  ?>
    </th>
    <th>
        <?php echo $row['iname'];  ?>
    </th>
    <th>
    <?php echo $row['quat'];  ?>
    </th>
    <th>
    <?php echo $price[$row['iname']];  ?>
</th>
<th>
<?php echo $price[$row['iname']]*$row['quat'];  ?>
</th>
</tr>
<?php
}
?>

    </table>
</body>
</html>