<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_CSS_PATH; ?>normalize.css">
    <link rel="stylesheet" href="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_CSS_PATH; ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_CSS_PATH; ?>font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_CSS_PATH; ?>themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_CSS_PATH; ?>flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_CSS_PATH; ?>cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_CSS_PATH; ?>bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_CSS_PATH; ?>style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_IMG_PATH; ?>logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action = "" method="post">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="">
							<span id="email_err" class="error"></span>
						</div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="">
							<span id="pwd_err" class="error"></span>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" value="1"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" name="login"  class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                       
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_JS_PATH; ?>vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_JS_PATH; ?>popper.min.js"></script>
    <script src="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_JS_PATH; ?>plugins.js"></script>
    <script src="<?php echo base_url();?><?php echo ADMIN_ASSETS_PATH;?><?php echo ADMIN_JS_PATH; ?>main.js"></script>


</body>
</html>