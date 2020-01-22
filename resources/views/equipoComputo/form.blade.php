<div class="form-group row">
        <label for="direccion_mac" class="col-sm-2 col-form-label">Mac Address</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="direccion_mac" placeholder="Direcció MAC">
              </div>
</div>
 <div class="form-group row">
        <label for="marca" class="col-lg-3 col-form-label requerido">Marca</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="marca" placeholder="Marca" required>
              </div>
</div>
 <div class="form-group row">
        <label for="modelo" class="col-sm-2 col-form-label">Modelo</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="modelo" placeholder="Modelo">
              </div>
</div>

<div class="form-group row">
        <label for="nombre_equipo" class="col-sm-2 col-form-label">Nombre Equipo</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombre_equipo" placeholder="Nombre Equipo">
              </div>
</div>

<div class="form-group row">
        <label for="nombre_equipo_usuario" class="col-sm-2 col-form-label">Nombre Equipo Usuario</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombre_equipo_usuario" placeholder="Nombre Equipo Usuario">
              </div>
</div>


<div class="form-group">
                  <label>IP address</label>
                  <select name="ip" class="form-control select2" style="width: 100%;">
                  @foreach ($ips as $item)
                  <option value="{{$item['id_ip']}}"> {{$item['ip']}}</option>
                  @endforeach
                   </select> 
</div>

<div class="form-group">
                  <label>Funcionario</label>
                  <select name="funcionario" class="form-control select2" style="width: 100%;">
                  @foreach ($funcionarios as $item)
                  <option value="{{$item['id_funcionaroo']}}"> {{$item['nombre']}}</option>
                  @endforeach
                   </select> 
</div>

<div class="form-group">
                  <label>Tipo Equipo</label>
                  <select name="tipo_equipo" class="form-control select2" style="width: 100%;">
                  @foreach ($tipoEquipos as $item)
                  <option value="{{$item['id_tipo_equipo']}}"> {{$item['nombre_tipo_equipo']}}</option>
                  @endforeach
                   </select> 
</div>

 <div class="form-group row">
        <label for="obs" class="col-sm-2 col-form-label">Observación</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="obs" placeholder="Observación">
              </div>
</div>
