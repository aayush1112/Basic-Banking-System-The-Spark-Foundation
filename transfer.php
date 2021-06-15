<?php
include "navbar.php";
include "connection.php";
if (isset($_POST['submit'])) {
    $sendername = $_POST['sendername'];
    $receivername = $_POST['receivername'];
    $amount = $_POST['amount'];

    $sendersql = "SELECT * from users where name='$sendername'";
    $senderresult = $conn->query($sendersql);
    $senderrow = $senderresult->fetch_object();

    $receiversql = "SELECT * from users where name='$receivername'";
    $receiverresult = $conn->query($receiversql);
    $receiverrow = $receiverresult->fetch_object();


    date_default_timezone_set('Asia/Kolkata'); 
    $currenttime = date('Y-m-d H:i:s');



    
    if ($amount < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  
        echo '</script>';
    }

    else if ($amount > $senderrow->amount) {
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  
        echo '</script>';
    }
    else{

        // deducting amount from sender's account
        $snewbalance = $senderrow->amount - $amount;
        $senderupdatesql = "UPDATE users set amount='$snewbalance' where name='$sendername'";
        $conn->query($senderupdatesql);
        
        // adding amount to reciever's account
        $rnewbalance = $receiverrow->amount + $amount;
        $receiverupdatesql = "UPDATE users set amount='$rnewbalance' where name='$receivername'";
        $conn->query($receiverupdatesql);

        //id,sendername,receivername,amount,time
        // $historysql = "ïnsert into talbename()"
        // $sender = $sql1['name'];
        // $receiver = $sql2['name'];
        $historysql = "INSERT INTO history(sendername, receivername, amount, time) VALUES ('$sendername','$receivername','$amount', '$currenttime')";
        $conn->query($historysql);
        

        echo '<script type="text/javascript">';
        echo ' alert("Transantion Successfull")';  
        echo '</script>';
        }
    
}

        
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="style.css">
    <style>
		body {
  				background-image: url('./img/bg2.jpg');
  				background-repeat: no-repeat;
  				background-attachment: fixed;
  				background-size: cover;
  
			}
            #Transfer{
                padding: 100px 30px;
                font-size: 1.5rem;
            }
            #Transfer table {
                  margin-top: 25px;
                  border-spacing: 23px;
                  border-collapse: collapse;
                  border: none;
                    }
            #Transfer table td {
              padding: 18px 23px;
              color: rgb(0, 0, 0);
              font-weight: bold;
              border: none;
            }
            input[type=text]
                {
                    width: 300px;
                    height: 25px;
                    border-radius: 10px;
                }
            input[type=number]
                {
                    width: 300px;
                    height: 25px;
                    border-radius: 10px;
                }
            .button2{
                padding: 5px;
                font-size: 20px;
                border-radius: 10px;
            }
            .button2:hover{
                color:white;
                background-color: black;
            }

    </style>
</head>
<body>
    <div id="Transfer">
    <center>
    <form method="post">
        <h2>Transfer Money:</h2>
        <table align="center" class="centertable">
                <tr>
                    <td>
                        <h3>Sender's Name:
                    </td>
                    <td><input type="text" name="sendername" id="sendername"></td>
                </tr>
                <tr>
                    <td>
                        <h3>Receiver's Name:
                    </td>
                    <td>
                        <h3><input type="text" name="receivername" id="receivername">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Amount:
                    </td>
                    <td>
                        <h3><input type="number" name="amount" id="amount">
                    </td>
                </tr>
                <tr>
                     <td><button type="button" class="button2" onclick="window.location.href='customer.php';">Back</button></td>
                    <td><input class="button2" type="submit" name="submit" id="submit" value="Transfer" colspan="2" /></td>
                   
                </tr>
            </table>
    </form>

    </center>
    </div>
	
</body>
</html>



<?php
include "footer.php";
?>