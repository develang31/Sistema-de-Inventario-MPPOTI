<div class="form-group row">
 <label for="nombre_cargo" class="col-lg-3 col-form-label requerido">Nombre</label>
 <div class="col-lg-10">
  <input type="text" class="form-control" id="nombre_cargo" name="nombre_cargo" value="{{old('nombre_cargo',$data->nombre_cargo ?? '')}}" required>
 </div>
</div>
<div class="form-group row">
 <label for="codigo_cargo" class="col-sm-2 col-form-label requerido">Código</label></label>
 <div class="col-sm-10">
  <input type="text" class="form-control" name="codigo_cargo" id="codigo_cargo" value="{{old('codigo_cargo',$data->codigo_cargo ?? '')}}" required>
 </div>
</div>








	
