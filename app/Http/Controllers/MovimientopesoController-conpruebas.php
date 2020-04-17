<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Movimientopeso;
use App\Cuenta;

class MovimientopesoController extends Controller
{
    public function index()
    {
        $movimientos = Movimientopeso::all();   
        $cuentas = Cuenta::all();
        
        return view('caja.index', compact('movimientos','cuentas'));
        //return view('caja.index', compact('movimientos'));
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movimientopeso  $movimientopeso
     * @return \Illuminate\Http\Response
     */
    public function show(Movimientopeso $movimientopeso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movimientopeso  $movimientopeso
     * @return \Illuminate\Http\Response
     */
    public function edit(Movimientopeso $movimientopeso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movimientopeso  $movimientopeso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimientopeso $movimientopeso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movimientopeso  $movimientopeso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movimientopeso $movimientopeso)
    {
        //
    }
}


//$movimientos = Movimientopeso::orderBy('id', 'DESC')->paginate(5);
        //$movimientos->each(function($movimientos){$movimientos->nombre_cuenta;});
        //return view("empleado.lista", compact('empleado'));
        //return view('caja.index', compact('movimientos'));
        //return view('caja.index', compact('$movimientos'));
        //return view('caja.index', $movimientos));
        //return view('caja.index')->with('movimientos',$movimientos);
        //return view('empleados.index',$datos);
        //return view('admin.trabajadores.index', compact('trabajadores'));
        //return view('caja.index');