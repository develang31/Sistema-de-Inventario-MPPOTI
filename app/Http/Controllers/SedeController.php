<?php

namespace App\Http\Controllers;

use App\Model\Sede;
use Illuminate\Http\Request;
use App\Http\Requests\ValidacionSede;
class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $isede = Sede::orderBy('id_sede')->get();
        return view('sede.isede', compact('isede'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('sede.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionSede $request)
    {
        Sede::create($request->all());
	    return redirect('sede')->with('mensaje','Sede creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show(Sede $sede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Sede::findOrFail($id);//where('id_sede',$id)->get();
        return view('sede.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionSede $request, $id)
    {
        Sede::findOrFail($id)->update($request->all());
        return redirect('sede')->with('mensaje', 'Rol actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            if (Sede::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
