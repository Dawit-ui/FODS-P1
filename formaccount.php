<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css "></head>
</head>
<center>
	<body font-size: 2px;>
		<div id"wrapper">
	<div id="banner">
		<p><b><font color="white"> MY KITCHEN</font> </b></p>
	</div>
	<h1> PAYMENT OPTION by  BANK ACCOUNT </h1>
	<h2> online form </h2>
	<form action="formaccount.php" method="post">
		<table border="1" width="600" height="600">
	<tr>     <td><font-size: 25px>First Name:</font-size></td>
	         <td><input type="text" name="first name"></td>
	</tr>
	<tr>     <td>Last Name:</td>
	         <td><input type="text" name="last name"></td>
	</tr>
	<tr>     <td>Delivery Adress:</td>
	         <td><input type="text" name="delivery adress"></td>
	</tr>
	<tr>     <td>Phone:</td>
	         <td><input type="text" name="phone"></td>
	</tr>
	
	
         <tr>    <td colspan="15" align="center"> 
		<h6><b> account no: 1000505101 </b> </h6></td>
	</tr>	
	<tr>    <td colspan="15" align="center"> 
		<h6><b> mykitchen phone-no: 0978657865 </b> </h6></td>
	</tr>
	</form>
	<form action="orderid.php" method ="post">
      <tr>    <td colspan="5" align="center"> <input type="submit" name="pay" value="pay"></td></tr>

</form>
	
</table>


</div>
</body>
</center>
</html>
<?php
$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "12345";
	$dbname = "paymentorder";

	//Create Connection
	$conn = mysqli_connect("$dbhost" ,"$dbuser", "$dbpass");
	mysqli_select_db($conn,$dbname) or die(error_log(sorry));

if(isset($_POST['pay'] ))
{
 $Firstname = $_POST['first name'];
 $Lastname = $_POST['last name'];
 $DeliveryAdress = $_POST['delivery adress'];
 $ACCOUNTno = $_POST['account'];
 $Phone = $_POST['phone'];

 if( $Firstname=='')
 {
 	echo "<script>alert('please enter the FNAME') </script>";
 	exit();
 }
 if($Lastname=='')
 {
 	echo "<script>alert('please enter the LNAME') </script>";
 	exit();
 }
 if($DeliveryAdress=='')
 {
 	echo "<script>alert('please enter the PHONE') </script>";
 	exit();
 }
 if($ACCOUNTno=='')
 {
 	echo "<script>alert('please enter the ACCOUNTNO') </script>";
 	exit();
 }
 if($Phone=='')
 {
 	echo "<script>alert('please enter the ADRESS') </script>";
 	exit();
 }
 


else{
 $query = "insert into onlineform (FName,LName,Phone,Adress,ACCOUNTno) values ('$Fname','$Lname','$Phone','$Adress','$ACCOUNTno')";
 if(mysqli_query($query)){
 	echo "<h3> on line payment succesful </h3>";
 }
}
}
?>