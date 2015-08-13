<html>
<head>
<title>
Counter page</title></head>
<body>
<?php
	session_start();
	$uid = $_SESSION['selected_item'];
	$bought_qty = $_POST['buy_qty'];

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="vamsi";
	
	$conn = new mysqli($servername,$username,$password,$dbname);

	if ($conn->connect_error)
	{
		die("Connection failed: ". $conn->connect_error);
	}

	$sql = 'SELECT name,uid,qty,price FROM stocks_copy WHERE uid='.$uid;
	$result=$conn->query($sql);
	$row = $result->fetch_assoc();
	$qty = $row["qty"]-$bought_qty;
	
	/*echo "yoooooooooooooooo ".$qty;
	$sql2 = 'UPDATE stocks_copy SET `qty`='.$row["qty"]-$bought_qty.'WHERE uid='.$uid;
	$sql2 = "UPDATE `stocks_copy` SET qty=-78 WHERE 1";
	$conn->query($sql2);*/
	$conn1 = new mysqli($servername,$username,$password,$dbname);

	if ($conn1->connect_error)
	{
		die("Connection failed: ". $conn1->connect_error);
	}
	if ($row['qty'] == 0)
		echo "<center><h1>Sorry ".$row['name']." is out of stock</h1></center>";
	else if($qty < 0)
		echo "<center><h1>Sorry only ".$row['qty'] ." ".$row['name']." available</h1></center>";
	else{
		$sql1 = 'INSERT INTO `vamsi`.`bill` (`uid`, `name`, `qty`, `price`) VALUES ('.$row["uid"].',"'.$row["name"].'","'.$bought_qty.'","'.$row["price"].'");';
		$result1=$conn1->query($sql1);
		$_SESSION['total'] = $_SESSION['total'] + $row['price']*$bought_qty;
		}	
	echo "<center><h1>Current total:".$_SESSION['total'];
	echo "<br>Do you want to buy anything else?<br>";
	echo '<a href="http://127.0.0.1/vamsiprj/sell(1).php"><button>YES</button>';
	echo '<a href="http://127.0.0.1/vamsiprj/bill.php"><button>NO</button></h1></center>';
?>
</body>
</html>