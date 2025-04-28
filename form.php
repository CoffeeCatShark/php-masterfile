<?php
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $id = $_POST['id_'];



$conn = new mysqli('localhost','root','','finalsdb');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare('insert into customer_table(customer_id, customer_first_name, customer_last_name)
        values(?,?,?)');
    $stmt->bind_param("iss",$id,$fname,$lname);
    $stmt->execute();
    echo "Customer Added Successfully";
}


?>

<html>
<head><title>Checkout</title></head>
<body>

<a href="mainIndex.php">Back to Main</a>

</body>


</html>
