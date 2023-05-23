
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Inicio - Pasteleria</title>
</head>
<body>

@include('header')


@include('offer')

@include('saleoff')

@include('equipo')
<!-- services -->
	<div class="services">
		<div class="container">
			<div class="w3l-about-grids">
				<div class="col-md-6 w3ls-about-left">
				<div class="heading-setion-w3ls">
					<h3 class="title-w3layouts white-agileits">Conoce nuestro servicio <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell white-agileits" aria-hidden="true"></i></h3>
				</div>
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Productos Personalizados</h5>
						<!--	<p class="para-w3-agile">Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						-->
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Nos adecuamos a tus necesidades</h5>
						<!--	<p class="para-w3-agile">Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						-->
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Servicio a domicilio</h5>
							
						<!--	<p class="para-w3-agile">Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 w3ls-about-right">
				<div class="heading-setion-w3ls">
					<h3 class="title-w3layouts white-agileits">Nuestros clientes opinan: <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell white-agileits" aria-hidden="true"></i></h3>
				</div>
					<div class="w3ls-about-right-img">
						<div class="test-gri1">
							<div id="owl-demo2" class="owl-carousel">
								<div class="test-grid1">
									<img src="images/team1.jpg" alt="" class="img-r">
									<h4>Mark Henry</h4>
									<span>Cliente destacado de CDMX</span>
									<p>Excelente servicio y calidad .</p>
								</div>	
								<div class="agile">
									<div class="test-grid1">
										<img src="images/team2.jpg" alt="" class="img-r">
										<h4>Joseph Carl</h4>
										<span>Cliente destacado de Metepec</span>
										<p>Estoy encantado con el sabor y consistencia</p>
									</div>	
								</div>
								<div class="agile">
									<div class="test-grid1">
										<img src="images/team3.jpg" alt="" class="img-r">
										
										<h4>John Mark</h4>
										<span>Cliente destacado de Toluca</span>
										<p>El mejor pastel que he probado!!</p>
									</div>	
								</div>					
							</div>
						</div>	
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->

<!-- gallery -->
<!-- //gallery -->


<!-- testimonials -->
<!-- //testimonials -->
@include('footer')
  <!-- Modal1 -->
						<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Pasteleria</h4>
										<img src="images/f2.jpg" alt=" " class="img-responsive">
										<h5>Integer lorem ipsum dolor sit amet </h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable..</p>
									</div>
								</div>
							</div>
						</div>
						<!-- //Modal1 -->

<!--//footer-->

	
	<!-- //for-Clients -->
<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
	<script>
		// Mini Cart
		paypal.minicart.render({
			action: '#'
		});

		if (~window.location.search.indexOf('reset=true')) {
			paypal.minicart.reset();
		}
	</script>

<!-- //cart-js --> 
@include('scripts')
</body>
</html>