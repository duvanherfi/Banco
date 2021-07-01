<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CuentaController extends Controller
{
    public function index(Request $request)
    {
        $cuentas = Auth::user()->cuentas;
        return view('cuenta.index', ['cuentas' => $cuentas]);
    }
}
