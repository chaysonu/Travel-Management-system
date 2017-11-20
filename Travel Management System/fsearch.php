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
		<h1>flights List</h1>
		
		<?php   
		
		if(isset($_GET['submit']))
{
}
			if(mysqli_connect_errno())
			{ 
			echo "failed to connect :" .mysqli_connect_error();
		}	
		$result = mysqli_query($conn,"SELECT * FROM flights WHERE departure='$_GET[from]' AND arrival='$_GET[to]'");
		if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
  }

		echo " 
			<div id='tab'>
			<table> 
			<tr> 
				<th>flight_no</th>
				<th>from</th>
				<th>to</th>
				<th>dep.time</th>
				<th>arr.time</th>
				
				
			</tr>";
		
			while($row = mysqli_fetch_array($result))
			{ 
			
			
			echo "<tr>";
            echo "<td>" . $row['flight_no'] . "</td>";
			echo "<td>" . $row['departure'] . "</td>";
            echo "<td>" . $row['arrival'] . "</td>";
			 echo "<td>" . $row['dep_time'] . "</td>";

				    echo "<td>" . $row['arr_time'] . "</td>";
					
						
						echo " <td> 
						<a href='fdetails.php?flight_no=$row[flight_no]'>book</a>
					</td> ";
			}
				
		
			echo " 
			</tr>
			</table>
			</div>
		";
		?>
	</body>
</html>
