
<?php 
	include 'db.php';
	include 'header.php';
?>

<?php  
	
		if(isset($_GET['submit'])){
		$train_no = mysqli_real_escape_string($conn, strip_tags($_GET['train_no'])) ;
		$class = mysqli_real_escape_string($conn,strip_tags($_GET['class']));
		$date = mysqli_real_escape_string($conn,strip_tags($_GET['date'])) ;
		$name = mysqli_real_escape_string($conn,strip_tags($_GET['name'])) ;
		$age = mysqli_real_escape_string($conn,strip_tags($_GET['age'])) ;
		$sex = mysqli_real_escape_string($conn,strip_tags($_GET['sex'])) ;
		$bp = mysqli_real_escape_string($conn,strip_tags($_GET['bp'])) ;
		$sc = mysqli_real_escape_string($conn,strip_tags($_GET['sc'])) ;
		$rkey = mysqli_real_escape_string($conn,strip_tags($_GET['rkey'])) ;
		
		$s="SELECT * FROM trains WHERE train_no='$_GET[train_no]'";
		$r=mysqli_query($conn,$s);
		while($row=mysqli_fetch_assoc($r))
{  
$train_name = mysqli_real_escape_string($conn,strip_tags($row['train_name'])) ;
		$from = mysqli_real_escape_string($conn,strip_tags($row['departure']));
		$to = mysqli_real_escape_string($conn,strip_tags( $row['arrival']));
}
		
		$ins = "INSERT INTO details(train_no,train_name,departure,arrival,class,date,name,age,sex,berth_preference,senior_citizen,rkey) VALUES ('$train_no','$train_name','$from','$to','$class','$date','$name','$age','$sex','$bp','$sc','$rkey')";
		$a=mysqli_query($conn,$ins);  
		if($a)
	{ 
	echo "success";
}
else{ echo "fail";}
	}
	
?> 
<html>
<head>
</head>
<body>
<div class="form-group">
	<form action="ticket.php" method="post" > 
		<label for="">enter your unique code for ticket</label>
		<input type="number" name="rkey" class="from-control" required>
		<input type="submit" name="submit" value="generate ticket">
	</form>
	</div>
	<?php   
	
		
		if(isset($_POST['rkey']))
			
		{ 
       
		
		$se1= "SELECT * FROM details WHERE rkey='$_POST[rkey]'";
		$r1=mysqli_query($conn,$se1);
		while($row=mysqli_fetch_assoc($r1))
		{ 
	  echo " 
			<div class='table-responsive'>
					<table class='table table-hover'> 
				<tr> 
					<th> train_no</th>
					<td>".$row['train_no']."</td>
					</tr>
					<tr>
					<th>train_name</th>
					<td>".$row['train_name']."</td>
					</tr>
					<tr>
					<th>from</th>
					<td>".$row['depature']."</td>
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
					<th>date</th>
					<td>".$row['date']."</td>
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
					<th>berth_preference</th>
					<td>".$row['berth_preference']."</td>
					</tr>
					<tr>
					<th>senior_citizen</th>
					<td>".$row['senior_citizen']."</td>
					
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
