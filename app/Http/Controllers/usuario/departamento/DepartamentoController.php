<?php

namespace App\Http\Controllers\usuario\departamento;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartamentoController extends Controller
{
    //
    public function index()
    {
        return view('usuario.departamento.index');
    }

    //guardar los datos
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|unique:departments'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        } else {

            $save = Department::insert(['nombre' => $request->nombre]);
            if ($save) {
                return response()->json([
                    'code' => 1,
                    'msg' => 'Departamento Registrado Correctamente'
                ]);
            }
        }
    }
}
