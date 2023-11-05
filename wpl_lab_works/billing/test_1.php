<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST['start']))
{

    $name_1=$_POST['name'];
    $c=count($name_1);

    foreach($name_1 as $n)
    {
        ?>
            <input type="text" name="" id="" value="<?php echo $n ?>"> <br>
        <?php
    }


    echo $c ;

}

?>
</body>
</html>