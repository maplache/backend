<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Staple Food a Restaurants Category Bootstrap Responsive website Template | Sign Up :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Staple Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/style_modal.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/js_login.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
					<div class="w3ls-header-left">
						<ul> 
							<li class="head-dpdn">
								<i class="fa fa-phone" aria-hidden="true"></i> (868) 000 0000
							</li>
							<li class="head-dpdn">
								<i class="fa fa-envelope" aria-hidden="true"></i> info@rapidoysabroso.com
							</li>
						</ul>
					</div>
					<div class="w3ls-header-right">
						<ul> 
							<li class="head-dpdn">
								<a href="#modalLogin"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
							</li> 
							<li class="head-dpdn">
								<a href="#modalRegistro"><i class="fa fa-user-plus" aria-hidden="true"></i> Regístrate</a>
							</li> 
							<li class="head-dpdn">
								<a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i> Ayuda</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- //header-one -->    
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<img href="index.html" src="images/logo.png" class="logo">
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.html">Inicio</a></li>
								<li><a href="acerca.html" >Acerca de</a></li>
								<li><a href="catalogo_menus.html">Catálogo de menús</a></li>
								<li><a href="contacto.html">Contáctanos</a></li>  
							</ul>
						</div>
						<div class="cart cart box_1"> 
							<form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
								<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							</form>   
						</div> 
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>
		<!-- //header-end --> 
		<!-- banner-text -->
		<div class="banner-text">	
			<div class="container">
				<h2>Servicio express <br> <span>¡hasta donde estés!</span></h2> 
			</div>
		</div>
	</div>
	<!-- //banner -->        
	<!-- breadcrumb -->  
	<div class="container"> </div>
	<!-- //breadcrumb -->
	<!-- sign up-page -->
	<div class="login-page about">
		<img class="login-w3img" src="images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Registro del menú.</h3>  
			<div class="login-agileinfo"> 
				<form action="add_product.php" method="post"> 
					<input class="agile-ltext" type="text" name="name" id="name" placeholder="Nombre del platillo" data-rule="required"/>
				  <input class="agile-ltext" type="text" name="description" id="description" placeholder="Descripción" data-rule="required"/>
				  <input class="agile-ltext" type="text" name="price" id="precio" placeholder="Precio ($)" data-rule="required"/>
					
				
				  <div class="wthreelogin-text"> 
						<ul> 
							<li>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 
									<span> I agree to the terms of service</span> 
								</label> 
							</li> 
						</ul>
						<div class="clearfix"> </div>
					</div>
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
					<input type="submit" name="submit" value="Agregar">
				</form>
</div>	 
		</div>
	</div>
	<!-- //sign up-page -->  
	<div class="subscribe agileits-w3layouts"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>¡Síguenos en nuestras redes sociales!</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul> 
				<ul class="apps"> 
					<li><h4>Descarga la app: </h4> </li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul>
			</div> 
			<div class="col-md-6 subscribe-right">
				<h3 class="w3ls-title">¡No esperes más!<br><span>¡Saborisísate!</span></h3>   
				<img src="images/dibujo1.png" class="sub-w3lsimg" alt=""/>
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<!-- footer -->
	<div class="footer agileits-w3layouts">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-xs-12 col-sm-3 footer-grids w3-agileits">
					<h3>Rápido y sabroso</h3>
					<p>Somos una empresa comprometida que pone a disposición del cliente un completo repertorio de los mejores restaurantes de la ciudad. El tiempo y la distancia ya no son una excusa, ordena ahora de una manera rápida y sencilla ¡Nosotros nos encargamos del resto!</p>
				</div> 
				<div class="col-xs-12 col-sm-3 footer-grids w3-agileits">
					<h3>Navegación</h3>
					<ul>
						<li class="head-dpdn">
							<a href="index.html"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Inicio</a>
					  </li>
						<li class="head-dpdn">
							<a href="acerca.html"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Acerca de</a>
						</li> 
						<li class="head-dpdn">
							<a href="catalogo_menus.html"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Catálogo de menús</a>
						</li> 
						<li class="head-dpdn">
							<a href="contacto.html"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Contactános</a>
						</li>
						<li class="head-dpdn">
							<a href="login.html"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Login</a>
						</li>   
				  </ul>  
				</div>
				<div class="col-xs-12 col-sm-6 footer-grids w3-agileits">
					<h3>Contácto rápido</h3>
					<form>
						<input type="email" name="name" class="form-control" placeholder="Nombre" required>
						<textarea name="message" class="form-control" placeholder="Mensaje..." required></textarea>
						<input id="enviar" type="submit" value="Enviar">
					</form>  
			  </div>
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>
	<div class="copyw3-agile"> 
		<div class="container">
			<p>&copy; 2017 Todos los derechos reservados | <a href="http://w3layouts.com/">Rápido y sabroso!</a></p>
		</div>
	</div>
	<!-- //footer --> 
	
	<!--modals-->
	<div id="modalLogin" class="modalDialog">
		<div>
			<form class="login">
   				<a href="#close" title="Close" class="close">X</a>
    				<p class="title">Log in</p>
    				<input type="text" placeholder="Usuario" autofocus/>
   					<i class="fa fa-user"></i>
    				<input type="password" placeholder="Contraseña" />
    				<i class="fa fa-key"></i>
   					<button>
      					<i class="spinner"></i>
      					<span class="state">Log in</span>
    				</button>
		  </form>
		</div>
	</div>
	 
	<div id="modalRegistro" class="modalDialog">
		<div>
			<form class="login">
   				<a href="#close" title="Close" class="close">X</a>
    				<h1 class="title">Nuevo usuario</h1>
    				<label>Nombre de usuario: </label>
    				<input type="text" autofocus/>
    				<i class="fa fa-user"></i>
    				<label>Contraseña: </label>
    				<input type="password"/>
    				<i class="fa fa-key"></i>
    				<label>Repetir contraseña: </label>
    				<input type="password"/>
    				<i class="fa fa-key"></i>
   					<button class="registro">
      					<i class="spinner"></i>
      					<span class="state">Registrarse</span>
    				</button>
		  </form>
		</div>
	</div>

	<!--//modals>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->	
	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>  
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
	<!-- //end-smooth-scrolling -->	  
	<!-- smooth-scrolling-of-move-up -->
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
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>