@extends("theme.$theme.layout")
@section('titulo')
    Cargos
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
 <div class="col-lg-12">
  @include('includes.form-error')
  @include('includes.mensaje')
  <div class="card card-danger">
   <div class="card-header with-border">
    <h3 class="card-title">Editar Cargo</h3>
    <div class="card-tools pull-right">
     <a href="{{route('cargo.index')}}" class="btn btn-block btn-info btn-sm">
      <i class="fa fa-fw fa-reply-all"></i> Volver al listado
     </a>
    </div>
   </div>
   <form action="{{ route('cargo.update', $data->id_cargo)}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
   {{ csrf_field() }}
   {{method_field('put')}}
   <div class="card-body">
    @include('cargo.form')
   </div>
   <div class="card-footer">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      @include('includes.edit-button-form')
    </div>
   </div>
   </form>
  </div>
 </div>
</div> 
@endsection
