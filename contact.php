<?php
include 'connect.php';
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

	
	.login-form{
		width: 600px;
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
	.login-form h5
	{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.login-form h2:before, .login-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.login-form h2:before{
		left: 0;
	}
	.login-form h2:after{
		right: 0;
	}
    .login-form .hint-text{
		margin-bottom: 30px;
		text-align: center;
	}
    .login-form form{
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 5px;
    }
	.login-form .form-group{
		margin-bottom: 20px;
	}
	.login-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.login-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.login-form .row div:first-child{
		padding-right: 10px;
	}
	.login-form .row div:last-child{
		padding-left: 10px;
	}    	
    .login-form a{
		color: #fff;
		text-decoration: underline;
	}
    .login-form a:hover{
		text-decoration: none;
	}
	.login-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.login-form form a:hover{
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
								<a href="contact.html">Sign up</a>
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
<section>

<div class="login-form">

<form  method="post" action="" name="guest_New" enctype="multipart/form-data" class="form-horizontal">
<div class="card-body">
<div class="form-group row">
<label class="col-sm-4 col-form-label">First Name</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="first_name" name="first_name">
</div>
</div>
<div class="form-group row">
<label class="col-sm-4 col-form-label">Last Name</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="last_name" name="last_name">
</div>
</div>
<div class="form-group row">
<label class="col-sm-4 col-form-label">Email</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="email" name="email">
</div>
</div>
<div class="form-group row">
<label class="col-sm-4 col-form-label">User Name</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="user_name" name="user_name">
</div>
</div>
<div class="form-group row">
<label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="password"  name="password">
</div>
</div>

<div class="form-group row">
<label class="col-sm-4 col-form-label">DOB</label>
<div class="col-sm-4">
<div class="form-group">
<div class="input-group date" id="guest_date_of_birth" data-target-input="nearest">
<input type="text" id="date_of_birth" class="form-control datetimepicker-input" data-target="#guest_date_of_birth"/>
<div class="input-group-append" data-target="#guest_date_of_birth" data-toggle="datetimepicker">
<div class="input-group-text"><i class="fa fa-calendar"></i></div>
</div>
</div>
</div>
<script type="text/javascript">
$(function() {              
// Bootstrap DateTimePicker v4
$('#guest_date_of_birth').datetimepicker({
format: 'YYYY-MM-DD'
});
}); 
</script>
</div>
</div>
<div class="form-group row">	
<label for="inputPassword3" class="col-sm-4 col-form-label">Mobile</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="mobile" name="mobile">
</div>
</div>

<div class="form-group row">
<label class="col-sm-4 col-form-label">City</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="City" name="City">
</div>
</div>
<div class="form-group row">
<label for="inputPassword3" class="col-sm-4 col-form-label">Address</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="Address" name="Address">
</div>
</div>

<div class="form-group row">
<label class="col-sm-4 col-form-label">ID Type</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="id_type" name="id_type">
</div>
</div>
<div class="form-group row">
<label for="inputPassword3" class="col-sm-4 col-form-label">ID Number</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="id_number"  name="id_number">
</div>
</div>

<div class="form-group row">
<label class="col-sm-4 col-form-label">ID Upload</label>
<div class="col-sm-4">
<input type="file" >
</div>
</div>
</div>
<!-- /.card-body -->
<div class="card-footer">
<button type="button" class="btn btn-default" onclick="guest_main_back()">Cancel</button>
<button type="button" class="btn btn-info  float-right" onclick="guest_add()">Save</button>
</div>
<!-- /.card-footer -->
</form>


</div>
</section>
</div>


</div>
</div>


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
