<?php  
include 'db.php';
include 'header.php';
 ?>
<html> 
	<head> 
	<title> 
		Flights Reservation
		</title>
	 </head> 
		<style> 
			body
			{ 
				background-image:url(https://wallpapercave.com/wp/1sorSlY.jpg);
			}
			#form
			{ 
				text-align:center;
				border: 2px dark gray;
				}
			#mar
			{ 
				color:red;
			}
			#sub
			{
			text-align:center;
			}
		</style>
	<body> 
		
		<div id="form"> 
			<form action="fsearch.php" method="get"> 
			
				<br> <br>
				<tr> 
					<label for="from">Select your city</label>
					<input list="from" name="from" placeholder="from">
					<datalist id="from">
					<option>Visakhapatnam</option>
					<option>Hyderbad</option>
					<option>Mumbai</option>
					<option>newdelhi</option>
					<option>Kolkata</option>
					<option>Amristar</option>
					<option>Chennai</option>
					<option>Thiruvanthapuram</option>
					<option>Bubaneshwar</option>
					<option>Chandigarh</option>
					</datalist>
				</tr>
				<br> <br> 
				<tr> 
					<label for="to">Select your city</label>
					<input list="to" name="to" placeholder="to">
					<datalist id="to">
					<option>Visakhapatnam</option>
					<option>Hyderbad</option>
					<option>Mumbai</option>
					<option>newdelhi</option>
					<option>Kolkata</option>
					<option>Amristar</option>
					<option>Chennai</option>
					<option>Thiruvanthapuram</option>
					<option>Bubaneshwar</option>
					<option>Chandigarh</option>
					</datalist>
				</tr>
				<br> <br>
				<tr> 
					<label for="date">Departure</label>
					<input type="date" id="ddata" name="ddate">
				</tr>
				
				<br> <br>
				<tr> 
					<label for="anum">Adults</label>
					<input type="number" name="anum" id="anum">
				</tr>
				<tr> 
					<label for="cnum">Children</label>
					<input type="number" name="cnum" id="cnum">
				</tr>
				
				<br> <br>
				
				
				<tr> 
					<label for="class">Select your class</label>
					<input list="class" name="class">
					<datalist id="class">
					<option>Economy</option>
					<option>Business</option>
					</datalist>
				</tr>
				<br>
				<div id="sub"> 
		<input type="submit"  name="submit" value="submit">
		
		 </div>
			</form>
			
		 <div id="mar"> 
			<marquee direction="left"><h3> Welcome to TRAVEL BEAT website for FLIGHT ticket booking </h3> </marquee>
		 </div>
		 </body>
</html>    
