<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>

	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<style>
	.container-fluid{
		background-image: url('../assets/images/adminlogcover.jpg');
		background-color: SaddleBrown;
		background-repeat: no-repeat;
		background-size: 100%;
		width: 100%;
		height: 50em;
	}
	h3{
		margin-top: 20%;
	}
	</style>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script>

	</script>
</head>
<body>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-7 col-md-offset-5 col-sm-7 col-sm-offset-5 
						col-xs-7 col-xs-offset-4'>
				<h3 class='text-warning'>Home Brew Beer Supplies</h3>
				<h4 class='text-warning'>Admin Login In</h4>
			</div>
		</div>
			<form class='form-horizontal' action='/admin/login' method='post'> 

				<div class='form-group'>
					<label for='loginemail' class='col-md-1 col-md-offset-4 col-sm-1 col-sm-offset-4 col-xs-2 col-xs-offset-1 control-label text-warning'>email:</label>
					<div class='col-md-4 col-sm-4 col-xs-6'>
						<input id='loginemail' class='form-control' type='text' name='adminemail'>
					</div>
				</div>
				<div class='form-group'>
					<label for='loginpassword' class='col-md-1 col-md-offset-4 col-sm-1 col-sm-offset-4 col-xs-2 col-xs-offset-1 control-label text-warning'>password:</label>
					<div class='col-md-4 col-sm-4 col-xs-6'>
						<input id='loginpassword' class='form-control' type='text' name='adminpassword'>
					</div>
				</div>
				<div class='form-group'>
					<div class='col-md-2 col-md-offset-7 col-sm-2 col-sm-offset-7 col-xs-6 col-xs-offset-3'>
						<button type='submit' class='btn btn-warning btn-sm btn-block pull-right'>Login</button>
					</div>
				</div>
			</form>
		<div class='row'>
			<div class='col-md-5 col-md-offset-5 col-sm-5 col-sm-offset-5 
						col-xs-7 col-xs-offset-4'>
				
<?php 			if(!$this->session->userdata('is_valid'))
				{
?>					<div class="alert alert-danger" role="alert">
						<h5 class='text-center'>Log In Error. Please enter an email and or password.</h5>					
					</div>
<?php				$this->session->set_userdata('is_valid', false);
				}
				if(!$this->session->userdata('admin_id'))
				{
?>					<div class="alert alert-danger" role="alert">
						<h5 class='text-center'>Log In Error. Invalid email and or password.</h5>	
					</div>
<?php 				
				}	
?>				</div>


			</div>
		</div>
	</div>

</body>
</html>





