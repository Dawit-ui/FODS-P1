<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css "></head>
<center>
	<body>
		<div id"wrapper">
	<div id="banner">
		<p><b> <font color="white">MY KITCHEN </font></b></p>
	</div>
		<h1> PAYMENT OPTION by DELIVERY MAN </h1>
	<h2> Delivery  form </h2>
	<form action="orderid.php" method="post">
		<table border="1" width="600" height="600">
	<tr>     <td>first name:</td>
	         <td><input type="text" name="first name"></td>
	</tr>
	<tr>     <td>last name:</td>
	         <td><input type="text" name="last name"></td>
	</tr>
	<tr>     <td>delivery adress:</td>
	         <td><input type="text" name=" delivery adress"></td>
	</tr>
	<tr>     <td>phone:</td>
	         <td><input type="text" name="phone"></td>
	</tr>
	<tr>    <td colspan="5" align="center"> <input type="submit" name="ok" value="ok"></td>
	</tr>

</table>
</form>


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
	//$conn = mysqli_connect("$dbhost" ,"$dbuser", "$dbpass");
	//mysqli_select_db($conn,$dbname) or die(error_log(sorry));   
	$con = mysqli_connect("$dbhost","$dbuser", "$dbpass");
	mysqli_select_db($con,"paymentorder");
if(isset($_POST['ok'] ))
{
 //$id = $_POST['ID'];
 $firstname = $_POST['first name'];
 $lastname = $_POST['last name'];
 $Adress = $_POST['delivery adress'];
 $Phone = $_POST['phone'];
 //$ACCOUNTno = $_POST['account'];
 //$email = $_POST['email']; 

if($firstname=='')
 {
 	echo "<script>alert('please enter the FNAME') </script>";
 	exit();
 }
 if($lastname =='')
 {
 	echo "<script>alert('please enter the LNAME') </script>";
 	exit();
 }
  if($Adress=='')
 {
 	echo "<script>alert('please enter the ADRESS') </script>";
 	exit();
 if($Phone=='')
 {
 	echo "<script>alert('please enter the PHONE') </script>";
 	exit();
 }

 }
 /*if($ACCOUNTno=='')
 {
 	echo "<script>alert('please enter the ACCOUNTNO') </script>";
 	exit();
 }
// if($email=='')
 //{
 	//echo "<script>alert('please enter the EMAIL') </script>";
 	//exit();
 //}

else{*/
 $query = "insert into pay (first name,last name,delivery adress,phone)values (,'$firstname','$lastname',
 '$Adress','$Phone')" ;

 if(mysqli_query($query)){
 	echo "<h3> on line payment succesful </h3>";
 //}
}
}
?> 