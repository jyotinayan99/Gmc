<?php include('newcomplain1.php') ?>
<?php include('refresh.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div class="">
		<h1>Guwahati Muncipal Corporate</h1>
	</div>

	<div class="header">
		<h2>Add Member</h2>
	</div>
	
	<form method="post" action="addmember.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>

		<div class="input-group">
			<label>Type</label>

		<select name="type">
			<option>engineer</option>
			<option>supervisor</option>
		</select>
			
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		

		<div class="input-group">
			<button type="submit" class="btn" name="reg_mem">Register</button>
		</div>
		
	</form>
</body>
</html>
