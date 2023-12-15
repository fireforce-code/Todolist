<?php
include 'dbConnect.php';

$db_query = "SELECT taskName, taskDescription, createdAt FROM tasks";
$result = mysqli_query($dbConn, $db_query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View page</title>
</head>
<body>
    <div class="container">
        <h2>All Tasks</h2>
        <a href="index.php">Home Page</a>
        <?php
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                $task= $row['taskName'];
                $description = $row['taskDescription'];
                $date = $row['createdAt'];
        ?>
                <h3><?php echo "Task name: " . $task; ?></h3>
                <p><?php echo "Description: " . $description; ?></p>
                <small><?php echo "Created At: " . $date; ?></small>
                <hr>
        <?php
            }
        } else {
            echo 'No tasks found';
        }
        ?>
    </div>
</body>
</html>
