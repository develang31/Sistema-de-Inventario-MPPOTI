<div class="form-group row">
 <label for="nombre_servicio" class="col-lg-3 col-form-label requerido">Nombre</label>
 <div class="col-lg-10">
  <input type="text" class="form-control" id="nombre_servicio" name="nombre_servicio" value="{{old('nombre_servicio',$data->nombre_servicio ?? '')}}" required>
 </div>
</div>
