<?php

namespace App\Http\Controllers;

use App\Models\Infante;
use Illuminate\Http\Request;

class InfanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infantes = Infante::paginate(5);
        return view('infantes.index', compact('infantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infantes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:50',
            'apellidoPaterno' => 'required|string|max:50',
            'apellidoMaterno' => 'required|string|max:50',
            'edad' => 'required',
            'sexo' => 'required',
            'fechaNacimiento' => 'required|date',
            'sala' => 'required',
            'nombreMadre' => 'required',
            'nombrePadre' => 'required',
            'telefonoEmergencia' => 'required'
        ]);

        $input = $request->all();
        Infante::create($input);

        return redirect()->route('infantes.index');
    }

    /**
     * Show the form for showing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infante = Infante::find($id);

        return view('infantes.ver',compact('infante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infante = Infante::find($id);

        return view('infantes.editar',compact('infante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:50',
            'apellidoPaterno' => 'required|string|max:50',
            'apellidoMaterno' => 'required|string|max:50',
            'edad' => 'required',
            'sexo' => 'required',
            'fechaNacimiento' => 'required|date',
            'sala' => 'required',
            'nombreMadre' => 'required',
            'nombrePadre' => 'required',
            'telefonoEmergencia' => 'required'
        ]);

        $input = $request->all();
        $infante = Infante::find($id);
        $infante->update($input);

        return redirect()->route('infantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Infante::find($id);
        return redirect()->route('infantes.index');
    }
}
