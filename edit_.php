<?php
include 'conn.php';
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $id = $_POST['id_'];
    $index = $_POST['index'];

    $conn->query("UPDATE `customer_table` SET `customer_id` = '$id', `customer_first_name` = '$fname',
     `customer_last_name` = '$lname' WHERE `customer_table`.`customer_index` = $index");

?>

<html>
<head><title>Checkout</title></head>
<body>
<?php echo $index;
   echo $id;
   echo $fname;
   echo $lname;
    
    ?>
<a href="mainIndex.php">Back to Main</a>

</body>


</html>
