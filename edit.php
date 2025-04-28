<?php
include 'conn.php';
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM customer_table WHERE 'customer_index' = $id")


?>
<html>
<head>
    <title>EDIT Customer</title>
</head>
<body>
    <h1>EDIT Customer</h1>


    
<form method = "POST" action="edit_.php">
    <input type="hidden" value="<?php echo $id?>" name="index">

<label>First Name:<?php echo $id?> </label>
<input type="text" name="first_name"><br>

<label>Last Name: </label>
<input type="text" name="last_name"><br>

<label>ID: </label>
<input type="text" name="id_"><br>

<input type="submit" value="Add_Customer" name="submit">

</form>
</body>


</html>