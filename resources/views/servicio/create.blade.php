@extends("theme.$theme.layout")
@section('titulo') 
	Servicios
@endsection
@section('contenido')
<div class="row"> 
	<div class="col-lg-12">
		 @include('includes.form-error') 
		@include('includes.mensaje') 
		<div class="card card-info">
			 <div class="card-header with-border"> 
				<h3 class="card-title">Crear Servicios</h3> 
					<a href="{{route('servicio')}}" class="btn btn-info   btn-smpull-right">Listado</a> 
			</div> 
	 <form  class="form-horizontal" action="{{route('servicio.store')}}" method="POST">
	  {{ csrf_field() }}
		<div class="card-body">
			@include('servicio.form')
		</div>
		<div class="card-footer">
                  <div class="col-lg-3"></div> 
				<div class="col-lg-6"> 
					@include('includes.boton-form-crear')
				 </div>
                </div>
             
	 	   </form> 
		</div>
	</div>
</div>
@endsection
