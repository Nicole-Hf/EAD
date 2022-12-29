<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        $users->load('personal');
        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.crear');
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'nombre' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'ci' => 'required|string',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt('123456789');
        $user->save();

        $personal = new Personal();
        $personal->nombre = $request->input('nombre');
        $personal->direccion = $request->input('direccion');
        $personal->telefono = $request->input('telefono');
        $personal->ci = $request->input('ci');
        $personal->cargo = $request->input('cargo');
        $personal->userId = $user->id;
        $personal->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('usuarios.editar',compact('user'));
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
            'email' => 'required|email|unique:users,email,'.$id,
            'nombre' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'ci' => 'required|string',
        ]);

        $input = $request->only('email');
        $user = User::find($id);
        $user->update($input);

        $data = $request->only('nombre', 'direccion', 'telefono', 'ci');
        $personal = Personal::where('userId', $user->id)->first();
        $personal = Personal::find($personal->id);
        $personal->update($data);

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id);
        return redirect()->route('usuarios.index');
    }
}
