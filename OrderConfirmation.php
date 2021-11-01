<?php

  // Start session; this has to appear before any HTML tag
  session_start();
  
?>

<!DOCTYPE html>
<html lang=en>
<!--==================================================================
//
// Web site: Boushra's Jewelry
// Web page: products page
// Description:
//   It is a website to sell jewelry and accessories.
//   In this page, take the customer information and the order information and send them to the server.
// 
//=================================================================-->

<head>
	<!-- title, page information, author name and descreption -->
	
	<title>Order Confirmation, V5</title>
	<meta charset="UTF-8">
	<meta name="author" content="Boushr Abdulmohsen"/>
	<meta name="description" content="Boushra's Jewelry"/>
	<meta name="keywords" content="HTML, Jewelry, Accessories">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- W3.CSS link -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
	
  
</head>

<body>
<!-- navigation tab in the header of the body -->
	<div class="navbar w3-bar">
		<a href="mainpage.html" class="w3-bar-item w3-button"><h3>Home </h3></a>
		<a href="productspage.html" class="w3-bar-item w3-button"><h3>Product </h3></a>
		<a href="orderpage.html" class="w3-bar-item w3-button"><h3>Order </h3></a>
	</div>

<?php

    // Show echo method
	echo "<table>";

	echo "<th>Order Detail</th>";

    echo '<tr>','<td>Name:</td>','<td>',$_POST["firstname"]," ", $_POST["lastname"],'</td>','</tr>';

    echo '<tr>','<td>Phone:</td>','<td>',$_POST["phonenumber"],'</td>','</tr>';

	echo '<tr>','<td>Email Address:</td>','<td>',$_POST["email"],'</td>','</tr>';

    echo '<tr>','<td>Product:</td>','<td>',$_POST["productlist"],'</td>','</tr>';

	echo '<tr>','<td>Quantity:</td>','<td>',$_POST["quantity"],'</td>','</tr>';

	echo '<tr>','<td>Delivery Method:</td>','<td>',$_POST["shipping"],'</td>','</tr>';

	echo '<tr>','<td>Shipping Address:</td>','<td>',$_POST["address"],'</td>','</tr>';

	echo "</table>";

  ?>
  

  
</body>

</html>