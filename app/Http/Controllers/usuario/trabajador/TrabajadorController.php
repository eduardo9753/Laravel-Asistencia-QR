<?php

namespace App\Http\Controllers\usuario\trabajador;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrabajadorController extends Controller
{
    //
    public function index()
    {
        $departaments = Department::all();
        $positions = Position::all();
        $employees = Employee::join('departments', 'departments.id', '=', 'employees.departament_id')
            ->join('positions', 'positions.id', '=', 'employees.position_id')
            ->select(
                'employees.id',
                'employees.nombres',
                'employees.apellidos',
                'employees.documento',
                'employees.edad',
                'departments.nombre as nombreDepartamento',
                'positions.nombre as nombrePosicion'
            )
            ->get();
        return view('usuario.trabajador.index', [
            'departaments' => $departaments,
            'positions' => $positions,
            'employees' => $employees
        ]);
    }

    //guardar datos
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombres' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'documento' => 'required',
            'departament_id' => 'required',
            'position_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        } else {
            $save = Employee::insert([
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'edad' => $request->edad,
                'documento' => $request->documento,
                'departament_id' => $request->departament_id,
                'position_id' => $request->position_id,
            ]);

            if ($save) {
                return response()->json([
                    'code' => 1,
                    'msg' => 'Trabajador Registrado Correctamente'
                ]);
            }
        }
    }
}
