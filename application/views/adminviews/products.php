<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>

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
			<p class='navbar-text'>| <a href='#' class='navbar-link'> Products</a> |</p>
			<p class='navbar-text navbar-right'><a href='#' class='navbar-link navbar-right'>log off&nbsp</a></p>
		</div>
	</nav>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-sm-6 col-sm-offset-0'>
				<form class='form-inline'>
					<input class='form-control' type='text'placeholder='search'/>
					<button class='btn btn-warning btn-sm'><i class='glyphicon glyphicon-search'></i></button>
				</form>
			</div>
			<div class='col-sm-2 col-sm-offset-3'>
				<button class='btn btn-warning btn-sm'>Add NEW Product</button>
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
					<tbody class='text-center table-striped'>
						<tr>
							<td><img src="../assets/images/beer1.jpg" alt="beerkit"></td>
							<td>1</td>
							<td>Beer Kit</td>
							<td>10</td>
							<td>5</td>
							<td><a href='#'>edit</a> | <a href='#'>delete</a>
						</tr>
						<tr>
							<td><img src="../assets/images/beer2.jpg" alt="beerkit"></td>
							<td>2</td>
							<td>Beer Hall Waitress Poster</td>
							<td>10</td>
							<td>5</td>
							<td><a href='#'>edit</a> | <a href='#'>delete</a>
						</tr>
						<tr>
							<td><img src="../assets/images/beer3.jpg" alt="beerkit"></td>
							<td>3</td>
							<td>Beer Ingredients</td>
							<td>10</td>
							<td>5</td>
							<td><a href='#'>edit</a> | <a href='#'>delete</a>
						</tr>
						<tr>
							<td><img src="../assets/images/beer4.jpg" alt="beerkit"></td>
							<td>4</td>
							<td>Beer Pong Kit</td>
							<td>10</td>
							<td>5</td>
							<td><a href='#'>edit</a> | <a href='#'>delete</a>
						</tr>
						<tr>
							<td><img src="../assets/images/beer5.jpg" alt="beerkit"></td>
							<td>5</td>
							<td>Beer Brewing Kit</td>
							<td>10</td>
							<td>5</td>
							<td><a href='#'>edit</a> | <a href='#'>delete</a>
						</tr>
						<tr>
							<td><img src="../assets/images/beer6.jpg" alt="beerkit"></td>
							<td>6</td>
							<td>Beer Brewing Kit</td>
							<td>10</td>
							<td>5</td>
							<td><a href='#'>edit</a> | <a href='#'>delete</a>
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





