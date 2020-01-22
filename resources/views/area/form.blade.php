 <div class="form-group row">
        <label for="nombre_area" class="col-lg-3 col-form-label requerido">Nombre</label></label>
             <div class="col-sm-10">
                <input type="text" class="form-control" name='nombre_area' value="{{old('nombre_area')}}" id="nombre_area">
              </div>
</div>
 <div class="form-group row">
        <label for="sigla_area" class="col-sm-2 col-form-label">Nombre Corto</label></label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" name='sigla_area' id="sigla_area">
              </div>
</div>
<div class="form-group">
     <label>Sede</label>
     <select name="id_sede" name="id_sede" class="form-control select2" style="width: 100%;">
      @foreach ($sedes as $item)
       <option value="{{$item['id_sede']}}"> {{$item['nombre_sede']}}</option>
      @endforeach
     </select> 
</div>
 <div class="form-group row">
        <label for="url" class="col-lg-3 col-form-label requerido">url</label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" name='url' id="url" value="{{old('url')}}" required>  
              </div>
</div>

 <div class="form-group row">
        <label for="icono" class="col-lg-3 col-form-labell">Icono</label>
             <div class="col-sm-10">
                      <input type="text" class="form-control" name='icono' id="icono"  value="{{old('icono')}}">
              </div>
	      <div class="col-lg-1">
                <span id="mostrar-icono" class="fa fa-fw {{old("icono")}}"></span>
              </div>
</div>
