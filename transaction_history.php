<?php
include "navbar.php";
include "connection.php";
$sql = "SELECT * FROM history";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
          background-image: url('./img/bg2.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
  
      }
      #history{
        padding: 34px 23px;
      }
    </style>
</head>
<body>
  <div id="history">
            <h1 class="center">Transaction History:</h1>
            <table align="center" class="centertable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Sender Name</th>
                        <th>Receiver Name</th>
                        <th>Balance</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                
<?php
while($rows =mysqli_fetch_assoc($result)){
  $id = $rows["id"];
?>

            <tr>
                <td><?php echo $rows["id"] ?></td>
                <td><?php echo $rows["sendername"] ?></td>
                <td><?php echo $rows["receivername"] ?></td>
                <td><?php echo $rows["amount"] ?></td>
                <td><?php echo $rows["time"] ?></td>
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