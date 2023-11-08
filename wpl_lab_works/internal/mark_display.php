<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $subject=array(1=>"ADS",2=>"MFC",3=>"DFMC",4=>"SE");

    if (isset($_POST['get'])) {
        
    
        $sname=$_POST['sname'];
        $rollno=$_POST['rollno'];
        $subcode=$_POST['subcode'];
        $sub=$_POST['sub'];
        $mark=$_POST['mark'];
    
    ?>
    <table border=2px solid align=center>
        <tr>
            <th colspan=4>
                <h1>MARK LIST</h1>
            </th>
        </tr>
        <tr>
            <th>
                ROLL NO
            </th>
            <th colspan=3>
                <label for=""><?php echo $rollno; ?></label>
            </th>
        </tr>

        <tr>
            <th>
                NAME
            </th>
            <th colspan=3>
                <label for=""><?php echo $sname; ?></label>
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
            <th>
                PASS/FAIL
            </th>
        </tr>
<?php

for ($i=0; $i <4 ; $i++) { 



?>
        <tr>
            <th>
                <?php echo  $subcode[$i];  ?>
            </th>
            <th>
                <?php echo $subject[$sub[$i]]; ?>
            </th>
            <th>
                <?php echo $m=$mark[$i]; ?>
            </th>
            <th>
                <?php 
                if($m>5)
                {
                    echo "PASS";
                }
                else
                {
                    echo "FAIL";
                }
                    
                        ?>
            </th>
        </tr>

        <?php
}
    }
        ?>
    </table>
</body>
</html>