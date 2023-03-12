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
    <link rel="stylesheet" href="users.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <table  id="user-table">
            <tr id="table-head">
                <th class="user-table-th">Account Number</th>
                <th class="user-table-th">Name</th>
                <th class="user-table-th">Email</th>
                <th class="user-table-th">Balance</th>
            </tr>
            <tr>
                <?php
                    $i=0;
                while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                    <td class="user-table-td <?php if($i%2==0)echo "type1"; else echo "type2"?>"><?php echo $row['ac_no'];?></td>
                    <td class="user-table-td <?php if($i%2==0)echo "type1"; else echo "type2"?>"><?php echo $row['name'];?></td>
                    <td class="user-table-td <?php if($i%2==0)echo "type1"; else echo "type2"?>"><?php echo $row['email'];?></td>
                    <td class="user-table-td <?php if($i%2==0)echo "type1"; else echo "type2"?>"><?php echo $row['balance'];?> Rs.</td>
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