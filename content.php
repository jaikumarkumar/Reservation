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