<?php
	$usernam = intval($_GET['username']);
	$title= "Edit Page";
	include('header.php');

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from user where username={$usernam}";
	$result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
	print_r($row);
	/*$username= $row['username'];
	$password = $row['password']; 
	$email= $row['email'];*/


	//echo $_GET['id'];
	//echo $_GET['email'];
?>


	<div id="page_title">
		<h1>Edit Page</h1>
	</div>

	<div id='nav_bar'>
		<a href="user_list.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<form method="post" action="../controller/editUser.php">
			<fieldset>
				<legend>Create New</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php echo $row['username']?>"> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="<?php echo $row['password']?>"> </td>
					</tr>
				
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?php echo $row['email']?>"> </td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="signup" value="Update">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php');


		

				
				
?>