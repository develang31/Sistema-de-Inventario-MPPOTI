@extends("theme.$theme.layout")
@section('titulo') 
Sedes
@endsection
@section('contenido')
<div class="row">
  <div class="col-lg-12">
     @include('includes.form-error')
     @include('includes.mensaje')
      <div class="card card-danger">
        <div class="card-header with-border"> 
             <h3 class="card-title">Crear Sedes</h3> 
	</div> 
        <form  class="form-horizontal" action="{{route('sede.store')}}" method="POST">
	  {{ csrf_field() }}
	  <div class="card-body">
	       @include('sede.form')
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
