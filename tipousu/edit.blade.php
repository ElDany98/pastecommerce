<!DOCTYPE html>
<html lang="en">
<head>
    
@include('headeradmin')
<!-- Section Intro Start -->
<section class="mt-50px">
	<div class="container">
		<div>
			<div>
                
				<div class="card p-5 border-0 rounded-top ">
					<h1>Editar tipo usuario</h1>
                    </br>
                    </br>
					<h3 style="text-align:center" class="mt-3"></h3>
                    <form method="POST" action="{{ url('/tipos/'.$datos_e->id_tipo_usu) }}" >
					@csrf
					{{ method_field('PATCH')}}
                        @include('tipousu.form')
						<button type="submit" >Guardar Cambios</button>
                    </form>	
				</div>
			</div>
		</div>
	</div>
</section>

@include('scripts')
</html>
<!-- Section Intro End -->


