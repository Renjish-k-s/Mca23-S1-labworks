<?php include('general.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <table border="2px solid" align="center">
        <tr >
            <th colspan="2">
            <h1>HONEY SUPER MARKET</h1>
            </th>
            
        </tr>
        <tr>
            <th>
                ITEM NAME
            </th>
            <th>
                QUANIITY
            </th>
        </tr>
        <?php
        $a=0;
        while ($a < 5) {
            
        
        ?>
        <tr>
            <th>
                <select name="iname[]" id="">
                <option value="">-SELECT ITEM-</option>
                    <option value="PEN">-PEN-</option>
                    <option value="PENCIL">-PENCIL-</option>
                    <option value="RUBBER">-RUBBER-</option>
                    <option value="SCALE">-SCALE-</option>
                    <option value="BOOK">-BOOK-</option>
                </select>
            </th>
            <th>
                    <input type="number" name="quat[]" id="" min="0" placeholder="Enter quantity">
            </th>
        </tr>
        <?php
        $a++;
        }

?>
<tr>
    <th colspan="2">
        <input type="submit" value="GENERATE BILL" name="generate">
    </th>
</tr>
    </table>
    </form>
</body>
</html>

<?php

if (isset($_POST['generate'])) 
{

    $item=$_POST['iname'];
    $quat=$_POST['quat'];
    $date=date("d/m/y");
    $time=date("h:m:s");

    for($i=0;$i<5;$i++)
    {

        $item1=$item[$i];
        $quat1=$quat[$i];

        if($item1!='')
        {
        $sql="INSERT INTO bill_table(`iname`, `quat`, `idate`, `itime`) VALUES ('$item1','$quat1','$date','$time')";
        $con->query($sql);    
        }
    }


echo "<script>alert('added');</script>";

}

?>