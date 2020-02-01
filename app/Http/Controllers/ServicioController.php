<?php

namespace App\Http\Controllers;

use App\Model\Servicio;
use Illuminate\Http\Request;
use App\Http\Requests\ValidacionServicio;
class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iservicio=Servicio::OrderBy('id_servicio')->get();
        return view('servicio.iservicio',compact('iservicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionServicio $request)
    {
        Servicio::create($request->all());
	return redirect('servicio')->with('mensaje','Servicio creado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Servicio::findOrFail($id);
	return view('servicio.editar',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionServicio $request,$id)
    {
        Servicio::findOrFail($id)->update($request->all());
	return redirect('servicio')->with('mensaje','Servicio actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if($request->ajax()){
	 if(Servicio::destroy($id)){
	 return response()->json(['mensaje'=>'ok']);
	 }
	 else{
	 return response()->json(['mensaje'=>'ng']);
	 }
	}else {
	  abort(404);
	}
    }
}
