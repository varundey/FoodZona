<html>
<head> 
	<title>Stocks</title>
</head>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vamsi";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
}


$sql = "SELECT name, uid, qty, price FROM stocks_copy";
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
?>
</html>