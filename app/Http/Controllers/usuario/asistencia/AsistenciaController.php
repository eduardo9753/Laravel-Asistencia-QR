<?php

namespace App\Http\Controllers\usuario\asistencia;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    //asistencia de los trabajadores por id
    public function index(Request $request)
    {
        //echo $request->id;
        return view('usuario.asistencia.index', [
            'empleyee_id' => $request->id
        ]);
    }

    //funcion para pintar las asistencias por id de un trabajador
    public function show($id)
    {
        $employee = Employee::join('departments', 'departments.id', '=', 'employees.departament_id')
            ->join('positions', 'positions.id', '=', 'employees.position_id')
            ->join('attendances', 'attendances.employee_id', '=', 'employees.id')
            ->select(
                'employees.id',
                'employees.nombres as title',
                'employees.apellidos',
                'employees.documento',
                'employees.edad',
                'attendances.fecha_ingreso as start',
                'attendances.fecha_salida as end',
                'attendances.hora_ingreso',
                'attendances.hora_salida',
                'attendances.tardanza',
                'departments.nombre as nombreDepartamento',
                'positions.nombre as nombrePosicion'
            )
            ->where('employees.id', '=', $id) //2
            ->get();

        //dd($employee);
        return response()->json($employee,200,[]);
    }
}
