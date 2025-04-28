<?php
    include 'conn.php';
    $id = $_GET['id'];

    $conn->query("DELETE FROM `customer_table` WHERE `customer_table`.`customer_index` = $id;");


?>

<html>
<head><title>Delete</title></head>
<body><a href="mainIndex.php">Back to Main</a></body>
</html>
