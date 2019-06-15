<!DOCTYPE html>
<html>
<head>
	<title>Login | Adminstrator Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/prettyPhoto.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.min.css')?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/prefixfree.min.js');?>"></script>
<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome-4.4.0/css/font-awesome.min.css');?>">
<body style="background: #e8eaea;">
<div class="container">
	<img class="images-login" src="<?php echo base_url('assets/images/logo-edit.png');?>" />
	<?php
	if(isset($_SESSION["login_failed"])){
		?>
		<div class="alert-login">
			Login Failed
		</div>
		<?php
	}unset($_SESSION["login_failed"]);
	?>
	<div class="row text-center login-wrap">
		<?php echo form_open('proses/proseslogin');?>
		  <div class="form-group text-left">
		    <label for="email" class="label-form">Email address</label>
		    <input type="email" name="email" class="form-control" id="email">
		  </div>
		  <div class="form-group text-left">
		    <label for="pwd" class="label-form">Password</label>
		    <input type="password" name="password" class="form-control" id="pwd">
		  </div>
		  <input type="submit" class="btn btn-submit margin-top-10" value="SIGN IN" name="submit">
		</form>
	</div>
</div>
</body>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.12.1.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/html5shiv.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.isotope.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/script.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/core.js')?>"></script>
</html>