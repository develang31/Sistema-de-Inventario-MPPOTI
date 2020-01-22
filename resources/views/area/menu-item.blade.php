@if ($item["submenu"] == [])
<li class="dd-item dd3-item" data-id="{{$item["id_area"]}}">
    <div class="dd-handle dd3-handle"></div>
    <div class="dd3-content {{$item["url"] == "javascript:;" ? "font-weight-bold" : ""}}">
       <a href="{{url("area/".$item["id_area"]."/editar")}}">{{$item["nombre_area"] . " | Url -> " . $item["url"]}} Icono -> <i style="font-size:20px;" class="fa fa-fw {{isset($item["icono"]) ? $item["icono"] : ""}}"></i></a>
    </div>
</li>
@else
<li class="dd-item dd3-item" data-id="{{$item["id_area"]}}">
    <div class="dd-handle dd3-handle"></div>
    <div class="dd3-content {{$item["url"] == "javascript:;" ? "font-weight-bold" : ""}}">
     <a href="{{url("area/", ['id_area' => $item["id_area"]])}}">{{ $item["nombre_area"] . " | Url -> " . $item["url"]}} Icono -> <i style="font-size:20px;" class="fa fa-fw {{isset($item["icono"]) ? $item["icono"] : ""}}"></i></a>
    </div>
    <ol class="dd-lrist">
        @foreach ($item["submenu"] as $submenu)
        @include("area.menu-item",[ "item" => $submenu ])
        @endforeach
    </ol>
</li>
@endif
