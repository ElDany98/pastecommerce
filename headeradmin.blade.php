



@include('links')


<!-- banner -->
<div class="banner_top" id="home">
	<div >
		<div class="center-container">
			<div class="w3_agile_header">

						<div class="w3_agileits_logo">
								<h1><a href="{{ url('/') }}">Pasteleria & Panaderia<span>Felicidad a cada mordida</span></a></h1>
						</div>

							<div class="w3_menu">
								<div class="top-nav">
								<nav class="navbar navbar-default">
									<div class="container">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
										</button>
									</div>

							<!-- inicio navbar-->
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li class="home-icon"><a href="{{ url('/')}}"><span class="fa fa-home" aria-hidden="true"></span></a></li>
											<li><a href="{{ url('/usuario') }}">Usuarios</a></li>
											<li><a href="{{ url('/ventas') }}">Ventas</a></li>
											<li><a href="{{ url('/productos') }}">Productos</a></li>
											<li><a href="{{ url('/devoluciones') }}">Devoluciones</a></li>
											<li><a href="{{ url('/pedido') }}">Pedidos</a></li>
											<li><a href="{{ url('/categoria') }}">Categoria</a></li>
											<li><a href="{{ url('/ordenes') }}">Ordenes</a></li>
											<li><a href="{{ url('/tipos') }}">Tipos de usuario</a></li>
											<li><a href="{{ url('/') }}">Salir </a></li>

											<!--
											<li class="nav-cart-w3ls">
												<form action="#" method="post" class="last"> 
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="display" value="1">
													<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
												</form> 
											</li>
											-->	 
										</ul>	
										
									</div>	

									<!-- fin navbar-->
								</nav>	
							</div>
						</div>

				
			    </div>

<!-- banner-text -->
				<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="agileits-banner-info">
												<h3><?=$banner_tt;?></h3>
											</div>	
								</li>
							</ul>
						</div>
				</div>
			
		
			
      </div>
   </div>
</div>
<!-- //banner -->

