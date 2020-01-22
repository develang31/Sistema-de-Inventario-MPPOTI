@extends('../layouts.app')


@section('content')
<header class="func-titulo">Funcionarios</header>
<div class="list-func">

  <a href="{{route('funcionario.create')}}">Añadir Funcionario</a> <!-- route('funcionario.create') redirige al formulario en la carpeta funcionario/create.blade.php-->
<div>

  <table style="width:100%">
  
      <tr>
      <th>Nº</th>
      <th>Codigo Plaza</th>
      <th>Area</th>
      <th>Cargo</th>
      <th>Nombres</th>

      <th>Servicios</th>
      
      <th>Estado</th>
    </tr>
    @foreach($funcionariosindex as $item)
    <tr>
      <td>{{$item->id_funcionario}}</td>
      <td>{{$item->codigo_plaza}}</td>
      <td>{{$item->id_area}}</td>
      <td>{{$item->id_cargo}}</td>
      <td>{{$item->nombre}}</td>
      
     
          <td>
          
           <ul>
           @if(count($item->servicios)>0)
              @foreach($item->servicios as $servicio)
                <li>{{ $servicio->nombre_servicio}}</li>
              @endforeach
           @else   
              <a href="">Añadir servicios</a>
            @endif
           </ul>
           <h4>Services</h4>
         
            @foreach($serviciosindex as $id_servicio =>$nombre_servicio)
                {{$nombre_servicio}} 
            @endforeach
            <br>
            @foreach($serviciosindex as $id_servicio => $nombre_servicio)
         
                <input 
                type="checkbox" 
                class="fun_ser" 
                name="fun_ser[]" 
                data-funid = {{$item["id_funcionario"]}}
                value = "{{$id_servicio}}" {{in_array($id_servicio,array_column($funServicios[$item["id_funcionario"]],"id_servicio"))? 'checked':""}}
                >
            
            @endforeach 
       
           
          </td>
       
     
      <td>{{$item->estado}}</td>
    </tr>
    @endforeach
  </table>
</div>
</div>

@endsection


@section('scripts')
<script src="{{asset('js/script.js')}}"></script>
@endsection