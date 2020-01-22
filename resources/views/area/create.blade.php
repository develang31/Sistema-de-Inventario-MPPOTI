@extends("theme.$theme.layout")
@section('titulo') 
Areas
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/area/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row"> 
	<div class="col-lg-12">
		 @include('includes.form-error')
		@include('includes.mensaje')
		<div class="card card-info">
			 <div class="card-header with-border"> 
				<h3 class="card-title">Crear Areas</h3> 
				 
			</div> 
	 <form id="form-general" class="form-horizontal" action="{{route('area.store')}}" method="POST">
	  {{ csrf_field() }}
		<div class="card-body">
			@include('area.form')
		</div>
		<div class="card-footer">
                  <div class="col-lg-3"></div> 
				<div class="col-lg-6"> 
					@include('includes.create-button-form')
				 </div>
                </div>
             
	 	   </form> 
		</div>
	</div>
</div>
@endsection





	
