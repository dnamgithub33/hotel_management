<?php
session_start();
if (!isset($_SESSION['username']))
    header("location: index.php?Message=Login To Continue");
elseif ($_SESSION['username']!="admin")
    header("location: index.php?Message=You are not admin");
include "connection.php";
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
            
            
            
            input[name="open_show_user"] {
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                box-sizing: border-box;
            }
            input[name="open_show_room"] {
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                box-sizing: border-box;
            }
            .table {
                border-collapse: collapse;
                width: 150%;
                box-sizing: border-box;
            }

            .table th, .table td {
                border: 1px solid #ddd;
                padding: 8px;
                box-sizing: border-box;
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
<li><a href="logout.php">Logout</a></li>
    <h2>All user.</h2>
    <form action="admin.php" method="post" enctype="multipart/form-data">
        <input type="submit" value="Show users" name="open_show_user">
    </form>
    <?php
        if(isset($_POST['open_show_user'])){
            $sql="SELECT * FROM user;";
            $users=mysqli_query($con, $sql);
            echo '<form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Userid</th>
                        <th>Password</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Company</th>
                        <th>Phone</th>
                        <th>User Address</th>
                    </tr>
                    </thead>
                    <tbody>';
        ?>
                    <?php
                        
                        foreach ($users as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $value['Userid']; ?></td>
                                <td><?php echo $value['Password']; ?></td>
                                <td><?php echo $value['User Name']; ?></td>
                                <td><?php echo $value['User Email']; ?></td>
                                <td><?php echo $value['User Company']; ?></td>
                                <td><?php echo $value['User Phone']; ?></td>
                                <td><?php echo $value['User Address']; ?></td>
                                <td>
                                    <button class="button">
                                        <a href="history.php?uname=<?php echo $value['Userid']; ?>" class="text-light">Booking history</a>
                                    </button>
                                </td>
                            </tr>
                            <?php
                        }
                    
                    ?>
                    </tbody>
                </table>
            </div>
            </form>
            <?php
        }
    ?>
<h2>Remaning.</h2>
<form action="admin.php" method="post" enctype="multipart/form-data">
    </form>
    <?php
        
            $sql="SELECT
            room_types.type,
            COALESCE(COUNT(r.room_number), 0) AS count_checked_out
          FROM
            (
              SELECT 'Standard' AS type
              UNION
              SELECT 'Suite' AS type
              UNION
              SELECT 'Deluxe' AS type
              UNION
              SELECT 'Super Deluxe' AS type
            ) AS room_types
          LEFT JOIN
            room r ON room_types.type = r.type AND r.`ChechOut Date` > CURDATE()
          GROUP BY
            room_types.type;";
            $rooms=mysqli_query($con, $sql);
            echo '<form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Remaning</th>
                    </tr>
                    </thead>
                    <tbody>';
        ?>
                    <?php
                        
                        foreach ($rooms as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $value['type']; ?></td>
                                <td><?php echo $value['count_checked_out']; ?></td>
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
<h2>All rooms.</h2>
    <form action="admin.php" method="post" enctype="multipart/form-data">
        <input type="submit" value="Show rooms" name="open_show_room">
    </form>
    <?php
        if(isset($_POST['open_show_room'])){
            $sql="SELECT * FROM room;";
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
                                <td><?php echo $value['ChechOut Date']; ?></td>
                                <td><?php $timestamp = strtotime($value['ChechOut Date']);
                                            if($timestamp>=time())
                                            echo "Serving";
                                              ?></td>
                            </tr>
                            <?php
                        }
                    
                    ?>
                    </tbody>
                </table>
            </div>
            </form>
            <?php
        }
    ?>
    
</body>
</html>