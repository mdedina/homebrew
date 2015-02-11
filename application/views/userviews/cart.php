<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Category</title>

	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<style>
	.well{
		margin-top: 2%;
	}
	#quantity{
		width: 2em;
	}
	</style>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script>

	</script>
</head>
<body>
	<nav class='navbar navbar-default'>
		<div class='container'>

<!-- need to update home link and cart link with user controler method -->

			<a class='navbar-brand' href'/user/index'>Home Brew Beer Supplies</a>
			<p class='navbar-text navbar-right'><a href='/user/cart' class='navbar-link navbar-right'>Shopping Cart <span class='badge'>#</span></a></p>
		</div>
	</nav>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12'>			
				<table class='table table-striped table-bordered'>
					<thead>
						<tr>
							<td class='text-center'>Item</td>
							<td class='text-center'>Price</td>
							<td class='text-center'>Quanity</td>
							<td class='text-center'></td>
							<td class='text-center'>Total</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Brew Kit</td>
							<td class='text-center'>$50.00</td>
							

<!-- need to update form action with method to update cart product quantity -->

							<td class='text-center'>
								<form action='/user/update_cart' method='post'>
									<input type='hidden' name='cart_id' value='cart_id'/>
									<input type='hidden' name='product_id' value='product_id'/>
									<input type='text' id='quantity' name='quantity' value='1' />
									<input type='submit' class='btn btn-link' value='update'/>
								</form>
							</td>

<!-- need to update form action with method to delete a product from cart -->
<!-- unsure how to code markup to delete a product from a cart with trash can icon href link -->

							<td class='text-center'>
								<form action='/user/delete_cartitem' method='post'>
									<input type='hidden' name='cart_id' value='cart_id'/>
									<input type='hidden' name='product_id' value='product_id'/>
									<input type='submit' class='btn btn-link' value='delete'/>
								</form>
							</td>
							<td class='text-center'>$50</td>
						</tr>
						<tr>
							<td>Brew Ingriedients</td>
							<td class='text-center'>$20.00</td>
							<td class='text-center'>2 &nbsp<a href='#'>update</a></td>
							<td class='text-center'> <a class='glyphicon glyphicon-trash'></a></td>
							<td class='text-center'>$40</td>
						</tr>
						<tr>
							<td>Brew Kit</td>
							<td class='text-center'>$50.00</td>
							<td class='text-center'>1 &nbsp<a href='#'>update</a><a class='glyphicon glyphicon-trash pull-right'></a></td>
							<td class='text-center'>$50</td>
						</tr>
						<tr>
							<td>Brew Ingriedients</td>
							<td class='text-center'>$20.00</td>
							<td class='text-center'>2 &nbsp<a href='#'>update</a><a class='glyphicon glyphicon-trash pull-right'></a></td>
							<td class='text-center'>$40</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-3 col-sm-offset-8'>				
				<h4 class='text-right'>Total: $180.00</h4>			
				<a hreff='#' class='btn btn-info btn-xs pull-right'>Continue Shopping</a>
			</div>
		</div>
		<div class='row well'>

<!-- need to update order form class action='#' so it goes to the user/order method -->

			<form class='form-horizontal' action='/user/order' method='post'>
				<input type='hidden' name='cartid' value='cartid#'>
				<div class='col-sm-6'>
					<div class='col-sm-8 col-sm-offset-4'>
						<h3 class='text-warning'>
							Customer Info
						</h3>
					</div>				
					<div class='form-group'>
						<label for='firstname' class='col-sm-4 control-label'>
							email:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='email'>
						</div>
					</div>
					<div class='form-group'>
						<label for='email' class='col-sm-4 control-label'>
							password:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='password'>
						</div>
					</div>
					<div class='form-group'>
						<label for='email' class='col-sm-4 control-label'>
							confirm password:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='confpass'>
						</div>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class='col-sm-8 col-sm-offset-4'>
						<h3 class='text-warning'>
							Payment
						</h3>
					</div>	
					<div class='form-group'>
						<label for='creditcard' class='col-sm-4 control-label'>
							Credit Card Num:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='creditcard'>
						</div>
					</div>
					<div class='form-group'>
						<label for='seccode' class='col-sm-4 control-label'>
							Security Code:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='code'>
						</div>
					</div>
					<div class='form-group'>
						<label for='expdate' class='col-sm-4 control-label'>
							Exp. Date:
						</label>
						<div class='col-sm-4'>
							<input type='text' class='form-control' name='month' placeholder='mm'>
						</div>
						<div class='col-sm-4'>
							<input type='text' class='form-control' name='year' placeholder='year'>
						</div>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class='col-sm-8 col-sm-offset-4'>
						<h3 class='text-warning'>
							Shipping Address
						</h3>
					</div>
					<div class='form-group'>
							<label for='firstname' class='col-sm-4 control-label'>
								First Name:
							</label>
							<div class='col-sm-8'>
								<input type='text' class='form-control' name='firstname'>
							</div>
						</div>
						<div class='form-group'>
							<label for='lastname' class='col-sm-4 control-label'>
								Last Name:
							</label>
							<div class='col-sm-8'>
								<input type='text' class='form-control' name='lastname'>
							</div>
						</div>
					<div class='form-group'>
						<label for='address' class='col-sm-4 control-label'>
							street:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='street'>
						</div>
					</div>
					<div class='form-group'>
						<label for='address2' class='col-sm-4 control-label'>
							Suite/Apt#:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='address2'>
						</div>
					</div>
					<div class='form-group'>
						<label for='city' class='col-sm-4 control-label'>
							City:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='city'>
						</div>
					</div>
					<div class='form-group'>
						<label for='state' class='col-sm-4 control-label'>
							State:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='state'>
						</div>
					</div>
					<div class='form-group'>
						<label for='zipcode' class='col-sm-4 control-label'>
							Zip Code:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='zipcode'>
						</div>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class='col-sm-8 col-sm-offset-4'>
						<h3 class='text-warning'>
							Payment Info
						</h3>
					</div>	
					<div class='form-group'>
						<label for='address' class='col-sm-4 control-label'>
							Same as Shipping:
						</label>
						<div class='col-sm-8'>
							<input type='checkbox' class='form-control' name='same'>
						</div>
					</div>
					<div class='form-group'>
						<label for='firstname' class='col-sm-4 control-label'>
							First Name:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='firstname'>
						</div>
					</div>
					<div class='form-group'>
						<label for='lastname' class='col-sm-4 control-label'>
							Last Name:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='lastname'>
						</div>
					</div>				
					<div class='form-group'>
						<label for='address' class='col-sm-4 control-label'>
							Street Address:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='address'>
						</div>
					</div>
					<div class='form-group'>
						<label for='city' class='col-sm-4 control-label'>
							City:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='city'>
						</div>
					</div>
					<div class='form-group'>
						<label for='state' class='col-sm-4 control-label'>
							State:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='state'>
						</div>
					</div>
					<div class='form-group'>
						<label for='zipcode' class='col-sm-4 control-label'>
							Zip Code:
						</label>
						<div class='col-sm-8'>
							<input type='text' class='form-control' name='zipcode'>
						</div>
					</div>
				</div>
				<div class='col-sm-2 col-sm-offset-10'>
					<input class='btn btn-success btn-block' type='submit' value='Pay'>
				</div>
			</form>
		</div>





	</div>
</body>
</html>





















