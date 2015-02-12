<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Product</title>

	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<style>
	.container-fluid{
		background-image: url('../assets/images/beerbubblecover.jpg');
		background-color: Gold;
		background-repeat: no-repeat;
		background-size: cover;
	}
	textarea, ul{
		width: 100%;
	}
	img{
		width: 25%;
	}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script>
		$on(document).ready{(
			$('.dropdown-toggle').dropdown();
		});

	</script>
</head>
<body>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-sm-4 col-sm-offset-2 col-xs-8'>
				<h3>Add Product</h3>
			</div>
			<div class='col-sm-1 col-sm-offset-3 col-xs-2 col-xs-offset-2'>
				<h3><button class="btn btn-default"><span class='glyphicon glyphicon-remove'></span></button></h3>
			</div>
		</div>

<!-- 		need to update form action='?' to the actional admin method link -->

		<form class='form-horizontal well' action='/admin/create_product' method='post'>
			<div class='form-group'>
				<label for='productname' class='col-sm-2 col-sm-offset-2 control-label'>Name</label>
				<div class='col-sm-5'>
					<input type='text' class='form-control' id='productname' name='productname'/>
				</div>
			</div>
			<div class='form-group'>
				<label for='productdesc' class='col-sm-2 col-sm-offset-2 control-label'>Description</label>
				<div class='col-sm-5'>
					<textarea name='productdesc' class='formcontrol' rows='8'>dry hopping, ester dunkle, finishing hops brewpub filter; hard cider. dry hopping-- lauter hydrometer heat exchanger final gravity lager hydrometer; lambic. beer rims, berliner weisse, ester dry stout. alpha acid wort chiller pitch krausen bock</textarea>
				</div>
			</div>
			<div class='form-group'>
				<label for='productdesc' class='col-sm-2 col-sm-offset-2 control-label'>Categories</label>
				<div class='btn-group col-sm-5'>
					<button type='button' class='btn btn-default dropdown-toggle btn-block'
							data-toggle='dropdown' aria-expanded='false'>
							Categories <span class='caret'></span>
					</button>
					<ul class='dropdown-menu' role='menu'>
						<li>
							<a href='#'>Kits
							<span class='glyphicon glyphicon-trash pull-right'></span>
							<span class='glyphicon glyphicon-pencil pull-right'>&nbsp</span>
							</a>
						</li>
						<li>
							<a href='#'>Equipment
							<span class='glyphicon glyphicon-trash pull-right'></span>
							<span class='glyphicon glyphicon-pencil pull-right'>&nbsp</span>
							</a>
						</li>
						<li>
							<a href='#'>Ingredients
							<span class='glyphicon glyphicon-trash pull-right'></span>
							<span class='glyphicon glyphicon-pencil pull-right'>&nbsp</span>
							</a>
						</li>
						<li>
							<a href='#'>Bottling
							<span class='glyphicon glyphicon-trash pull-right'></span>
							<span class='glyphicon glyphicon-pencil pull-right'>&nbsp</span>
							</a>
						</li>
						<li>
							<a href='#'>Apparel
							<span class='glyphicon glyphicon-trash pull-right'></span>
							<span class='glyphicon glyphicon-pencil pull-right'>&nbsp</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class='form-group'>
				<label for='newcategory' class='col-sm-3 col-sm-offset-1 control-label'>
					or add new category
				</label>
				<div class='col-sm-5'>
					<input type='text' class='form-control' id='newcategory' name='newcategory'/>
				</div>
			</div>
			<div class='form-group'>
				<label for='uploadimage' class='col-sm-3 col-sm-offset-1 control-label'>
					Images
				</label>
				<div class='col-sm-5'>
					<input type='file' class='form-control' id='uploadimage' name='uploadimage' value='Upload'/>
				</div>
			</div>
			<div class='form-group'>
				<div class='col-sm-5 col-sm-offset-4'>
					<table class='table table-hover table-condensed table-reponsive'>
						<tbody class='text-center '>
							<tr>
								<td><img src="../assets/images/beer5.jpg" alt="beerkit"></td>
								<td>filename.jpg</td>
								<td><a href='#'><span class='glyphicon glyphicon-trash pull-right'></span></td>
								<td><input type='checkbox' name='main'></td>
								<td>main</td>
							</tr>
							<tr>
								<td><img src="../assets/images/beer5.jpg" alt="beerkit"></td>
								<td>filename.jpg</td>
								<td><a href='#'><span class='glyphicon glyphicon-trash pull-right'></span></td>
								<td><input type='checkbox' name='main'></td>
								<td>main</td>
							</tr>
							<tr>
								<td><img src="../assets/images/beer5.jpg" alt="beerkit"></td>
								<td>filename.jpg</td>
								<td><a href='#'><span class='glyphicon glyphicon-trash pull-right'></span></td>
								<td><input type='checkbox' name='main'></td>
								<td>main</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class='form-group'>
				<div class='col-sm-6 col-sm-offset-4 col-xs-6 col-xs-offset-2'>
					<a href='#' class='btn btn-warning btn-lg'>Cancel</a>
					<input type='submit' href='#' class='btn btn-success btn-lg' name='preview' value='Preview'/>
					<input type='submit' href='#' class='btn btn-primary btn-lg' name='preview' value='Create'/>
				</div>
			</div>
		</form>
	</div>
</body>
</html>











