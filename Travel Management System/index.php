<?php  
include 'db.php';
include 'header.php';
 ?>
 <html> 
	<head> 
		<title>Travel beat</title>
	</head>
		<style> 
			#form{ 
				border:2px solid grey;
				padding:10px;
			}
		</style>
	<body>
		<div> 
			<h1>Book your Train Ticket</h1>
			
		</div>
		<div id="form"> 
		
			<form action="search.php" method="get"> 
			
		      <tr>
			   <label for="from">Select your station</label>
											<input list="from" name="from">
											<datalist id="from" >
												<option>Hanamkonda</option>
												<option>warangal</option>
												<option>Hyderabad</option>
												<option>vizag</option>
												<option>Vijayawada</option>
												<option>newdelhi</option>
												<option>chennai</option>
												<option>Kothagudem</option>
												<option>kolkata</option>
												<option>Karnool</option>
												<option>Nelore</option>
												<option>E.Godavari</option>
												<option>W.Godavari</option>
												<option>Bhopalpalli</option>
												<option>Khammam</option>
												<option>Nalgonda</option>
											</datalist> 
											
											<label for="to">Select your destination</label>
											<input list="to" name="to">
											<datalist id="to" >
												<option>Hanamkonda</option>
												<option>warangal</option>
												<option>Hyderabad</option>
												<option>vizag</option>
												<option>Vijayawada</option>
												<option>chennai</option>
												<option>newdelhi</option>
												<option>kolkata/option>
												<option>Karimnagar</option>
												<option>Karnool</option>
												<option>Nelore</option>
												<option>E.Godavari</option>
												<option>W.Godavari</option>
												<option>Bhopalpalli</option>
												<option>Khammam</option>
												<option>Nalgonda</option>
											</datalist>
											
											</tr>
											
												<br> <br> 
			
			<tr> 
				<label for="date">Date</label>
				<input type="date" id="date" name="date">
			</tr>
			
			
			<tr> 
			<label for="class">select class</label>
			<input list="class" name="class">
			<datalist id="class">
				<option >sleeper</option>
				<option >chair car</option>
				<option >3A</option>
				<option >2A</option>
				<option >1A</option>
		    </datalist>
			
			</tr>
			<br> <br> 
			
			<tr> 
				
			
			</tr>
				<br> <br>
			<tr> 
				<input type="submit" name="submit" value="search trains">
			</tr>
				
				
		</form>  
		</div>
	</body>
 </html> 
  

