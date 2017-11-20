
<?php 
	include 'db.php';
	include 'header.php';
?>
<?php  
	
		if(isset($_GET['submit'])){
		$flight_no = mysqli_real_escape_string($conn, strip_tags($_GET['flight_no'])) ;
		$name = mysqli_real_escape_string($conn,strip_tags($_GET['name'])) ;
		$age = mysqli_real_escape_string($conn,strip_tags($_GET['age'])) ;
		$sex = mysqli_real_escape_string($conn,strip_tags($_GET['sex'])) ;
		$qua = mysqli_real_escape_string($conn,strip_tags($_GET['qua'])) ;
		$rkey = mysqli_real_escape_string($conn,strip_tags($_GET['rkey'])) ;
		$s="SELECT * FROM flights WHERE flight_no='$_GET[flight_no]'";
		$r=mysqli_query($conn,$s);
		while($row=mysqli_fetch_assoc($r))
		{
		$from = mysqli_real_escape_string($conn,strip_tags($row['departure']));
		$to = mysqli_real_escape_string($conn,strip_tags( $row['arrival']));
		}
		$details_ins_sql = "INSERT INTO fdetails(flight_no,departure,arrival,name,age,sex,student,rkey) VALUES ('$flight_no','$from','$to','$name','$age','$sex','$qua','$rkey')";
		$a=mysqli_query($conn,$details_ins_sql);
		if($a)
		{
		echo "success";
		}
		else
		{
		echo "fail";
		}
		}	
		?> 
<html>
<head>
</head>
<body>
<div class="form-group">
	<form action="fticket.php" method="post" > 
		<label for="">enter your unique code for ticket</label>
		<input type="number" name="rkey" class="from-control" required>
		<input type="submit" name="submit" value="generate ticket">
	</form>
	</div>
	<?php   
	
		
		if(isset($_POST['rkey']))
			
		{ 
       
		
		$se1= "SELECT * FROM fdetails WHERE rkey='$_POST[rkey]'";
		$r1=mysqli_query($conn,$se1);
		while($row=mysqli_fetch_assoc($r1))
		{ 
	  echo " 
			<div class='table-responsive'>
					<table class='table table-hover'> 
				<tr> 
					<th> flight_no</th>
					<td>".$row['flight_no']."</td>
					</tr>
					<tr>
					<th>from</th>
					<td>".$row['departure']."</td>
					</tr>
					<tr>
					<th>to</th>
					<td>".$row['arrival']."</td>
					</tr>
					<tr>
					<th>class</th>
					<td>".$row['class']."</td>
					</tr>
					<tr>
					<th>name</th>
					<td>".$row['name']."</td>
					</tr>
					<tr>
					<th>age</th>
					<td>".$row['age']."</td>
					</tr>
					<tr>
					<th>sex</th>
					<td>".$row['sex']."</td>
					</tr>
					<tr>
					<th>student</th>
					<td>".$row['student']."</td>
					</tr>
				</tr>
			</table>
			</div>
		";
	
	}
	}
	?>
	</div>
	</body>
	</html>

