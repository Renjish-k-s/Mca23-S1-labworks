<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock_add</title>
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
        margin-top:175px;
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
       <a href="index.php"> <div class="one">
        <label for="">STOCKTABLE</label>
        </div></a>
        <div class="one" style="background-color:white;">
        <label for="">STOCK ADD</label>
</div>
<a href="billbox.php"><div class="one">
<label for="">BILLING  BOX</label>
</div></a>
    </div>
    </center>
    <table  border="2px bold" align="center" >
        <tr>
            <th colspan="4">
                STOCK ADD
            </th>
        </tr>
        <tr>
            <th>
                PID
            </th>
            <th>
               <input type="text" name="" id="">
            </th>
          
        </tr>
        <tr>
            <th>
                ITEMNAME
            </th>
            <th>
               <input type="text" name="" id="">
            </th>
          
        </tr>
        <tr>
            <th>
                QUANTITY
            </th>
            <th>
               <input type="text" name="" id="">
            </th>
          
        </tr>
        <tr>
            <th>
                UNIT PRICE
            </th>
            <th>
               <input type="text" name="" id="">
            </th>
          
        </tr>
        <tr>
            <th colspan="4">
               <input type="submit" value="UPDATE">
            </th>
        </tr>
    </table>
</body>
</html>