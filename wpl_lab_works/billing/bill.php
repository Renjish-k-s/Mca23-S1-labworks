<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERMARKET BILL</title>
</head>
<style>
    table
    {
        width:50%;
    }
</style>


<body>
    <table border=2px solid  align=center>
        <tr>
            <th colspan=5>
                
                <h1 align=center><i>IDIOLI SUPERMARKET</i></h1>
            </th>
        </tr>
        <tr>
            <th colspan=5>
                
                <P align=center><i>Eranakulam,Kothamangalam</i></P>
                <P align=center><i>Eranakulam,Kothamangalam</i></P>
            </th>
        </tr>
        <tr border=0px style="border-color:white">
            <th colspan=2 style="border-color:white">
                
                <p align=left><?php echo date("d/m/y"),'  ',date("l"); ?></p>
            </th>
            <th colspan=3 style="border-color:white">
                
                <p align=right><?php echo date("h:i:sa") ?></p>
            </th>
        </tr>
        <tr>
            <th>
                SL.NO
            </th>
            <th>
                ITEM NAME
            </th>
            <th>
                UNIT PRICE
            </th>
            <th>
                QUANTITY
            </th>
            <th>
                TOTAL
            </th>
        </tr>
        <?php
$pen=12;
$pencil=13;
$rubber=10;
$scale=14;

if (isset($_POST['get'])) 
    {
        $i_n=$_POST['itemname'];
        $item_name=$_POST['itemname'];

        $qt=$_POST['quantity'];
        $c=count($i_n);
        $j=1;
        for ($i=0; $i <$c ; $i++) { 
            
?>


        <tr>
            <th>
                <?php echo $j++;  ?>
            </th>
            <th>
            <?php 
            if($item_name[$i]==1)
            {
                echo 'PEN';
            }  
            elseif($item_name[$i]==2)
            {
                echo 'PENCIL';
            }
            elseif($item_name[$i]==3)
            {
                echo 'RUBBER';
            }
            elseif($item_name[$i]==4)
            {
                echo 'SCALE';
            }
            
            ?>
            </th>
            <th>
            <?php 
            if($item_name[$i]==1)
            {
                echo $pen;
            }  
            elseif($item_name[$i]==2)
            {
                echo $pencil;
            }
            elseif($item_name[$i]==3)
            {
                echo $rubber;
            }
            elseif($item_name[$i]==4)
            {
                echo $scale;
            }
            
            ?>
            </th>
            <th>
            <?php echo $qt[$i];  ?>
            </th>
            <th>
             <?php 
            if($item_name[$i]==1)
            {
                echo $t[$i]=$pen*$qt[$i];
            }  
            elseif($item_name[$i]==2)
            {
                echo $t[$i]=$pencil*$qt[$i];
            }
            elseif($item_name[$i]==3)
            {
                echo $t[$i]=$rubber*$qt[$i];
            }
            elseif($item_name[$i]==4)
            {
                echo $t[$i]=$scale*$qt[$i];
            }
            
            ?>
            </th>
        </tr>
<?php

    }
}
?>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>GRAND TOTAL</th>
            <th><?php echo array_sum($t),'/-'?></th>
        </tr>
    </table>
</body>
</html>