<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mark_display.php" method="post">
    <table border=solid 2px  align="center">
        <tr>
            <th colspan=5>
                <h1 align=center >INTERNAL DESKTOP</h1>
            </th>
        </tr>

        <tr>
            <th>
                ROLL NO
            </th>
            <th colspan=2>
                <input type="text" name="rollno" id="" style="width:97%">
            </th>
        </tr>
        <tr>
            <th>
                NAME
            </th>
            <th colspan=2>
                <input type="text" name="sname" id="" style="width:97%">
            </th>
        </tr>

        <tr>
            <th>
                SUBJECT CODE
            </th>
            <th>
                SUBJECT NAME
            </th>
            <th>
                MARK
            </th>
        </tr>
        <?php

                for ($i=0; $i <4 ; $i++) 
                { 
               
               ?>
               
               <tr>
            <th>
                <input type="text" name="subcode[]" value="<?php echo "SUB23CA0",$i; ?>" id="">
            </th>
            <th>
                <select name="sub[]" id="">

                <option value="0">-SELECT SUBJECT-</option>
                <option value="1">-ADS-</option>
                <option value="2">-MFC-</option>
                <option value="3">-DFMC-</option>
                <option value="4">-SE-</option>
      
            </select>
            </th>
            <th>
                <input type="text" name="mark[]" id="">
            </th>
            


                    <?php
                }

        ?>

        <tr>
            <th colspan=5>
                <input type="submit" name="get" id="" value="OK">
            </th>
        </tr>
    </table>
            </form>
</body>
</html>