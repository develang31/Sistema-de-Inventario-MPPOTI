@extends('../layouts.app')
@section('content')
<header class="sede-titulo">IPs</header>
<div class="list-sede">
  <a href="{{route('ip.create')}}">Añadir ip</a> 
<div>
  <table style="width:100%">
      <tr>
      <th>Nº</th>
      <th>ip</th>
      <th>Puerta Enlace</th>
      <th>Observacion</th>
    </tr>
    @foreach ($ips as $item)
    <tr>
      <td>{{$item->id_ip}}</td>
      <td>{{$item->ip}}</td>
      <td>{{$item->puerta_enlace}}</td>
      <td>{{$item->observacion}}</td>
    </tr>
    @endforeach
  </table>
</div>
</div>
@endsection
