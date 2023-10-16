<html>
    <head>
        <title>
            
            </title>
    </head>
    <body>
        <form action="simple_access.php" method="post">
            
            <table border="2px bold">
                <tr>
                    <th>ID</th>
                    <th><input type="text" name="id" placeholder="ID"></th>

                </tr>
                <tr>
                    <th>NAME</th>
                    <th><input type="text" name="fname" placeholder="NAME"></th>

                </tr>
                <tr>
                    <th>PLACE</th>
                    <th><input type="text" name="place" placeholder="PLACE"></th>

                </tr>
                    <tr>
                        <td colspan="" align="center"><input type="submit" value="submit" name="take"></td>
                        <td colspan="" align="center"><input type="reset" ></td>

                    </tr>
            </table>
        </form>
         <?php
    
    if(isset($_POST['take']))
    {
    
    $id=$_POST['id'];
    $name=$_POST['fname'];
    $place=$_POST['place'];
    
    if($id!='')
    {
?>
     <table border="2px bold">
                <tr>
                    <th>ID</th>
                    <th><input type="text" name="id" value="<?php echo $id; ?>"></th>

                </tr>
                <tr>
                    <th>NAME</th>
                    <th><input type="text" name="fname"  value="<?php echo $name; ?>"></th>

                </tr>
                <tr>
                    <th>PLACE</th>
                    <th><input type="text" name="id"  value="<?php echo $place; ?>"></th>

                </tr>
                   
            </table>
  <?php 
    }
 else {
        echo "hell";   
    }
    }
    ?>
    </body>
    </html>
   