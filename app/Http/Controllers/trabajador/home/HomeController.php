<?php

namespace App\Http\Controllers\trabajador\home;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    public function index()
    {
        return view('trabajador.home.index');
    }

    public function fetchTrabajador(Request $request)
    {
        $employee = Employee::join('departments', 'departments.id', '=', 'employees.departament_id')
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
            ->where('employees.documento', '=', 76395743)
            ->first();

        //echo $request->respuesta; //dd($employee);    
        $data = view('trabajador.home.employee-data', [
            'employee' => $employee
        ])->render();

        //contamos si hay registro si no registramos uno nuevo
        $row = Attendance::where('employee_id', '=', $employee->id)->count();

        //dd($data); si nos devuelve 0, insertamos nuevo registro
        if ($row == 0) {
            $save = Attendance::insert([
                'fecha_ingreso' => Date('Y-m-d'),
                'hora_ingreso' => Date('H:i:s'),
                'tardanza' => '',
                'employee_id' => $employee->id,
                'user_id' => 1 //auth()->user()->id lo usamos siempre y cuando estemos 
            ]);                //autenticado en nuestro caso sera el id unico del user                  
            if ($save) {
                return response()->json([
                    'code' => 1,
                    'result' => $data
                ]);
            }
        } else if ($row == 1) { //si nos devuelve 1, actulizar ese registro con la fecha de salida
            $attendance = Attendance::where('employee_id', '=', $employee->id)->first();
            $data_update = Attendance::find($attendance->id); //ayuda para poder actualizar el modelo por id

            if (isset($attendance->fecha_ingreso) && isset($attendance->fecha_salida)) {
                return response()->json([
                    'code' => 0,
                    'result' => $data
                ]);
            } else {
                $save = $data_update->update([
                    'fecha_salida' => Date('Y-m-d'),
                    'hora_salida' => Date('H:i:s'),
                    'employee_id' => $employee->id,
                    'user_id' => 1 //auth()->user()->id lo usamos siempre y cuando estemos 
                ]);                //autenticado en nuestro caso sera el id unico del user                  
                if ($save) {
                    return response()->json([
                        'code' => 2,
                        'result' => $data
                    ]);
                }
            }
        }
    }
}
