<?php
session_start();
if (!isset($_SESSION['username']))
    header("location: index.php?Message=Login To Continue");
elseif ($_SESSION['username']!="admin")
    header("location: index.php?Message=You are not admin");
if(!isset($_GET['uname']))
    header("location: admin.php");
include "connection.php";
$uname=$_GET['uname'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>admin</title>
    <style>
            body {
                font-family: Arial, sans-serif;
            }
            h2 {
                color: #333;
            }
            form {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 10px;
            }
            label {
                font-weight: bold;
            margin-right: 10px;
            }
            input, select {
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
            padding-left: 10px;
            }
            select {
                padding: 8px;
            }
            input[name="submit_product"] {
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
            }
            input[name="open_submit_product"] {
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
            }
            input[name="close_submit_product"] {
                background-color: #FF0000;
                color: #fff;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                margin-top: 8px;
            }
            input[name="open_show_user"] {
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
            }
            input[name="open_show_room"] {
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
            }
            .table {
                border-collapse: collapse;
                width: 100%;
            }

            .table th, .table td {
                border: 1px solid #ddd;
                padding: 8px;
            }

            .table tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            .table th {
                background-color: #4CAF50;
                color: white;
            }

        </style>
</head>
<body>
<li><a href="admin.php">Back</a></li>
<?php
    echo '<h2>history of '.$uname. '</h2>';
?>

    <form action="admin.php" method="post" enctype="multipart/form-data">
    </form>
    <?php
        
            $sql="SELECT room.*
            FROM room
            JOIN mapur ON room.r_id = mapur.r_id
            WHERE mapur.Userid = '$uname';";
            $users=mysqli_query($con, $sql);
            echo '<form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Room number</th>
                        <th>Serving</th>
                        <th>Type</th>
                        <th>Check in date</th>
                        <th>Check out date</th>
                    </tr>
                    </thead>
                    <tbody>';
        ?>
                    <?php
                        
                        foreach ($users as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $value['room_number']; ?></td>
                                <td><?php echo $value['r_id']; ?></td>
                                <td><?php echo $value['type']; ?></td>
                                <td><?php echo $value['CheckIn Date']; ?></td>
                                <td><?php echo $value['ChechOut Date']; ?></td>
                            </tr>
                            <?php
                        }
                    
                    ?>
                    </tbody>
                </table>
            </div>
            </form>
            <?php
    ?>
    
</body>
</html>