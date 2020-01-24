<div class="form-group row">
     <label for="nombre_sede" class="col-lg-3 col-form-label requerido">Nombre</label>
     <div class="col-lg-10">
         <input type="text" name="nombre_sede" class="form-control" id="nombre_sede"  value="{{old('nombre_sede', $data->nombre_sede ?? '')}}" required>
     </div>
</div>
