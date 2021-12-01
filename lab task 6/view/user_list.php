<?php
	$title= "User list Page";
	include('header.php');
	
?>

	<div id="page_title">
		<h1>User List</h1>
	</div>

	<div id='nav_bar'>
		<a href="home.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Password</td>
				<td>Email</td>
			</tr>
			
				<?php
				$conn = mysqli_connect('localhost', 'root', '', 'webtech');
				$sql = "select * from user";
				$result = mysqli_query($conn, $sql);
				while($row=mysqli_fetch_array($result))
				{
						echo "<tr>";
					 	echo "<td>"; echo $row["id"]; echo "</td>";
					    echo "<td>"; echo $row["username"]; echo "</td>";
					    echo "<td>"; echo $row["password"]; echo "</td>";
					    echo "<td>"; echo $row["email"]; echo "</td>";
					    echo "<td>"; ?>

					    <td><a href=edit.php?username="<?php echo $row['username']?>">Edit</a></td>
				        <td><a href=../controller/deleteUsers.php?msg="<?php $row['username']?>">Delete</a></td>
					     
                		<?php echo "</td>";
   						 echo "</tr>";
    					
				}
				?>
				
				
					 
				  
		</table>
	</div>

