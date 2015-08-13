<html>
<head>
	<title> Sell </title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vamsi";



echo ('

<form action="http://127.0.0.1/vamsiprj/sellhelp.php" method="post">
<center>
<h3>
Enter the UID:<input type="number" name="id" size="10"><br>
<input type="submit" value="Submit">
</h3>
</center>
</form>
');
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
			<th>UID</th>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
			</tr>'
	);
while($row = $result->fetch_assoc())
{
	echo ('
			<tr>
			<td>'.$row["uid"].'</td>
			<td>'.$row["name"].'</td>
			<td>'.$row["qty"].'</td>
			<td>'.$row["price"].'</td>
			</tr>'
	); 
}
echo "</table>";
?>
</body>
</html>
