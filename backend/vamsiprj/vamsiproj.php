<html>
<head>
<title> DEPARTMENTAL STORE </title>
</head>
<body>
<center>
<h1> WELCOME TO OUR DEPARTMENTAL STORE </h1>
</center>
<h3>
<center>
<i> How May I Help You? </i>
</center>
</h3>
<form action="http://127.0.0.1/vamsiprj/vamsiproj2.php" id="myform" onsubmit="return(validateForm())" >
<center>
<b>
Customer ID:<input name="Customer_ID" value="" size="10"><br>
Password:<input type="password" name="password" value="" size="10"><br>
</b>
<input type="submit" value="Submit">
<input type="reset">
</center>

</form>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="vamsi";

$conn1 = new mysqli($servername,$username,$password,$dbname);
$conn2 = new mysqli($servername,$username,$password,$dbname);  
$sql3 = 'DELETE FROM `stocks_copy` WHERE 1';
if ($conn1->connect_error)
  {
    die("Connection failed: ". $conn1->connect_error);
  }
if ($conn2->connect_error)
  {
    die("Connection failed: ". $conn2->connect_error);
  }

  $conn2->query($sql3);   /* Delete stocks_copy*/

  $sql1 = 'SELECT * FROM stocks_buy';

  $result=$conn1->query($sql1);
  while($row = $result->fetch_assoc())
  {
    $sql2 = 'INSERT INTO `vamsi`.`stocks_copy` (`uid`, `name`, `qty`, `price`) VALUES ('.$row["uid"].',"'.$row["name"].'","'.$row["qty"].'","'.$row["price"].'");';
    $conn2->query($sql2);
  }
?>
<script type="text/javascript">
<!--
// Form validation code will come here.
function validateForm()
{
 
   if(Customer_ID.value== "" )
   {
     alert("Please enter your ID !");
    return false;
   }
   if(password.value == "" )
   {
     alert("Please enter your password:");
    return false;
   }
   return true;
}
//-->
</script>


 

<body background="v2.jpg">
</body>
</html>






