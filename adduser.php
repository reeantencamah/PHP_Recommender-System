<?php
include("header.php");
include("db.php");

	$flag=0;
	
	if (isset($_POST['submit']))
	{
		$result=mysqli_query($con,"insert into users(username)values('$_POST[username]')");
		if($result)
		{
			$flag=1;
		}
	}

?>
<div class ="panel panel-default">
	<div class = "panel-heading">
		<h2>
			<a class = "btn btn-success" href = "add.php">Add product</a>
			<a class = "btn btn-info pull-right" href = "index.php">Back</a>

		</h2>
	</div>
	
	
	<?php if($flag){?>
	
	<div class="alert alert-success">User successfully inserted in database</div>
	
	<?php }?>
	
	
	
	<div class = "panel-body">
		<form action = "adduser.php" method = "post">
		<div class = "form-group">
			<label for = "username"> User Name</label>
			<input type = "text" name = "username" id = "username" class="form-control" required>
		</div>
		
		<div class = "form-group">
			<input type = "submit" name = "submit" value = "submit" class = "btn btn-primary" required>
		</div>
		
	</div>

</div>