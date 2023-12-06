<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stockadd</title>
</head>
<style>
    body
    {
        font-family:Ariel;
        background-color:aqua;
        margin:0;
    }
    .total
    {
        width:100%;
        height: 50px;
        background-color:none;
    }
    .one
    {
        width:33.33%;
        height:100%;
        background-color:none;
        float:left;
        
    }
    table{
        margin-top:10px;
    }
    .one:hover
    {
        background-color:white;
        border-radius:50px
    }
    label
    {
       
        
       
    }
</style>
<body>
<center>
    <div class="total">
        <div class="one" style="background-color:white;">
        <label for="">STOCKTABLE</label>
        </div>
       <a href="stock_add.php"><div class="one">
        <label for="">STOCK ADD</label>
</div></a> 
<a href="billbox.php"><div class="one">
<label for="">BILLING  BOX</label>
</div></a>
    </div>

    <table border="2px bold"  >
        <thead>
            <tr colspan="5">
                <th colspan="6">
                    STOCK TABLE
                </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    SLNO
                </td>
                <td>
                    ITEMNAME
                </td>
                <td>
                    UNIT PRICE
                </td>
                <td>  TOTAL QUANTITY</td>
              
     
            <TD>
                SOLD QUANTITY
            </TD>
            <TD>
                LEFT QUANTITY
            </TD>   
            </tr>
        </tbody>
    </table>

    </center>
    
</body>
</html>