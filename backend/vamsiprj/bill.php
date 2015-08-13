<html>
<head><title>Bill</title></head>
<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="vamsi";
	session_start();

	$conn = new mysqli($servername,$username,$password,$dbname);

	if ($conn->connect_error)
	{
		die("Connection failed: ". $conn->connect_error);
	}
	echo "<h1><center>Bill</center></h1>";
	$sql = "SELECT name, uid, qty, price FROM bill";
	$result=$conn->query($sql);
	echo ('
				<TABLE BORDER="5"    WIDTH="50%"   CELLPADDING="4" CELLSPACING="3">
				<tr>
				<th>Name</th>
				<th>UID</th>
				<th>Quantity</th>
				<th>Price</th>
				</tr>'
		);
	while($row = $result->fetch_assoc())
	{
		echo ('
				<tr>
				<td>'.$row["name"].'</td>
				<td>'.$row["uid"].'</td>
				<td>'.$row["qty"].'</td>
				<td>'.$row["price"].'</td>
				</tr>'
		); 
	}
	echo "</table>";
	echo "<h2>Grand Total: ".$_SESSION['total']."<h2>";
	$sql = "DELETE FROM `bill` WHERE 1";
	$conn->query($sql);
	echo "<a href='http://127.0.0.1/vamsiprj/vamsiproj2.php'><button>Another Transaction?</button></a>";
	?>
	
</body>
</html>