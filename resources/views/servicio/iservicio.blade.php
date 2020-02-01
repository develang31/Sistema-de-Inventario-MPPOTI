@extends("theme.$theme.layout")
@section('titulo')
Servicios
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
 <div class="col-lg-12">
  @include('includes.mensaje')
  <div class="card">
   <div class="card-header with-border">
    <h3 class="card-title">Servicios</h3>
    <div class="card-tools pull-right">
     <a href="{{route('servicio.create')}}" class="btn btn-block btn-success btn-sm">
      <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
     </a>
    </div>
   </div>
   <div class="card-body">
    <table class="table table-striped table-bordered table-hover" id="tabla-data">
     <thead>
      <tr>
       <th>Nombre</th>
       <th class="width70"></th>
      </tr>
     </thead>
     <tbody>
     @foreach ($iservicio as $data)
      <tr>
       <td>{{$data->nombre_servicio}}</td>
       <td>
        <a href="{{route('servicio.edit', $data->id_servicio)}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
         <i class="fa fa-fw  fa-edit"></i>
        </a>
        <form action="{{route('servicio.destroy', $data->id_servicio)}}" class="d-inline form-eliminar" method="POST">
         {{ csrf_field() }} @method("delete")
         <button type="submit"  class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
          <i class="fa fa-fw fa-trash text-danger"></i>
         </button>
        </form>
       </td>
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </div>
</div>
@endsection
