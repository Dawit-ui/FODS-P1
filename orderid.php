<!DOCTYPE html>
<html>
<head>
    <h1> <font color='black'>My kitchen restaurant </font></h1> 
    <link rel="stylesheet" type="text/css" href="css/style (2).css">
     <link rel="stylesheet" type = "text/css" href ="orderid.php">

    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css ">
</head>
<body background="delivery.jpg">
 <div class="container">
          <div class="jumbotron">
            <h2 class="text-center" style="color: green";> <span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h2>
          </div>
        </div>
        <br>

<h2 class="text-center"> Thank you for Ordering at MY KITCHEN!</h2></br><h2> The ordering process is now complete.</h2>

<?php 
  $num1 = rand(100,999); 
  $num2 = rand(100,999); 
  $num3 = rand(100,999);
  $number = $num1.$num2.$num3;
?>

<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;">
	<?php echo "$number"; ?> </span> </h3>
</div>
<form action="edit.php" method ="post">
	  <input type="submit" name="ok" value="ok">
	</form>
	
	

</body>
</html>>