<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billbox</title>
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
    <a href="index.php"> <div class="one">
        <label for="">STOCKTABLE</label>
        </div></a>
       <a href="stock_add.php"><div class="one">
        <label for="">STOCK ADD</label>
</div></a> 
<div class="one" style="background-color:white;">
<label for="">BILLING  BOX</label>
</div>
    </div>
</center>
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
<tr>
    <th colspan="2">
        <input type="submit" value="GENERATE BILL" name="generate">
    </th>
</tr>
    </table>
    </form>
</body>
</html>