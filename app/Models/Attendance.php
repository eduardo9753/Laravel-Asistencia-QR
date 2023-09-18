<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_ingreso',
        'fecha_salida',
        'hora_ingreso',
        'hora_salida',
        'tardanza',
        'employee_id',
        'user_id'
    ];

    protected $casts = [
        'fecha_ingreso' => 'date_format:d/m/yyyy',
        'fecha_salida' => 'date_format:d/m/yyyy',
    ];
}
