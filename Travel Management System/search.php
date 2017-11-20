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
		<h1>trains List</h1>
		
		<?php   
		
		if(isset($_GET['submit']))
{
    $from = $_GET['from'] ;
}
			if(mysqli_connect_errno())
			{ 
			echo "failed to connect :" .mysqli_connect_error();
		}	
		$result = mysqli_query($conn,"SELECT * FROM trains WHERE departure='$_GET[from]' AND arrival='$_GET[to]'");
		if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
  }

		echo " 
			<div id='tab'>
			<table> 
			<tr> 
				<th>train_no</th>
				<th>train_name</th>
				<th>from</th>
				<th>dep_time</th>
				<th>to</th>
				<th>arr_time</th>
				<th>date</th>
				
			</tr>";
		
			while($row = mysqli_fetch_array($result))
			{ 
			
			
			echo "<tr>";
            echo "<td>" . $row['train_no'] . "</td>";
			
            echo "<td>" . $row['train_name'] . "</td>";
			  echo "<td>" . $row['departure'] . "</td>";
			    echo "<td>" . $row['dep_time'] . "</td>";
				  echo "<td>" . $row['arrival'] . "</td>";
				    echo "<td>" . $row['arr_time'] . "</td>";
					
						echo "<td>" .$_GET['date'].  "</td>";
						echo " <td> 
						<a href='details.php?train_no=$row[train_no]&date=$_GET[date]'>book</a>
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
