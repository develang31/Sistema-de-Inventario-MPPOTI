@extends('../layouts.app')
@section('content')
<header class="cargo-titulo">Cargos</header>
<div class="list-cargo">
  <a href="{{route('cargo.create')}}">Añadir Cargo</a> <!-- route('cargo.create') redirige al formulario en la carpeta cargo/create.blade.php-->
<div>
  <table style="width:100%">
      <tr>
      <th>Nº</th>
      <th>Codigo</th>
      <th>Cargo</th>
    </tr>
    @foreach ($cargos as $item) <!--$cargos hace referencia a nombre de la tabla-->
    <tr>
      <td>{{$item->id_cargo}}</td>
      <td>{{$item->codigo_cargo}}</td>
      <td>{{$item->nombre_cargo}}</td>
    </tr>
    @endforeach
  </table>
</div>
</div>
@endsection
