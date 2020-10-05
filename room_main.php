<?php
include 'connect.php';

echo $type_of=$_REQUEST['type_of'];

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
								<a href="index.html">Home</a>
							</li>

							<li class="sale-noti">
								<a href="product.html">Rooms</a>
							</li>

							<li>
								<a href="cart.html">Gallery</a>
							</li>
							
							<li>
								<a href="product.html">About us</a>
							</li>
							
							<li>
								<a href="about.html">Login</a>
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
	<style>
	.header1{
		height:0px;
	}
	.room_main{
		width:100%;
		height:100%;
		
	}
	.room_main h3
	{
		color: Blue;
		margin: 60px 25px 20px;
		position: relative;
		text-align: right;
	}
	.room_main form
	{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}
	</style>
	<div  class="room_main">
	<div class="sec-title">
	<h3 class="m-text5 t-center">
	Rooms & Rates
	</h3>
	</div>
	<form>
	<section class="newproduct bgwhite p-l-45 p-t-45 p-b-105 p-r-45">
			
			<div class="wrap-slick2">
				<div class="slick2">
			<?php
			$sql=$con->query("SELECT id,tittle, code,base_price, picture, status FROM masters_room_type where status=1");
			while($req = $sql->fetch(PDO::FETCH_ASSOC))
			{
			?>
			

				<div class="item-slick2 p-l-15 p-r-15">
				<!-- Block2 -->
				<div class="block2">
				<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
				<img src="<?php echo $req['picture']; ?>" alt="IMG-PRODUCT">				
				</div>

				<div class="block2-txt p-t-20">
				<a href="" class="block2-name dis-block s-text3 p-b-5">
				<h4><?php echo $req['tittle']; ?></h4>
				</a>
				<span class="block2-price m-text6 p-r-5">
				<?php echo 'Rs. '.$req['base_price']; ?>
				</span>
				</div>
				<div class="block2-txt p-t-20">
				<input type="button" class="btn btn-success" value="Book" onclick="booking(<?php echo $req['id']; ?>)">
				</div>
				</div>
				</div>						
				
			<?php
			}
			?>
			</div>
			</div>
	</section>
	</form>
	</div>


	

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
	<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
	</div>





<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	<script type="text/javascript">
	function booking(v)
	{
		alert(v);
		var type_of=$("#type_of").val();
		$.ajax({
			type:"GET",
				url:'/Reservation/room_booking/room_main.php?type_of='+type_of,
				success:function(data){
				$(".animsition").html(data);
				}	
		})
	
	}
	
	</script>

</body>
</html>

