<?php

namespace App\Http\Controllers\usuario\posicion;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PosicionController extends Controller
{
    //
    public function index()
    {
        return view('usuario.posicion.index');
    }

    //guardar informacion
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|unique:positions'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        } else {
            $save = Position::insert(['nombre' => $request->nombre]);
            if ($save) {
                return response()->json([
                    'code' => 1,
                    'msg' => 'Posicion Registrado Correctamente'
                ]);
            }
        }
    }
}
