<?php
include "navbar.php";
include "connection.php";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer</title>
    <link rel="stylesheet" href="style.css">
    <style>
		body {
  				background-image: url('./img/bg2.jpg');
  				background-repeat: no-repeat;
  				background-attachment: fixed;
  				background-size: cover;
  
			}
		a{
			text-decoration: none;
		}
    </style>
</head>
<body>
	<div id="viewcustomer">
            <h1 class="center">Customer Details:</h1>
            <table align="center" class="centertable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                <!-- view.php?userid=<?php $rows['id']?> -->
<?php
while($rows =mysqli_fetch_assoc($result)){
  $id = $rows["Id"];
?>

            <tr>
                <td><?php echo $rows["Id"] ?></td>
                <td><?php echo $rows["name"] ?></td>
                <td><?php echo $rows["email"] ?></td>
                <td><?php echo $rows["amount"] ?></td>
                <td><a href="view.php?id=<?php echo $id?>">view</a></td>
                <!-- <td><a href="transaction.php"><button type="button" class="btn">Transact</button></a></td> -->
            </tr>
    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>



<?php
include "footer.php";
?>