@extends('../layouts.app')
@section('content')
<header class="equipo-titulo">Equipos de Computo</header>
<div class="list-func">
  <a href="{{route('equipocomputo.create')}}">Añadir Equipo</a> 
<div>
  <table style="width:100%">
      <tr>
      <th>Nº</th>
      <th>MAC</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Nombre del Equipo</th>
      <th>Usuario Equipo</th>
      <th>ID_IP</th>
      <th>ID_FUNCIONARIO</th>
      <th>ID_TIPO_EQUIPO</th>
      <th>Observacion</th>
    </tr>
    @foreach($equiposC as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->direccion_mac}}</td>
      <td>{{$item->marca}}</td>
      <td>{{$item->modelo}}</td>
      <td>{{$item->nombre_equipo}}</td>
      <td>{{$item->nombre_usuario_equipo}}</td>
      <td>{{$item->id_ip}}</td>
      <td>{{$item->id_funcionario}}</td>
      <td>{{$item->id_tipo_equipo}}</td>
      <td>{{$item->observacion}}</td>
    </tr>
    @endforeach
  </table>
</div>
</div>
@endsection