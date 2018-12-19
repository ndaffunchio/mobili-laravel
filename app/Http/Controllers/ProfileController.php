<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        // Get the currently authenticated user's ID...
        $id = Auth::id();
        $datos = request()->user();

        return view('users.profile', compact('id','datos'));
    }

    public function edit()
    {
        $id = Auth::id();
        $profile = User::find($id);
        return view('users.edit-profile', compact('profile'));
    }

    public function update(Request $request)
    {
        $id = Auth::id();
        $profile = User::find($id);
        
        $datos = [];
        $datos[] = (!Input::get('first_name')) ? ['first_name' => $profile->first_name] : request()->validate(['first_name' => 'string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/']);
        $datos[] = (!Input::get('last_name')) ? ['last_name' => $profile->last_name] : request()->validate(['last_name' => 'string|max:255|min:2|regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüÜ]*$/']); 
        $datos[] = (!Input::get('email')) ? ['email' => $profile->email] : request()->validate(['email' => 'string|email|max:255|unique:users,email,'.$profile->id]);  
        $datos[] = (!Input::get('password')) ? ['password' => $profile->password] : request()->validate(['password' => 'string|min:6|confirmed']);
        $datos[] = (!Input::get('dni')) ?['dni' => $profile->dni] : request()->validate(['dni' => 'integer|digits_between:7,9|unique:users,dni,'.$profile->id]); 
        $datos[] = (!Input::get('birthday')) ? ['birthday' => $profile->birthday] : request()->validate(['birthday' => 'nullable|date']); 
        $datos[] = (!Input::get('phone')) ? ['phone' => $profile->phone] : request()->validate(['phone' => 'nullable|numeric|digits_between:8,13','regex:/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/']);

        $datos = collect($datos);
        $datos = $datos->collapse()->toArray();
        
        if(Input::get('password')) {
            $datos['password'] = Hash::make($datos['password']);
        }
        
        if (request()->file('avatar')) {
            request()->validate(['avatar' => 'image|max:2000']);
            $ext = request()->file('avatar')->extension();
            $id = $profile->id;
            $nombre = request()->file('avatar')->storeAs('avatars', $id.'.'.$ext);
            $nombre = 'storage/'.$nombre;

            $datos['avatar'] = $nombre;
        }

        $profile->update($datos);
        return redirect('/profile')->with('status', 'Usuario Actualizado');
    }

}
