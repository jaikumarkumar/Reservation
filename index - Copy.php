<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>my webpage</title>
<style>
*{
	margin:0;
}
.wrap{
	width:100%;             
	margin:auto;
	background:#ddd;
}
.header{
	height:25px;
	background:#000;
}
.navbar{
	height:50px;
	background:white;
}

</style>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrap">
<div class="header">
</div>
<div>
<nav class="navbar navbar-expand-sm">
<!-- Brand/logo -->
<a class="navbar-brand" href="#">
<img src="bird.jpg" alt="logo" style="width:40px;">
</a>

<!-- Links -->
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="#">Link 1</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Link 2</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Link 3</a>
</li>
<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
</ul>
</nav>
</div>

<div class="container-fluid">
<div>
<section>
        <div class="swiper-form-wrap">
          <!-- Swiper-->
          <div class="container container-bigger form-request-wrap form-request-wrap-modern">
            <div class="row row-fix justify-content-sm-center justify-content-lg-end">
              <div class="col-lg-5 col-xxl-5">
                <div class="form-request form-request-modern">
				<h4>MAKE RESERVATION</h4>
				<!-- RD Mailform-->
				<form method="get">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 15px;">
				<tbody>
				<tr>
				<td>
				<select class="browser-default custom-select" onchange="booking_type_main(this.value)">
				<option value="1">Room Booking</option>
				<option value="2">Hall Booking</option>
				</select>
				</td>
				</tr>
				<tr><td><input class="form-control" type="text" placeholder="CHECK IN"></td></tr>
				<tr><td><input class="form-control" type="text" placeholder="CHECK OUT"></td></tr>
				<tr><td><input class="form-control" type="text" placeholder="ADULTS"></td></tr>
				<tr><td><input class="form-control" type="text" placeholder="CHILDS"></td></tr>
				<tr><td><input class="btn btn-primary" type="button" value="Search"></td></tr>
				</tbody>
				</table>
				</form>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>
<div id="Rooms">
<center><h3>WELCOME TO BEST HOTEL</h3></center>
</div>
</div>
</div>
</div>
</body>
</html>