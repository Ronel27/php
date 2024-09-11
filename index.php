<style>
    table,th,tr,td{
        padding: 20px;
        border: 20px solid black;
    }

</style>

<?php
    require_once "class/Productsclass.php";

    $objStudents = new products;
    $tableData = $objStudents->getData();
?>
<table>
    <tr>
        <th>Pid</th>
        <th>Product_Name</th>
        <th>TYPE</th>
        <th>Availability</th>
    </tr>
    <?php foreach($tableData as $td): extract($td);?>
    <tr>
        <td><?php echo $Pid; ?></td>
        <td><?php echo $Product_Name; ?></td>
        <td><?php echo $TYPE; ?></td>
        <td><?php echo $Availability; ?></td>
    </tr>
    <?php endforeach;?>
</table>