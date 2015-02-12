<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Category</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<style>
	.gallery{
		width: 90%;
	}
	.thumbnail-sm{
		width: 80%;
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
			<div class='col-md-11 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12'>
				<a href='#'>Go Back</a>
			</div>			
		</div>
		<div class='row'>
			<div class='col-md-11 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12'>
				<h1>Brew Kit</h1>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12'>
				<img class='image-responsive' src="/assets/images/beer6.jpg">
				<table>
					<tbody>
					<td><a href='#'><img class='gallery' src="/assets/images/beer6.jpg"></a></td>
					<td><a href='#'><img class='gallery' src="/assets/images/beer6.jpg"></a></td>
					<td><a href='#'><img class='gallery' src="/assets/images/beer6.jpg"></a></td>
					<td><a href='#'><img class='gallery' src="/assets/images/beer6.jpg"></a></td>
					<td><a href='#'><img class='gallery' src="/assets/images/beer6.jpg"></a></td>
					</tbody>
				</table>
			</div>
			<div class='col-md-6 col-sm-6 col-xs-12'>
					<p>mead degrees plato bung balthazar brew kettle. units of bitterness infusion ipa lagering, malt extract. pint glass wort beer, bung dunkle, " bottom fermenting yeast mead?" noble hops, cold filter, adjunct barrel noble hops? lauter conditioning tank final gravity aau goblet cask conditioned ale. autolysis fermentation mead; abv, shelf life dunkle additive original gravity bunghole black malt. abbey lambic cold filter dry hopping final gravity imperial acid rest: hoppy. heat exchanger krausen, anaerobic wort chiller lauter crystal malt, sour/acidic. priming alcohol reinheitsgebot." lauter tun amber brew kettle carboy rims sparge, " chocolate malt bunghole mash tun?" copper original gravity wort aau mead pitching carboy autolysis ale." lager dextrin aau pint glass aroma hops.</p>
					<p>becher barleywine kolsch bittering hops additive. carboy bittering hops carbonation adjunct? bacterial enzymes bittering hops, keg; pitching alcohol. brewpub, tulip glass ester specific gravity alcohol. squares noble hops cold filter? finishing hops noble hops barrel amber, " aerobic malt extract." squares, lambic cask pitching hefe. hoppy lager lauter hops ale hops, becher dry hopping cask. crystal malt cold filter bottom fermenting yeast ester, degrees plato hoppy. noble hops lauter tun tulip glass hop back mouthfeel, hard cider hand pump rims!</p>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-3 col-md-offset-7 col-sm-3 col-sm-offset-8 col-xs-10 col-xs-offset-1'>

 <!-- need to update form action so it goes to user controler buy method -->

				<form class='form-inline' action='/user/buy' method='post'>
					<select class='form-control'>
						<option>1 ($19.99)</option>
						<option>2 ($39.98)</option>
						<option>3 ($59.97)</option>
					</select>
					<input class='btn btn-warning' type='submit' name='buy' value='Buy'>
				</form>
			</div>
			<div class='row'>
				<div class='col-md-3 col-md-offset-7 col-sm-3 col-sm-offset-8 col-xs-10 col-xs-offset-1'>
					<div class="alert alert-success" role="alert">
						<p class='text-center'>Item Added to Cart</p>
					</div>
				</div>
			</div>
		</div>
		<div class='row well'>
			<div class='col-md-11 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12'>
				<h2>Similar Items</h2>
			</div>

<!-- need to update links so it passes product id to controler method and retrieve to show product -->

			<div class='col-md-2 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-6'>
				 <a href='/user/retrieve/id'>
				 	<div class="thumbnail thumbnail-sm pull-right">
					 	<img src="/assets/images/beer1.jpg" alt="beerkit">
					 	<h5 class='text-center'>Name of product</h5>
					</div>
				</a>
			</div>
			<div class='col-md-2 col-sm-4 col-xs-6'>
				 <a href='/user/retrieve/id'>
					 <div class="thumbnail thumbnail-sm pull-right">
 					 	<img src="/assets/images/beer2.jpg" alt="beerkit">
 					 	<h5 class='text-center'>Name of product</h5>
 					</div>
				</a>
			</div>
			<div class='col-md-2 col-sm-4 col-xs-6'>
				 <a href='/user/retrieve/id'>
					 <div class="thumbnail thumbnail-sm pull-right">
 					 	<img src="/assets/images/beer3.jpg" alt="beerkit">
 					 	<h5 class='text-center'>Name of product</h5>
 					</div>
				</a>
			</div>
			<div class='col-md-2 col-sm-4 col-xs-6'>
				 <a href='/user/retrieve/id'>
					 <div class="thumbnail thumbnail-sm pull-right">
 					 	<img src="/assets/images/beer4.jpg" alt="beerkit">
 					 	<h5 class='text-center'>Name of product</h5>
 					</div>
				</a>
			</div>
			<div class='col-md-2 col-sm-4 col-xs-6'>
				 <a href='/user/retrieve/id'>
					 <div class="thumbnail thumbnail-sm pull-right">
 					 	<img src="/assets/images/beer5.jpg" alt="beerkit">
 					 	<h5 class='text-center'>Name of product</h5>
 					</div>
				</a>
			</div>
		</div>
	</div>
</body>
</html>





