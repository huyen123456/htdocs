<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<html lang="vi"/>
<title>Assignment</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>


<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>   
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>             
</head>
<body> 
    <!--top-header-->
    <div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-4 top-header-left">
                <div class="search-bar">
                <form name="timkiem" action="/php2/search.php" method="post">
                    <input type="text" name="user" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="" name="ok" >
                </form>                </div>
            </div>
            <div class="col-md-4 top-header-middle">
                <a href="index.html"><img src="/php2/images/logo-4.png" alt="" /></a>
            </div>
            <div class="col-md-4 top-header-right">
                <div class="cart box_1">
                        <a href="/php2/cart/">
                        <h3> <div class="total">
                            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                            <img src="/php2/images/cart-1.png" alt="" />
                        </a>
                        <div class="clearfix"> </div>
                    </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
    <!--bottom-header-->
    <div class="header-bottom">
        <div class="container">
            <div class="top-nav">
                <ul class="memenu skyblue"><li class="active"><a href="/php2/">HOME</a></li>
                    <li class="grid"><a href="/php2/gt.php">GIỚI THIỆU</a></li>
                    <li class="grid"><a href="/php2/lienhe.php">LIÊN HỆ</a></li>
                    <li class="grid"><a href="/php2/cart">GIỎ HÀNG</a></li>
                    <li class="grid"><a href="/php2/admin">ADMIN</a></li>
                    <li class="grid">
                    <?php
                    // Check if user is logged in and
                    // display appropriate account links
                    $account_url ='admin/account';
                    $logout_url = $account_url . '?action=logout';
                    if (isset($_SESSION['admin'])) :
                    ?>
                        <a href="<?php echo $logout_url; ?>">LOGOUT</a>
                    <?php else: ?>
                    <a href="<?php echo $account_url; ?>">LOGIN</a>
                    <?php endif; ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>


<?php include '/view/menu_lienhe.php'; ?>
<?php include '/view/lienhe.php'; ?>



    <div class="footer">

	</div>
	<!--end-footer-->
	<!--end-footer-text-->
	<div class="footer-text">
		<div class="container">
			<div class="footer-main">
				<p class="footer-class">© 2015 Designer by vubtph04031</a> </p>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>