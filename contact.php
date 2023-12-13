<!DOCTYPE html>
<html lang="en">
<head>

   
  
	<meta charset="utf-8">
	<title>Autorent</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	
	
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    
  
	<link rel="stylesheet" href="css/zerogridlist.css">
	<link rel="stylesheet" href="css/stylelist.css">
	<link rel="stylesheet" href="css/menulist.css">
	
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/script.js"></script>

	
    
</head>
<body class="sub-page">
<div class="wrap-body">


<div id="cssmenu" >
	<ul>
	   <li><a href="index.php"><span>Autorent</span></a></li>
	   <li><a href="single.php"><span>About</span></a></li>
	   <li class="active"><a href="contact.php"><span>Contact</span></a></li>
	  <li><a href="login.php"><span>Login</span></a></li>
	</ul>
</div>
<header id="header">
	<div class="wrap-header" >
		
		<div class="main-header">
			<div class="zerogrid">
				<div class="row">
					<div class="hero-heading">
						<span>Autorent</span>
						<div class="tl"></div>
						<div class="tr"></div>
						<div class="br"></div>
						<div class="bl"></div>
					</div>
					<div class="heading-text">
						<h2>Управляйте автомобилем с комфортом</h2>
						<p>Прокат автомобилей</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<section id="container">
	<div class="wrap-container">
		<div class="zerogrid">
			<div class="row">
				<div class="crumbs">
					<ul>
						<li><a href="index.php">Назад</a></li>
						<li><a href="single.php">О нас</a></li>
					</ul>
				</div>
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">
							<h1 class="t-center" style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Мы здесь! </h1>
							<div class="col-full">
								<div id="map" style="height: 450px;"></div>
							</div>
							<div class="col-sm-2-3">
								<div class="wrap-col">
									<div class="contact">
										<h3 style="margin: 20px 0 20px 30px">Связь с нами</h3>
										<div id="contact_form">
											<form role="form" id="contactForm" data-toggle="validator">
												<div class="row">
													<div class="col-sm-1-3">
														<div class="wrap-col">
															<input type="text" name="name" id="name" placeholder="Ваш email" required="required" />
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="col-sm-1-3">
														<div class="wrap-col">
															<input type="text" name="subject" id="subject" placeholder="Тема сообщения" />
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-full">
														<div class="wrap-col">
															<textarea id="message" placeholder="Сообщение"></textarea>
															<div class="help-block with-errors"></div>
														</div>
													</div>
												</div>	
												<div class="row">
													<div class="col-full">
														<div class="wrap-col">
															<button class="button button-skin button-subscribe" type="submit" name="Submit" >Отправить</button>
															<div id="msgSubmit" class="h3 text-center hidden"></div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>


	
	<script src="js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
	<script>
	$(document).ready(function(){
		$(window).resize(function(){
			var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
			if (width >= '768') { 
				var footerHeight = $('#footer').outerHeight();
				$('#container').css({'marginBottom': footerHeight + 'px'});
			}else{
				$('#container').css({'marginBottom': '0px'});
			}
		});
		$(window).resize();
	});
    </script>
	
	<script type="text/javascript" src="js/validator.min.js"></script>
	<script type="text/javascript" src="js/form-scripts.js"></script>
	
</div>
<footer>
		<div class="waves">
			<div class="wave" id="wave1"></div>
		</div>
		<ul class="social">
			<li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-linkedin"><ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
		</ul>
		<ul class="menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Team</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<p>©2023 AutoRent | All Rights Reserved</p>
	</footer>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body></html>