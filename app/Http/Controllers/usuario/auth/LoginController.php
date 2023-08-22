<?php

namespace App\Http\Controllers\usuario\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('usuario.auth.login');
    }

    public function store(Request $request)
    {
        //validaciones
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //autenticacion con la base de datos
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Revisa nuevamente sus credenciales :)');
        }

        //redireccionamos al menu principal
        return redirect()->route('usuario.menu.index');
    }
}
