<div class="form-group row">
        <label for="codigo_plaza" class="col-sm-2 col-form-label">Código</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="codigo_plaza" placeholder="Código">
              </div>
</div>
 <div class="form-group row">
        <label for="nombres" class="col-lg-3 col-form-label requerido">Nombre(s))</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombres" placeholder="Nombre(s)" required>
              </div>
</div>
 <div class="form-group row">
        <label for="apellido_paterno" class="col-sm-2 col-form-label">Apellido Paterno</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="ap" placeholder="Apellido Paterno">
              </div>
</div>

<div class="form-group row">
        <label for="apellido_materno" class="col-sm-2 col-form-label">Apellido Materno</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="am" placeholder="Apellido Materno">
              </div>
</div>
<div class="form-group">
                  <label>Area</label>
                  <select name="id_area" class="form-control select2" style="width: 100%;">
                  @foreach ($areas as $item)
                  <option value="{{$item['id_area']}}"> {{$item['nombre_area']}}</option>
                  @endforeach
                   </select> 
</div>

<div class="form-group">
                  <label>Cargo</label>
                  <select name="id_cargo" class="form-control select2" style="width: 100%;">
                  @foreach ($cargos as $item)
                  <option value="{{$item['id_cargo']}}"> {{$item['nombre_cargo']}}</option>
                  @endforeach
                   </select> 
</div>

 <div class="form-group row">
        <label for="obs" class="col-sm-2 col-form-label">Observación</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="obs" placeholder="Observación">
              </div>
</div>

 <div class="form-group row">
        <label for="estado" class="col-sm-2 col-form-label">Estado</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" id="estado" placeholder="Estado">
              </div>
</div>