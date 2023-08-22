<?php

namespace App\Http\Controllers\usuario\menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index()
    {
        return view('usuario.menu.index');
    }
}
