<b>Enter Details </b>
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
					<th>flight_no</th>
					<th>from</th>
					<th>to</th>
					<th>dep.time</th>
					<th>arr.time</th>
					
				</tr>
				<tr> 
					<?php  
						if(isset($_GET['flight_no'])){ 
							$sql = "SELECT * FROM flights WHERE flight_no='$_GET[flight_no]'";
							$run = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($run)) 
							{ 
								echo " <td>" . $row['flight_no']. "</td>";
								echo " <td>" . $row['departure']. "</td>";
								echo " <td>" . $row['arrival']. "</td>";
								echo " <td>" . $row['dep_time']. "</td>";
								echo " <td>" . $row['arr_time']. "</td>";
							}
						}
						
					?>
				</tr>
			</table>
			
		</div>
		<div> 
			<h1>Flight and Passenger Details</h1>
			<form action="fticket.php" method="get">
			<div> 
				<h3> Fill the details of the flights carefully by looking the above information</h3>
				<table> 
				<tr>
					<th>flight_no</th>
					<th>from</th>
					<th>to</th>
					<th>class</th>
					
					</tr>
					<tr> 
						<td> <input type="number" name="flight_no" id="flight_no" ></td>
						<?php 
							$sql1 = "SELECT * FROM flights WHERE flight_no='$_GET[flight_no]'";
							$run1 = mysqli_query($conn,$sql1);
                                                       while($row=mysqli_fetch_assoc($run1)){
		
						echo "<td> ".$row['departure']."</td>";
						echo "<td> ".$row['arrival']."</td>";
						}
                                              ?>
				
						<td> <input list="class" name="class" >
											<datalist id="class" >
												
												<option>Bussiness</option>
													<option>Economy</option>
												
						</td>
										
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
                                        <th>student</th>
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
					<td> <input list="qua" name="qua" >
											<datalist id="qua" >
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
