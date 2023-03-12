<?php
    require_once('db.php');
    $table_name = "transaction"; 
    $query = "select * from $table_name order by trans_id desc";
    $result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <table  id="user-table">
            <tr id="table-head">
                <th class="user-table-th">Transaction Id</th>
                <th class="user-table-th">Sender</th>
                <th class="user-table-th">Receiver</th>
                <th class="user-table-th">Amount</th>
            </tr>
            <tr>
                <?php
                    $i=0;
                while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <td class="user-table-td <?php if($i%2==0)echo "type1"; else echo "type2"?>"><?php echo $row['trans_id'];?></td>
                    <td class="user-table-td <?php if($i%2==0)echo "type1"; else echo "type2"?>"><?php echo $row['sender'];?></td>
                    <td class="user-table-td <?php if($i%2==0)echo "type1"; else echo "type2"?>"><?php echo $row['receiver'];?></td>
                    <td class="user-table-td <?php if($i%2==0)echo "type1"; else echo "type2"?>"><?php echo $row['amount'];?> Rs.</td>
            </tr>

                <?php
                $i=$i+1;
                }
                ?>
        </table>
        <br><br>
        <a href="index.php"><button  id="exit">Exit</button></a>
    </div>
</body>
</html>