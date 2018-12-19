<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $users = User::all();
        return view('admin.users.users', compact('users'));
    }

    public function create()
    {
        return view('admin.users.add-user');
    }

    public function store()
    {
        $datos = request()->validate([
            'first_name' => 'required|string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'last_name' => 'required|string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'dni' => 'required|numeric|digits_between:7,9|regex:/^\d{7,9}(?:[-\s]\d{4})?$/',
            'birthday' => 'nullable|date',
            'phone' => 'nullable|numeric|digits_between:8,13','regex:/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/'
        ]);
        
        $users = User::create([
            'first_name' => $datos['first_name'],
            'last_name' => $datos['last_name'],
            'email' => $datos['email'],
            'password' => Hash::make($datos['password']),
            'birthday' => $datos['birthday'],
            'phone' => $datos['phone'],
            'dni' => $datos['dni'],
            ]);

        return view('admin.users.users-success');
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit-user', compact('user'));
    }

    public function update($id)
    {
        $user = User::find($id);
        $datos = [];
        $datos[] = (!Input::get('first_name')) ? ['first_name' => $user->first_name] : request()->validate(['first_name' => 'string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/']);
        $datos[] = (!Input::get('last_name')) ? ['last_name' => $user->last_name] : request()->validate(['last_name' => 'string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/']); 
        $datos[] = (!Input::get('email')) ? ['email' => $user->email] : request()->validate(['email' => 'string|email|max:255|unique:users,email,'.$user->id]);  
        $datos[] = (!Input::get('password')) ? ['password' => $user->password] : request()->validate(['password' => 'string|min:6|confirmed']);
        $datos[] = (!Input::get('dni')) ?['dni' => $user->dni] : request()->validate(['dni' => 'numeric|digits_between:7,9|regex:/^\d{7,9}(?:[-\s]\d{4})?$/|unique:users,dni,'.$user->id]); 
        $datos[] = (!Input::get('birthday')) ? ['birthday' => $user->birthday] : request()->validate(['birthday' => 'nullable|date']); 
        $datos[] = (!Input::get('phone')) ? ['phone' => $user->phone] : request()->validate(['phone' => 'nullable|numeric|digits_between:8,13','regex:/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/']);

        $datos = collect($datos);
        $datos = $datos->collapse()->toArray();
        $datos['password'] = Hash::make($datos['password']);
        
        // if (request()->file('avatar')) {
        //     request()->validate(['avatar' => 'image|max:2000']);
        //     $ext = request()->file('avatar')->extension();
        //     $id = $user->id;
        //     $nombre = request()->file('avatar')->storeAs('avatars', $id.'.'.$ext);
        //     $nombre = 'storage/'.$nombre;

        //     $datos['avatar'] = $nombre;
        // }

        $user->update($datos);
        return redirect('admin/users')->with('status', 'Usuario Actualizado');

        // request()->validate([
        //     'first_name' => 'required|string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
        //     'last_name' => 'required|string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/',
        //     'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        //     'password' => 'required|string|min:6|confirmed',
        //     'dni' => 'required|numeric|digits_between:7,9|regex:/^\d{7,9}(?:[-\s]\d{4})?$/|unique:users,dni,'.$user->id,
        //     'birthday' => 'nullable|date',
        //     'phone' => 'nullable|numeric|digits_between:8,13','regex:/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/'
        // ]);

        // $datos = request()->all();
        
        // if (!empty(request()->input('password'))) {
        //     request()->validate(['password' => 'string|min:6|confirmed']);
        //     $datos["password"] = Hash::make(request()->input('password'));
        // } else {
        //     $datos["password"] = $user->password;
        // }

        // $user->update($datos);

    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->id!=1) {
            $user->delete();
        }else{
            abort(403, 'Unauthorized action.');
        }
    	return redirect('admin/users')->with('status', 'Usuario Eliminado');
    }

}
