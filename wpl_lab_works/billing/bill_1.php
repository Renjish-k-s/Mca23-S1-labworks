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
        $name=array(1=>"PEN",2=>"PENCIL",3=>"RUBBER",4=>"SCALE");
        $price=array(1=>12,2=>13,3=>10,4=>14);


if (isset($_POST['get'])) 
    {       
        $item_name=$_POST['itemname'];
        $qt=$_POST['quantity'];
        $c=count($item_name);
        $j=1;
        for ($i=0; $i <$c ; ++$i) {
            
            $m=$item_name[$i]; 
            
            if ($m!=0) 
            {
                
            
?>


        <tr>
            <th>
                <?php echo $j++;  ?>
            </th>
            <th>
            <?php 
                echo $name[$item_name[$i]] ;         
            ?>
            </th>
            <th>
            <?php 

                    echo $price[$item_name[$i]] ;                  
            ?>
            </th>
            <th>
            <?php echo $qt[$i];  ?>
            </th>
            <th>
             <?php 
                    echo $t[$i]=$price[$item_name[$i]]*$qt[$i];
            ?>
            </th>
        </tr>
<?php
            }
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