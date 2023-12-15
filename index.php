<?php
include 'dbConnect.php';
?>

<html>
<head>
    <title>My Todos</title>
</head>
<body>
    <h2>A Todo List App</h2>
    <p><a href="create.php">Add Task</a></p>
    <p><a href="view.php">View Task list</a></p>

        <?php
        $db_query = "SELECT id, taskName FROM tasks";
        $result = mysqli_query($dbConn, $db_query);

        if(mysqli_num_rows($result) >= 1) {
            while($row = mysqli_fetch_array($result)) {
                $id= $row['id'];
                $task= $row['taskName'];
                $date=$row['createdAt'];
        ?>
        
         
        <?php
            }
        }
        ?>
</body>
</html>
