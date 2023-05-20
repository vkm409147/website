<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="logo" href="./">L&NT</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<nav class="navbar-header">
						<a href="./index">Home</a>
						<a href="./login">Login</a>
						<a href="./catalog.php">Products</a>
					</nav>
				</ul>
					<div class='cart'>
						<?php $count=0;
						if(isset($_SESSION['cart'])){
							$count=count($_SESSION['cart']);	
						} ?>
						<a href="./cart.php" class="fas fa-shopping-cart">(</php session_start();?>)Cart</a>
					</div>
			</div>
		</div>
	</nav>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap');
	:root{
		--black:#778899;
		--orange:#191970;
		--white:#FFFFFF
	}
	.logo{
		position: relative;
		left:85%;
		font-size: 40px;
		font-family: 'Playfair Display', serif;
		color:#FF4500;
	}
	.cart{
		position: relative;
		right:68%;
		font-size: 30px;
		color: #98FB98;
	}
	.navbar-header a{
		position: relative;
		right:30%;
		font-size: 30px;
		margin: 0 1rem;
		color: #FFFFFF	;
	}
</style>
</body>
</html>
