<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">


.signup-form{
	width: 450px;
	margin: 0 auto;
}

.form-control{
	height: 40px;
	box-shadow: none;
	color: #000000;
}
.form-control:focus{
	border-color: #5cb85c;
}
.form-control, .btn{        
	border-radius: 3px;
}
.signup-form h5
{
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after{
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before{
	left: 0;
}
.signup-form h2:after{
	right: 0;
}
.signup-form .hint-text{
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form{
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group{
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"]{
	margin-top: 3px;
}
.signup-form .btn{        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child{
	padding-right: 10px;
}
.signup-form .row div:last-child{
	padding-left: 10px;
}    	
.signup-form a{
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover{
	text-decoration: none;
}
.signup-form form a{
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover{
	text-decoration: underline;
}  
</style>	


</head>

<body class="animsition">

<!-- Header -->
<header class="header1">
<!-- Header desktop -->
<div class="container-menu-header">

<div class="wrap_header">
<!-- Logo -->
<a href="index.html" class="logo">
<img src="#" alt="IMG-LOGO">
</a>

<!-- Menu -->
<div class="wrap_menu">
<nav class="menu">
<ul class="main_menu">
<li>
<a href="index.php">Home</a>
</li>

<li>
<a href="cart.html">Gallery</a>
</li>

<li>
<a href="product.html">About us</a>
</li>

<li>
<a href="login.php">Log in</a>
</li>

<li>
<a href="contact.php">Sign up</a>
</li>
</ul>
</nav>
</div>
</div>
</div>
<!-- Menu Mobile -->
</header>

<div id="full_screen">
<div class="slide1">
<div class="wrap-slick1">
<div class="slick1">
<div class="item-slick1 item1-slick1" style="background-image: url(images/362619.jpg);">
<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
<section style="padding-left: 820px;">
<div class="signup-form">
<form method="GET">
<h5>RESERVATION</h5>
<div class="form-group">
<select class="form-control" id="type_of">
<option value="1">Room Booking</option>
<option value="2">Hall Booking</option>
</select>
</div>
<div class="form-group">
<input class="form-control" name="check_in" id="check_in" type="date" placeholder="CHECK IN">
</div>
<div class="form-group">
<input class="form-control" name="check_out" id="check_out"  type="date" placeholder="CHECK OUT">
</div> 
<div class="form-group">
<select class="form-control" name="adult"  id="adult">
<option value="0">ADULTS</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
</div>

<div class="form-group">
<select class="form-control" name="childs"  id="childs">
<option value="0">CHILDS</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
</div>     
<div class="form-group">
<input type="button" class="btn btn-success btn-lg btn-block" onclick="search()" value="Search">
</div>
</div>
</form>
</div>
</section>
</div>
</div>
</div>
<div class="newproduct bgwhite p-t-45 p-b-105">
<div class="sec-title p-b-60">
<h3 class="m-text5 t-center">
Welcome to Best Hotel
</h3>
</div>
<div class="wrap-slick2">
<div class="slick2">
<?php
$sql=$con->query("SELECT tittle, code,base_price, picture, status FROM masters_room_type where status=1");
while($req = $sql->fetch(PDO::FETCH_ASSOC))
{
?>
<div class="item-slick2 p-l-15 p-r-15">
<!-- Block2 -->
<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
<img src="<?php echo $req['picture']; ?>" alt="IMG-PRODUCT">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">
<!-- Button -->
<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
BOOK NOW
</button>
</div>
</div>
</div>
<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
<?php echo $req['tittle']; ?>
</a>
<span class="block2-price m-text6 p-r-5">
<?php echo 'Rs.'.$req['base_price']; ?>
</span>
</div>
</div>
</div>						

<?php
}
?>
</div>
</div>
<!-- Slide2 -->


</div>
<div class="newproduct bgwhite p-t-45 p-b-105">
<div class="sec-title p-b-60">
<h3 class="m-text5 t-center">
Welcome to Best Halls
</h3>
</div>
<div class="wrap-slick2">
<div class="slick2">



<?php
$sql=$con->query("SELECT tittle, code,base_price, picture, status FROM masters_halls_type where status=1");
while($req = $sql->fetch(PDO::FETCH_ASSOC))
{
?>


<div class="item-slick2 p-l-15 p-r-15">
<!-- Block2 -->
<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
<img src="<?php echo $req['picture']; ?>" alt="IMG-PRODUCT">

<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>

<div class="block2-btn-addcart w-size1 trans-0-4">
<!-- Button -->
<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
BOOK NOW
</button>
</div>
</div>
</div>

<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
<?php echo $req['tittle']; ?>
</a>

<span class="block2-price m-text6 p-r-5">
<?php echo 'Rs.'.$req['base_price']; ?>
</span>
</div>
</div>
</div>						

<?php
}
?>
</div>
</div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
<div class="t-center p-l-15 p-r-15">
<a href="#">
<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
</a>

<a href="#">
<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
</a>

<a href="#">
<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
</a>

<a href="#">
<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
</a>

<a href="#">
<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
</a>

<div class="t-center s-text8 p-t-20">
Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</div>
</div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
<span class="symbol-btn-back-to-top">
<i class="fa fa-angle-double-up" aria-hidden="true"></i>
</span>
</div>
</body>

<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<script type="text/javascript">
$(".selection-1").select2({
	minimumResultsForSearch: 20,
	dropdownParent: $('#dropDownSelect1')
});
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>

<!--===============================================================================================-->
<script src="js/main.js"></script>
<script type="text/javascript">
function search()
{

var type_of	= $("#type_of").val();
var check_in = $("#check_in").val();
var check_out = $("#check_out").val();
var adult = $("#adult").val();
var childs = $("#childs").val();
$.ajax({
type:"GET",
url:'/Reservation/room_booking/room_main.php?type_of='+type_of+'&check_in='+check_in+'&check_out='+check_out+'&adult='+adult+'&childs='+childs,
success:function(data){
	$("#full_screen").html(data);
}	
})

}

</script>
</html>
