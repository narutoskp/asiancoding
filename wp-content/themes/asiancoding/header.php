<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asiancoding
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="container-fluid px-0">
		<div class="navbar header-bar">
			<div class="col-6 text-title-brand">
				<div class="row">
					<div class="col-3 pr-0 ml-auto">
						<img src="/asiancoding/wp-content/uploads/2017/11/logo_asiancoding.png" alt="logo">
					</div>
					<div class="col-8 px-0 my-auto">
						<p class="mb-0"><strong>บริษัท เอเชี่ยน โคดดิ้ง ซิสเท็มส์ จำกัด</strong></p>
						<p class="mb-0">Asian Coding Systems</p>
					</div>
				</div>
			</div>
			<div class="col-4 ml-auto">
				<div class="row">
					<div class="col-6">
						<div class="row">
							<div class="col-3 px-0">
								<span class="fa-stack fa-lg color-gray">
									<i class="fa fa-phone fa-stack-1x"></i>
									<i class="fa fa-circle-thin fa-stack-2x"></i>
								</span>
							</div>
							<div class="col-9 px-0">
								<p class="mb-0 color-black font-weight-bold">โทรศัพท์</p>
								<p class="mb-0 color-pink">02-203-0232-4</p>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="row">
							<div class="col-3 px-0">
								<span class="fa-stack fa-lg color-gray">
									<i class="fa fa-print fa-stack-1x"></i>
									<i class="fa fa-circle-thin fa-stack-2x"></i>
								</span>
							</div>
							<div class="col-9 px-0">
								<p class="mb-0 color-black font-weight-bold">โทรสาร</p>
								<p class="mb-0 color-pink">02-203-0235</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active mr-3">
		        <a class="nav-link" href="#">HOME</a>
		      </li>
		      <li class="nav-item mr-3">
		        <a class="nav-link" href="#">SERVICES</a>
		      </li>
					<li class="nav-item dropdown mr-3">
		        <a class="nav-link dropdown-toggle" href="#" id="navbaMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          PRODUCTS
		        </a>
		        <div class="dropdown-menu" aria-labelledby="#navbaMenu">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		      <li class="nav-item mr-3">
		        <a class="nav-link" href="#">BLOG</a>
		      </li>
					<li class="nav-item mr-3">
						<a class="nav-link" href="#">ABOUT US</a>
					</li>
					<li class="nav-item mr-3">
						<a class="nav-link" href="#">CONTACT US</a>
					</li>
		    </ul>
		  </div>
		</nav>
	</div>

	<div id="content" class="site-content">
