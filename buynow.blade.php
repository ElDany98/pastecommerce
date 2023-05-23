
<!DOCTYPE html>
<html lang="zxx">
<head>
@include('header')
<body>

<!--Buy-now -->
<div class="buy-now">
		<div class="container">
		<div class="heading-setion-w3ls">
			<h3 class="title-w3layouts">Selecciona tus prodcutos <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell" aria-hidden="true"></i></h3>
		</div>
		
				<div class="team-grids">
				@foreach( $datos_b as $datos)
						<div class="col-md-3 team-grid">
							<!-- normal -->
							<div class="ih-item circle effect10 bottom_to_top">
								<div class="img"><img src="{{ asset('storage').'/'.$datos->foto}}" alt="img"><span>{{ $datos->id_producto }}</span></div>
								<div class="info">
									<h2>{{$datos->nombre}}</h2>
									<h3>$ {{$datos->precio}} </h3>
									<ul>
										<li class="cary-li-w3-agileits">
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="{{ $datos->nombre }}" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="{{$datos->nombre}}  Clave producto: {{ $datos->id_producto }}" />
														<input type="hidden" name="amount" value="  {{ $datos->precio }}" />
														<input type="hidden" name="currency_code" value="MXN" />
														<input type="submit" name="submit" value="Añadir al carrito" class="button" />
													</fieldset>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- end normal -->
						</div>
						@endforeach
					</div>
					<!-- end Bottom to top-->
				</div>
			
			</div>
	</div>

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


<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
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