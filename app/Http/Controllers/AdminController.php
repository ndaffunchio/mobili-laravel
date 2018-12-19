<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admins.admins', compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.add-admin');
    }

    public function store()
    {
        $datos = request()->validate([
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
        $admins = Admin::create([
            'email' => $datos['email'],
            'password' => Hash::make($datos['password']),
            ]);

        return view('admin.admins.admins-success');
    }
    
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.admins.edit-admin', compact('admin'));
    }

    public function update($id)
    {
        $admin = Admin::find($id);

        request()->validate([
            'email' => 'required|string|email|max:255|unique:admins,email,'.$admin->id
        ]);

        $datos = request()->all();
        
        if (!empty(request()->input('password'))) {
            request()->validate(['password' => 'string|min:6|confirmed']);
            $datos["password"] = Hash::make(request()->input('password'));
        } else {
            $datos["password"] = $admin->password;
        }

        $admin->update($datos);

        return redirect('admin/admins')->with('status', 'Admnistrador Actualizado');
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        if ($admin->id!=1) {
            $admin->delete();
        }else{
            abort(403, 'Unauthorized action.');
        }
    	return redirect('admin/admins')->with('status', 'Administrador Eliminado');
    }

}
