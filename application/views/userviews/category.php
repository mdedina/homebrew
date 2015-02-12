<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Category</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<style>
	#search-input{
		width: 74%;
	}
	</style>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script>

	</script>
</head>
<body>
	<nav class='navbar navbar-default'>
		<div class='container'>
			<a class='navbar-brand' href'#'>Home Brew Beer Supplies</a>
			<p class='navbar-text navbar-right'><a href='#' class='navbar-link navbar-right'>Shopping Cart <span class='badge'>#</span></a></p>
		</div>
	</nav>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2 col-sm-3 col-xs-12'>

<!-- need to update user search form so it goes user controler method -->

				<form class='form-inline clearfix' action='user/search' method='post'>
					<input id='search-input' class='form-control input-sm' type='text' name='search' placeholder='product name'/>
					<button class='btn btn-default btn-sm pull-right' type='submit'><i class='glyphicon glyphicon-search'></i></button>
				</form>

<!-- need to update categories links so it goes user controler method-->

				<h4>Categories</h4>
				<ul class='nav nav-pills nav-stacked'>
					<li role='presentation'><a href='/user/category/id'>Brew Kits <span class='badge'> # </span></a></li>
					<li role='presentation'><a href='/user/category/id'>Ingredients <span class='badge'> # </span></a></li>
					<li role='presentation'><a href='/user/category/id'>Cookers <span class='badge'> # </span></a></li>
					<li role='presentation'><a href='/user/category/id'>Buckets <span class='badge'> # </span></a></li>
					<li role='presentation'><a href='/user/category/id'>Bottling <span class='badge'> # </span></a></li>
				</ul>
			</div>
			<div class='col-md-10 col-sm-9 col-xs-12 well well-sm'>
				<h2 class='pull-left'>Brewkits <small>(page #)</small></h2>
				<p class='text-right'><a href='#'>first</a> | <a href='#'>prev</a> | <span class='badge'>#</span> | <a href='#'>next</a></p>

<!-- need to update user sort form so it goes user controler method -->

				<form class='form-inline pull-right' action='/user/sort' method='post'>
					<label>Sorted by</label>
					<select class'form-control input-sm'>
						<option>Price</option>
						<option>Most Popular</option>
					</select>
				</form>

<!-- need to update product links so it goes to user controler method retreive-->

				<div class='row pull-left'>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/product_show/1">
						 	<div class="thumbnail">
     					 		<img src="../assets/images/beer1.jpg" alt="beerkit">
     					 		<h5 class='text-center'>Name of product</h5>
     						</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer2.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer3.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer4.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer5.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer6.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
				</div>
				<div class='row pull-left'>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
						 	<div class="thumbnail">
     					 		<img src="../assets/images/beer6.jpg" alt="beerkit">
     					 		<h5 class='text-center'>Name of product</h5>
     						</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer5.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer4.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer3.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer2.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer1.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
				</div>
				<div class='row pull-left'>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
						 	<div class="thumbnail">
     					 		<img src="../assets/images/beer1.jpg" alt="beerkit">
     					 		<h5 class='text-center'>Name of product</h5>
     						</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer2.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer3.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer4.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer5.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
					<div class='col-md-2 col-sm-4 col-xs-6'>
						 <a href="/user/retrieve/id">
							 <div class="thumbnail">
	     					 	<img src="../assets/images/beer6.jpg" alt="beerkit">
	     					 	<h5 class='text-center'>Name of product</h5>
	     					</div>
    					</a>
					</div>
				</div>

<!-- pagination not working and unuser what markup is needed to make it work -->

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

		</div>
	</div>



</body>
</html>