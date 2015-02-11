<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DASHBOARD: Orders</title>

	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<style>
	.container-fluid{
		background-image: url('../assets/images/beerbubblecover.jpg');
		background-color: Gold;
		background-repeat: no-repeat;
		background-size: 100%;
		width: 100%;
		height: 50em;
	}
	.table {
		margin-top: 2%;
	}
	img{
		height: 25%;
	}
	</style>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script>

	</script>
</head>
<body>
	<nav class='navbar navbar-inverse'>
		<div class='container'>
			<a class='navbar-brand' href'#'>DASHBOARD: <small>Home Brew Beer Supplies</small></a>
			<p class='navbar-text'>| <a href='#' class='navbar-link'>Orders </a> |</p>
			<p class='navbar-text'>| <a href='/admin/products' class='navbar-link'> Products</a> |</p>
			<p class='navbar-text navbar-right'><a href='#' class='navbar-link navbar-right'>log off&nbsp</a></p>
		</div>
	</nav>
	<div class='container-fluid'>
		<div class='row well'>
			<div class='col-sm-3 col-sm-offset-1 well'>
				<h4>Order ID: #</h4>
				
				<ul class='list-unstyled well well-sm'>
					<li><h5>Customer Shipping Info:</h5></li>
					<li>Name: firstname last name</li>
					<li>Address: street</li>
					<li>City: city</li>
					<li>State: state</li>
					<li>Zip: zipcode</li>
				</ul>
				
				<ul class='list-unstyled well well-sm'>
					<li><h5>Customer Payment Info:</h5></li>
					<li>Name: firstname last name</li>
					<li>Address: street</li>
					<li>City: city</li>
					<li>State: state</li>
					<li>Zip: zipcode</li>
				</ul>
			</div>
			<div class='col-sm-6 col-sm-offset-0'>
				<table class='table table-bordered table-striped'>
					<thead>
						<tr>
							<td>Product ID</td>
							<td>Product Name</td>
							<td>Price</td>
							<td>Quantity</td>
							<td>Total</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Beer Kit</td>
							<td>$40</td>
							<td>1</td>
							<td>$40</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Ingredients</td>
							<td>$10</td>
							<td>3</td>
							<td>$30</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Ingredients</td>
							<td>$10</td>
							<td>3</td>
							<td>$30</td>
						</tr>
					</tbody>
				</table>
				<div class='col-sm-6'>
					<div class='alert alert-success' role='alert'>
						<p class='text-center'>Order Status: Shipped</p>
					</div>
					<div class='alert alert-warning' role='alert'>
						<p class='text-center'>Order Status: In Process</p>
					</div>
					<div class='alert alert-danger' role='alert'>
						<p class='text-center'>Order Status: Cancelled</p>
					</div>
				</div>
				<div class='col-sm-5 col-sm-offset-1 well well-sm'>
					<h4 class='text-right'>Sub total: $100.00</h4>
					<h4 class='text-right'>Shipping: $10.00</h4>
					<h4 class='text-right'>Total Price: $110.00</h4>
				</div>
			</div>

		</div>
	</div>
</body>
</html>



		