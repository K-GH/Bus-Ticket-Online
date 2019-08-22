<?php
    include "login_system.php";
?>


<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.themespond.com/suiren/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2016 20:43:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>BUS - K-GH</title>
    <link href="https://fonts.googleapis.com/css?family=Patua+One%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRoboto+Slab:100,300,400,700Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendors/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vendors/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendors/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/vendors/owl.theme.green.min.css">
    <link rel="stylesheet" href="assets/css/vendors/animate.min.css">
    <link rel="stylesheet" href="assets/css/vendors/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/common/main.css">
</head>
<body>
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="tsp-main">
    <header>
    <!--start header top bar-->
        <div class="tsp-header-bar hidden-xs hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="top-content">
                        <div class="tsp-account">
                            <a href="login.php">Log in <i class="fa fa-angle-down"></i></a>
                            <div class="tsp-list-lang">
                                <ul>
                                    <li><a href="login.php">Log In</a></li>
                                    <li><a href="register.php">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Row-->
            </div>
        </div>
    <!--end header top bar-->
    <!--start header main-->
        <div class="tsp-header-main">
            <div class="container">
                <div class="row">
                    <div class="tsp-logo col-md-3 col-sm-3 col-xs-3">
                        <a href="index-2.html">
                            <img src="images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div id="tsp_menu_cart_search" class="col-md-9 col-sm-9 col-xs-12">
                        <nav>
                            <ul id="menu">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li><a href="login.php">About</a></li>

                                <li>
                                    <a href="#">Feature</a>
                                    <ul>
                                        <li><a href="login.php">Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="login.php">Contact</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!--div nav cart search-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
    <!--End header main-->
</header>
<!--header-->
    <main>

        <section id="tsp_login_page" class="tsp-page-tpl">
	<div class="container">
		<div class="row">
			<div class="tsp-box-content tsp-page-acc">
				<div class="tsp-nav-register col-md-6 col-sm-6 col-xs-6 tsp-full-xs tsp-no-padding-left">
				    <div class="col-lg-offset-right-1 col-md-offset-right-1 col-sm-offset-right-0 col-xs-offset-right-0 tsp-content">
					    <h2>New customer</h2>
						<p>Join happy customers with us to be up-to-date on our recent offers and big deals.</p>
						<a href="register.php" class="tsp-btn-site">Register now</a>
				    </div><!-- div offset right -->
				</div>
				<div class="tsp-form-login col-md-6 col-sm-6 col-xs-6 tsp-full-xs tsp-no-padding-right">
					<div class="col-lg-offset-1 col-md-offset-1">
						<h2>LOGIN</h2>

						<form xad class="tsp-form-site" method="post">
							<div class="form-group">
								<input type="text" name="username" id="usernameInput" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="passwordInput" placeholder="Password">
							</div>
							<input type="submit" name="login_button" class="btn btn-warning btn-block" value="Login" disabled="disabled" id="loginButton">
						</form>
					</div><!-- div offset left -->
				</div>
			</div>
		</div><!-- div row -->
	</div>
</section>

    </main>
    <footer>
	<!--start footer main-->

	<!--end footer main-->
	<!--start footer bar-->
	<div class="tsp-footer-bar">
		<div class="container">
			<div class="row">
				<!--start box text copyright-->
				
				<!--End box text copyright-->
				<!--Start box give news-->

				<!--End box give news-->
				
			</div><!--row-->
		</div><!--container-->
	</div>
	<!--End footer bar-->
</footer>
</div>
<script src="assets/js/vendors/jquery.min.js"></script>
<script src="assets/js/vendors/modernizr.min.js"></script>
<script src="assets/js/vendors/bootstrap.min.js"></script>
<script src="assets/js/vendors/bootstrap-datepicker.min.js"></script>
<script src="assets/js/vendors/owl.carousel.min.js"></script>
<script src="assets/js/vendors/jquery.slicknav.min.js"></script>
<script src="assets/js/common.js"></script>

<script>
	$(document).ready(function(){		//second part
        $('#usernameInput, #passwordInput').keyup(function(){
            var username = $('#usernameInput').val();
            var password = $('#passwordInput').val();

            if(username != '' && password != '')
                $('#loginButton').removeAttr('disabled');
            else{
                $('#loginButton').attr('disabled', 'disable');
            }
        });
	});


     window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</body>

<!-- Mirrored from template.themespond.com/suiren/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2016 20:43:35 GMT -->
</html>