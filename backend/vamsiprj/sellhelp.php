<html>
<head> 
	<title>Stocks</title>
</head>
<body>
<?php
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="vamsi";
	$prod_id = $_POST['id'];
	$conn = new mysqli($servername,$username,$password,$dbname);

	if ($conn->connect_error)
	{
		die("Connection failed: ". $conn->connect_error);
	}
	$sql = 'SELECT name,uid,qty,price FROM stocks_copy WHERE uid='.$prod_id;
	$result=$conn->query($sql);

	if ($result->num_rows == 0)
	echo '<center><h1>Sorry no such item available</center></h1>';
	else if ($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		$_SESSION['before_qty'] = $row['qty'];
		$_SESSION['selected_item'] = $row['uid'];
		echo ('
				<TABLE BORDER="5"    WIDTH="50%"   CELLPADDING="4" CELLSPACING="3">
				<tr>
					<th>UID</th>
					<th>Name</th>
					<th>Quantity Available</th>
					<th>price</th>
				</tr>
				<tr>
					<td>'.$row['uid'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['qty'].'</td>
					<td>'.$row['price'].'</td>
				<tr>
				</table><br>
			');
		echo ('
		<form action="http://127.0.0.1/vamsiprj/counter.php" method="post">
		Enter the Quantity you want to buy:<br>
		<input type="number" name="buy_qty">
		<input type="submit" value="submit">
		</form>
		');
	}
	
?>
</body>
</html>