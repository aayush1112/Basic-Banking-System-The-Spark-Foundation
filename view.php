<?php
include "navbar.php";
include "connection.php";
$id =$_GET["id"];
$sql = "select * from users where id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_object();
?>
<html>
<head>
<title>Single View</title>
<style type="text/css">
		table, th, td {
  						border: 1px solid black;
  						width: 50%;
  						text-align: center;
  						font-size: 1.5rem;

					}
		th, td{
			padding: 5px;
		}
		body {
  				background-image: url('./img/bg2.jpg');
  				background-repeat: no-repeat;
  				background-attachment: fixed;
  				background-size: cover;
  
			}
		.center {
  					margin-left: auto;
  					margin-right: auto;
				}
		#container{
			justify-content: center;
			align-items: center;
			padding: 80px 30px;
		}
		h1{
			text-align: center;
		}
		.button2{
                padding: 5px;
                font-size: 20px;
                border-radius: 10px;
                justify-content: center;
                align-items: center;
                margin: 10px 620px;
            }
        .button2:hover{
                color:white;
                background-color: black;
            }


</style>

</head>
<body >
	<div id="container">

	<table class="center">
		<h1>Details:</h1>
					<tr>
						<td><h3>ID</h3></td>
						<td><h3>
							<?php echo $row->Id?>
						</h3></td>
					</tr>
					<tr>
						<td><h3>Name</h3></td>
						<td><h3>
							<?php echo $row->name?>
						</h3></td>
					</tr>
					<tr>
						<td><h3>Email</h3></td>
						<td><h3>
							<?php echo $row->email?>
						</h3></td>
					</tr>
					<tr>
						<td><h3>Balance</h3></td>
						<td><h3>
							<?php echo $row->amount?>
						</h3></td>
					</tr>
					
                    
                    

					
			</table>
			<button type="button" class="button2" onclick="window.location.href='customer.php';">Back</button>
			
        </div>                
</body>
</html>
<?php
include "footer.php";
?>