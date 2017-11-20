
<?php 
	include 'db.php';
	include 'header.php';
?>

<html> 
	<head> 
		<title></title>
	</head> 
	<style> 
			table{ 
				border:2px solid black;
				width:1000px;
				 
				
			} 
			table td { 
				text-align:center;
				 border-collapse: collapse;
			} 
		   th,td{ 
					border:2px solid black;
				cell-padding:10px;
			}
		</style>
	<body>
		<div> 
			<table> 
				<tr> 
					<th>train_no</th>
					<th>train_name</th>
					<th>from</th>
					<th>dep_time</th>
					<th>to</th>
					<th>arr_time</th>
					<th>date</th>
				</tr>
				<tr> 
					<?php  
						if(isset($_GET['train_no'])){ 
							$sql = "SELECT * FROM trains WHERE train_no='$_GET[train_no]'";
							$run = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($run)) 
							{ 
								echo " <td>" . $row['train_no']. "</td>";
								echo " <td>" . $row['train_name']. "</td>";
								echo " <td>" . $row['departure']. "</td>";
								echo " <td>" . $row['dep_time']. "</td>";
								echo " <td>" . $row['arrival']. "</td>";
								echo " <td>" . $row['arr_time']. "</td>";
								echo " <td>" . $_GET['date']. "</td>";
							}
						}
						
					?>
				</tr>
			</table>
			
		</div>
		<div> 
			<h1>Train and Passenger Details</h1>
			<form action="ticket.php" method="get">
			<div> 
				<h3> fill the details of the train carefully by looking the above information</h3>
				<table> 
				<tr>
					<th>train_no</th>
					<th>train_name</th>
					<th>from</th>
					<th>to</th>
					<th>class</th>
					<th>date</th>
					</tr>
					<tr> 
						<td> <input type="number" name="train_no" id="train_no" ></td>
                                                <?php 
							$sql1 = "SELECT * FROM trains WHERE train_no='$_GET[train_no]'";
							$run1 = mysqli_query($conn,$sql1);
                                                       while($row=mysqli_fetch_assoc($run1)){
						echo "<td> ".$row['train_name']."</td>";
						echo "<td> ".$row['departure']."</td>";
						echo "<td> ".$row['arrival']."</td>";
						}
                                              ?>
						<td> <input list="class" name="class" >
											<datalist id="class" >
												<option>sleeper</option>
												<option>1A</option>
													<option>2A</option>
												<option>3A</option>
												<option>chair car</option> 
						</td>
						<td> <input type="date" name="date"></td>						
					</tr>
					
				</table>

			</div>
<div> 
<?php 
echo "<h3>";
$ran=mt_rand(1,10000);
echo "use this unique code below &nbsp" .$ran;
echo "</h3>"
?>
</div>
			<br> <br>
			<table> 
				<tr> 
					
					<th>name</th>
					<th>age</th>
					<th>sex</th>
					<th>berth preference</th>
					<th>senior citizen</th>
<th>Enter your unique code</th>
				</tr>
				
				<tr> 
					
					<td> <input type="text" name="name" id="name" ></td>
					<td> <input type="number" name="age" id="age" ></td>
					<td> <input list="sex" name="sex" >
											<datalist id="sex" >
												<option>Male</option>
												<option>female</option> 
												</td>
					<td><input list="bp" name="bp" >
											<datalist id="bp" >
												<option>upper</option>
												<option>lower</option>
													<option>sideupper</option>
												<option>sidelower</option>
												<option>middle</option>
												</td>
					<td> <input list="sc" name="sc" >
											<datalist id="sc" >
												<option>yes</option>
												<option>no</option></td>
<td><input type="number" name="rkey"></td>

				</tr>
				
			</table>
			<br> 
			<input type="submit" name="submit" value="submit">
			</form>
		</div>
	</body>
</html>
