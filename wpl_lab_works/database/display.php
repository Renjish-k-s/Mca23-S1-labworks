<?php
include('general.php');

$sql="SELECT * FROM S1MCA_STUD";
$request=$con->query($sql);
?>
<table border="2px bold">

<tr>
    <th>
        ID
    </th>
    <th>
        NAME
    </th>
</tr>
<?php
while($row=$request->fetch_assoc())
{
    ?>
<tr>
    <th>
        <?php echo $row['id'];  ?>
    </th>
    <th>
    <?php echo $row['sname'];  ?>
    </th>
</tr>


    <?php
}

?>
</table>

