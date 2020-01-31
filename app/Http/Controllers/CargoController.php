<?php

namespace App\Http\Controllers;

use App\Model\Cargo;
use Illuminate\Http\Request;
use App\Http\Requests\ValidacionCargo;
class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$icargo=Cargo::OrderBy('id_cargo')->get();
        return view('cargo.icargo',compact('icargo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionCargo $request)
    {
        Cargo::create($request->all());
	return redirect('cargo')->with('mensaje','Cargo creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	$data=Cargo::findOrFail($id);
	return view('cargo.editar',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionCargo $request,$id)
    {
        Cargo::findOrFail($id)->update($request->all());
	return redirect('cargo')->with('mensaje','Cargo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->ajax()){
	 if(Cargo::destroy($id)){
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
