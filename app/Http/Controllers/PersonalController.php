<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Personal::paginate(5);
        $users->load('user');
        return view('personal.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('personal.crear', compact('roles'));
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
        $user->password = bcrypt($request->input('name'));
        $user->save();

        $user->assignRole($request->input('roles'));

        $personal = new Personal();
        $personal->nombre = $request->input('nombre');
        $personal->direccion = $request->input('direccion');
        $personal->telefono = $request->input('telefono');
        $personal->ci = $request->input('ci');
        //$personal->cargo = $request->input('roles');
        $personal->userId = $user->id;
        $personal->save();

        return redirect()->route('personal.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Personal::find($id);
        $user->load('user');
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->user->roles->pluck('name','name')->all();

        return view('personal.editar', compact('user','roles','userRole'));
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
        $personal = Personal::find($id);

        $this->validate($request, [
            'email' => 'required|email|unique:users,email,'.$personal->userId,
            'nombre' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'ci' => 'required|string',
        ]);

        $data = $request->only('nombre', 'direccion', 'telefono', 'ci');
        $personal->update($data);

        $input = $request->only('email');
        $user = User::find($personal->userId);
        $user->update($input);

        DB::table('model_has_roles')->where('model_id',$personal->userId)->delete();
        $user->assignRole($request->input('roles'));

        /*$personal = Personal::where('userId', $user->id)->first();
        $personal = Personal::find($personal->id);
        $personal->update($data);*/

        return redirect()->route('personal.index');
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
        return redirect()->route('personal.index');
    }
}
