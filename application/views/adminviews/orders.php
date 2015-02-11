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
		<div class='row'>
			<div class='col-sm-12'>
				<h1 class='text-center text-warning'>ORDERS</h1>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-9 col-sm-offset-0'>

<!-- need to update the search form with the actual action='#' admin controller method -->

				<form class='form-inline' action='/admin/search' method='post'>
					<input class='form-control' type='text'placeholder='search'/>
					<button class='btn btn-warning btn-sm'><i class='glyphicon glyphicon-search'></i></button>
				</form>				
			</div>
			<div class='col-sm-2 col-sm-offset-0'>

<!-- need to update the order sort form with the actual action='#' admin controller method -->

				<form action='/admin/search' method='post'>
					<select class='form-control'>
						<option>Show All</option>
						<option>Order in Process</option>
						<option>Shipped</option>
					</select>
				</form>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-12 col-sm-offset-0'>
				<table class='table table-responsive table-bordered well'>
					<thead>
						<tr>
							<th class='text-center'>Order ID</th>
							<th class='text-center'>Name</th>
							<th class='text-center'>Order Date</th>
							<th class='text-center'>Billing Address</th>
							<th class='text-center'>Total</th>
							<th class='text-center'>Status</th>
						</tr>
					</thead>
					<tbody class='text-center table-striped'>
						<tr>
							<td><a class='btn btn-warning' href='#'>###</a></td>
							<td>firstname lastname</td>
							<td>date</td>
							<td>payment address</td>
							<td>$1000</td>
							<td>

<!-- need to update the order status form with the actual action='#' admin controller method -->
<!-- this repeating form does not have a submit button so needs to work with ajax -->

								<form action='/admin/orderstatus' method='post'>
									<select class='form-control'>
										<option>Order in Process</option>
										<option>Shipped</option>
										<option>Cancelled</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td><a class='btn btn-warning' href='#'>###</a></td>
							<td>firstname lastname</td>
							<td>date</td>
							<td>payment address</td>
							<td>$1000</td>
							<td>
								<form action='#' method='post'>
									<select class='form-control'>
										<option>Order in Process</option>
										<option>Shipped</option>
										<option>Cancelled</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td><a class='btn btn-warning' href='#'>###</a></td>
							<td>firstname lastname</td>
							<td>date</td>
							<td>payment address</td>
							<td>$1000</td>
							<td>
								<form action='#' method='post'>
									<select class='form-control'>
										<option>Order in Process</option>
										<option>Shipped</option>
										<option>Cancelled</option>
									</select>
								</form>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class='row text-center'>
			<div class='col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2'>
				<ul class='pagination pagination-sm'>
					<li><a href='#' aria-label='Previous'>
						<span aria-hidden='true'>&laquo;</span>
						</a>
					</li>
					<li><a href='#'>1</a></li>
					<li><a href='#'>2</a></li>
					<li><a href='#'>3</a></li>
					<li><a href='#'>4</a></li>
					<li><a href='#'>5</a></li>
					<li><a href='#' aria-label='Next'>
						<span aria-hidden='true'>&raquo;</span>
						</a>
					</li>
				</ul>
			</div>
		</div>


	</div>
</body>
</html>





