<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Todo List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	
	<h2>Create a new Task</h2>
    <form method="post" action="create.php">
	  <div class="form-group">
		<label for="taskName">Task Name</label>
		<input type="text" class="form-control" name="taskName" aria-describedby="emailHelp" placeholder="Enter Task title">
	  </div>
	  <div class="form-group">
		<label for="taskDescription">Task Description</label>
		<input type="text" class="form-control" name="taskDescription" placeholder="Description">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
	<a href="view.php">View Tasks</a>
    
</body>
</html>

<?php
include 'dbConnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$task = $_POST['taskName'];
	$description = $_POST['taskDescription'];
	
	if (empty($task) || empty($description)) {
		echo "Both fields are required.";
	} else {
		$sql_query = "INSERT INTO tasks (taskName, taskDescription) VALUES ('$task', '$description')";
		$insertTodo = mysqli_query($dbConn, $sql_query);

		if($insertTodo) {
			echo "Successfully created";
		} else {
			echo mysqli_error($dbConn);
		}
		mysqli_close($dbConn);
	}
}
?>
