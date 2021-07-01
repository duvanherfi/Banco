<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transferencia;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class TransferenciaController extends Controller
{

    public function create(Request $request)
    {
        $data = [];
        $cuentas = Auth::user()->cuentas;


        echo $request->modo === 'propias' ;
        if($request->modo === 'propias'){
            $cuentas2 = Auth::user()->cuentas()->where('propia',true)->get();
            $data = [
                'cuentas'=> $cuentas,
                'cuentas2' => $cuentas2
            ];
        }else if($request->modo === 'externas'){
            $cuentas2 = Cuenta::where('user_id', '<>', Auth::user()->id)->get();
            $data = [
                'cuentas'=> $cuentas,
                'cuentas2' => $cuentas2
            ];
        }
        return view('transferencia/registrar', $data);
    }

    public function store(Request $request){
        $request->validate([
            'monto' => 'required|numeric|min:0',
            'cuenta_origen_id' => 'required|numeric|different:cuenta_destino_id',
            'cuenta_destino_id' => 'required|numeric',
        ]);
        $cuenta = Cuenta::find($request->cuenta_origen_id);
        if($request->monto > $cuenta->saldo){
            throw ValidationException::withMessages([
                'saldo' => 'Usted no cuenta con saldo sufuciente para realizar una transferencia',
            ]);
        }

        $tranferencia = Transferencia::create([
            'monto' => $request->monto,
            'cuenta_origen_id' => $request->cuenta_origen_id,
            'cuenta_destino_id' => $request->cuenta_destino_id,
        ]);

        Auth::user()->Transferencias()->attach($tranferencia->id);

        $tranferencia->cuenta_origen->saldo -= $tranferencia->monto;
        $tranferencia->cuenta_destino->saldo += $tranferencia->monto;
        $tranferencia->cuenta_destino->save();
        $tranferencia->cuenta_origen->save();

        Session::flash('message','Transferencia realizada');
        return  redirect()->route('inicio');
    }

    public function index(Request $request)
    {
        $transferencias = Auth::user()->transferencias;
        return view('transferencia.index', ['transferencias' => $transferencias]);
    }
}
