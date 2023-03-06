
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo CSS_PATH;?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo CSS_PATH;?>font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo CSS_PATH;?>prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo CSS_PATH;?>price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo CSS_PATH;?>animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo CSS_PATH;?>main.css" rel="stylesheet">
	<link href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo CSS_PATH;?>responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo JS_PATH;?>html5shiv.js"></script>
    <script src="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo JS_PATH;?>respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo IMG_PATH;?>ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo IMG_PATH;?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo IMG_PATH;?>ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo IMG_PATH;?>ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo IMG_PATH;?>ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<!--header-->
	<?php $this->view('includes/header_view'); ?>
<!--/header-->	
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<p style="color:red"><?php if(isset($msg_login)){echo $msg_login;}?></p>
						<form action="<?php echo base_url();?>index.php/user_controller/login_chk" method="post">
							<?php echo form_error('login_email') ?>
							<input type="text" placeholder="Email" name="login_email" value="<?php echo set_value('login_email');?>"/>
							<?php echo form_error('login_password') ?>
							<input type="password" placeholder="Password" name="login_password" value="<?php echo set_value('login_password');?>"/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" name="login" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<p style="color:green"><?php echo $msg;?></p>
						<form action="<?php echo base_url();?>index.php/user_controller/register_now" method="post">
							<?php echo form_error('uname') ?>
							<input type="text" name="uname" value="<?php echo set_value('uname');?>" placeholder="Name"/> 
							<?php echo form_error('uemail') ?>
							<input type="text" name="uemail" value="<?php echo set_value('uemail');?>" placeholder="Email Address"/>
							<?php echo form_error('umobile') ?>
							<input type="text" name="umobile" value="<?php echo set_value('umobile');?>" placeholder="Mobile"/>
							<?php echo form_error('upassword') ?>
							<input type="password" name="upassword" placeholder="Password"/>
							<button type="submit" name="register" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<!--Footer-->
	<?php $this->view('includes/footer_view'); ?>
<!--/Footer-->
  
    <script src="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo JS_PATH;?>jquery.js"></script>
	<script src="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo JS_PATH;?>price-range.js"></script>
    <script src="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo JS_PATH;?>jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo JS_PATH;?>bootstrap.min.js"></script>
    <script src="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo JS_PATH;?>jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?><?php echo ASSETS_PATH;?><?php echo JS_PATH;?>main.js"></script>
</body>
</html>