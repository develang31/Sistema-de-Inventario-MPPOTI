@extends('../layouts.app')
@section('content')
<header class="tipoequipo-titulo">Tipo Equipos</header>
<div class="list-sede">
  <a href="{{route('tipoequipo.create')}}">Añadir tipo Equipo</a>
<div>
  <table style="width:100%">
      <tr>
      <th>Nº</th>
      <th>Tipo Equipo</th>
    </tr>
    @foreach ($tipo_equipos as $item)
    <tr>
      <td>{{$item->id_tipo_equipo}}</td>
      <td>{{$item->nombre_tipo_equipo}}</td>
    </tr>
    @endforeach
  </table>
</div>
</div>
@endsection