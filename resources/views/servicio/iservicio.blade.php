@extends('../layouts.app')
@section('content')
<header class="servicio-titulo">servicios</header>
<div class="list-servicio">
  <a href="{{route('servicio.create')}}">Añadir servicio</a>
<div>
  <table style="width:100%">
      <tr>
      <th>Nº</th>
      <th>Servicio</th>
    </tr>
    @foreach ($services as $item)
    <tr>
      <td>{{$item->id_servicio}}</td>
      <td>{{$item->nombre_servicio}}</td>
    </tr>
    @endforeach
  </table>
</div>
</div>
@endsection