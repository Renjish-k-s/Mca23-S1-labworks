<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BILLING DESKTOP</title>
</head>
<body>
    <style>
         table
         {
             height: 50%;
             width: 60%;
         }
         .text_1
         {
             height:100%;
             width: 100%;
         }
         
        .row
        {
            height: 50px;
            
        }
        
        </style>
        <form action="bill_1.php" method="post">
    <table border=solid 2px align=center>
        <tr>
            <th colspan=2>
                <h1 align=center>BILLING DESKTOP</h1>
            </th>
        </tr>

        <tr class="row">
            <th>ITEM NAME</th>
            <th>QUANTITY</th>
        </tr>
<?php

for ($i=0; $i <6 ; $i++) { 
    

?>
        <tr class="row">
           <th> <select class="text_1" name="itemname[]">
                    <option>-SELECT ITEM-</option>
                   <option value="1">PEN</option>
                   <option value="2">PENCIL</option>
                   <option value="3">RUBBER</option>
                   <option value="4">SCALE</option>


               </select></th>
            <th> <input type="number" name="quantity[]" placeholder="ENTER QUANTITY"class="text_1"></th>

         </tr>

<?php

    }
?>
         <tr>
            <th colspan=2 class="row">
                <button type="submit" name="get" style="color: white;background-color: blue;height: 95%;">GET BILL INVOICE</button>
            </th>
         </tr>
    </table>
    </form>

    
</body>
</html>