<?php

include 'conn.php';
$serviceQuery = "select * from service_table";
$customerQuery = "select * from customer_table";
$serviceResult = mysqli_query($conn, $serviceQuery);
$customerResult = mysqli_query($conn, $customerQuery);

?>

<html>



<head>
<title>Test</title>

<style>
    table, th, td {
  border: 1px solid black;
}

</style>
</head>

<body>
<center>
<div class="container">
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="header">
                    <h2 class = "display"><center>Test</center></h2>
                </div>
                <div class="body">
                    <table>

                    <tr>
                        <td>
                            <h1>Service ID</h1>
                        </td>
                        <td>
                            <h1>Service Type</h1>
                        </td>
                        <td>
                            <h1>Service Price</h1>
                        </td>
                    </tr>

                    <tr>
                        <?php
                            while($row = mysqli_fetch_assoc($serviceResult)){
                        ?>

                            <td><?php echo $row['Service_ID'] ?></td>
                            <td><?php echo $row['Service_Description'] ?></td>
                            <td><?php echo $row['Service_Price'] ?></td>
                        </tr>
                        <?php
                            }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<br><br>
<div class="container">
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="header">
                    <h2 class = "display"><center>Test</center></h2>
                </div>
                <div class="body">
                    <table>

                    <tr>
                        <td>
                            <h1>Customer ID</h1>
                        </td>
                        <td>
                            <h1>First Name</h1>
                        </td>
                        <td>
                            <h1>Last Name</h1>
                        </td>
                    </tr>

                    <tr>
                        <?php
                            while($row = mysqli_fetch_assoc($customerResult)){
                        ?>

                            <td><?php echo $row['customer_id'] ?></td>
                            <td><?php echo $row['customer_first_name'] ?></td>
                            <td><?php echo $row['customer_last_name'] ?></td>
                            <td><a class="btn" href="delete.php?id=<?php echo $row['customer_index'] ?>">Delete</a></td>
                            <td><a class="btn" href="edit.php?id=<?php echo $row['customer_index'] ?>">Edit</a></td>
                        </tr>
                        <?php
                            }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
<hr>
<a href="add-customer.html">Add Customer</a>


</body>
</html>