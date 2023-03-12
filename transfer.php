<?php
require_once('db.php');
$table_name = "users"; 
$query = "select * from $table_name ";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="transfer.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h3 id="form-heading">
                TRANSFER MONEY
            </h3>
            <div class="form">
                <div class="input_field">
                    <label for="">From</label><br>
                    <select name="sender" id="sender">
                        <option selected hidden value="select">select</option>
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                        <option value="<?php echo $row['name'];?>"><?php echo $row['name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input_field">
                    <label for="">To</label><br>
                    <select name="receiver" id="receiver">
                    <option selected hidden value="select">select</option>
                    <?php
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                        <option value="<?php echo $row['name'];?>"><?php echo $row['name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input_field">
                    <label for="">Amount</label><br>
                    <input type="number" name="amount" id="amount">
                </div>
                <div class="input_field">
                    <input type="submit" value="Submit" name="submit" class="btn1">
                </div>
            </div>
        </form>
        <a href="index.php"><button  id="exit">Exit</button></a>
    </div>
</body>
</html>

<?php

    if($_POST['submit']){
        $sender=$_POST['sender'];
        $receiver=$_POST['receiver'];
        $amount=$_POST['amount'];
        if($sender=="select" || $receiver=="select"){
            echo '<script>alert("Please select sender and receiver")</script>';
        }
        else if($amount==0)
        {
            echo '<script>alert("Transaction unsuccessful as amount is 00.00")</script>';
        }
        else if($sender!=$receiver){
            $flag=1;
            $user_table="users";
            $query="select * from $user_table where name='$sender'";
            $result3=mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result3);
            $amt_s=$row['balance']-$amount;
            if($amt_s>=0)
            {

                $result4=mysqli_query($con, "UPDATE users set balance= '$amt_s' where name='$sender'");
                $query="select * from $user_table where name='$receiver'";
                $result3=mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($result3);
                $amt_r=$row['balance']+$amount;
                $result5=mysqli_query($con, "UPDATE users set balance= '$amt_r' where name='$receiver'");

            }
            else{
                echo '<script>alert("Transaction unsuccessful ...LOW BALANCE")</script>';
                $flag=0;
            }
            if($flag==1)
            {
                $query="INSERT INTO transaction values(NULL,'$sender','$receiver','$amount')";
                $result2 = mysqli_query($con, $query);
                if($sender!="")
                {
                    echo '<script>alert("Transaction successful")</script>';
                    $sender="";
                }
            }
        }
        else{
            echo '<script>alert("Transaction unsuccessful as Sender and Receiver both are same")</script>';
        }
        // $_POST['submit']=FALSE;
    }
?>