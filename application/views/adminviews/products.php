<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DASHBOARD: Products</title>

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
				<h1 class='text-center text-warning'>PRODUCTS</h1>
			</div>
		</div>		
		<div class='row'>
			<div class='col-sm-6 col-sm-offset-0'>
				<form class='form-inline'>
					<input class='form-control' type='text'placeholder='search'/>
					<button class='btn btn-warning btn-sm'><i class='glyphicon glyphicon-search'></i></button>
				</form>
			</div>

<!-- need to update href so it goes to controller method to $this->load->view('/adminviews/add')  -->

			<div class='col-sm-2 col-sm-offset-3'>
				<a href='/admin/add_product'><button class='btn btn-warning btn-sm'>Add NEW Product</button></a>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-12 col-sm-offset-0'>
				<table class='table table-responsive table-bordered well'>
					<thead>
						<tr>
							<th class='text-center'>Picture</th>
							<th class='text-center'>ID</th>
							<th class='text-center'>Name</th>
							<th class='text-center'>Inventory Count</th>
							<th class='text-center'>Quantity sold</th>
							<th class='text-center'>ACTION</th>
						</tr>
					</thead>

<!-- need to update the 'edit' and 'delete' href='#' so it goes to controller method and pass the product id as parameter  -->

					<tbody class='text-center table-striped'>
<?php 					foreach($products as $value)
						{
?>						<?="<tr>
							<td><img src='../assets/images/{$value['image_name']}' alt='beerkit'></td>
							<td>{$value['id']}</td>
							<td>{$value['name']}</td>
							<td>{$value['num_in_stock']}</td>
							<td>{$value['num_sold_prev_yr']}</td>
							<td><a href='/admin/edit/{$value['id']}'>edit</a> | <a href='/admin/delete/{$value['id']}'>delete</a></td>
						</tr>"?>
<?php					}
?>					</tbody>
				</table>
			</div>
		</div>

<!-- pagination not working and unsure on how to format this markup so it works -->

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





