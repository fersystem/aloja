<?php
namespace App\Http\Controllers;
use App\Movimientopeso;
use App\Cuenta;
use Illuminate\Http\Request;

class MovimientopesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = Movimientopeso::all();                         //OK pero no lleva datos relacionados
        $cuentas = Cuenta::all();                                       //NO FUNKA
        //return $movimientos->toArray();
        //$movimientos = Movimientopeso::paginate(3);                      //OK pero no lleva datos relacionados
        //$movimientos = Movimientopeso::with('cuenta')->first();         //OK pero sin foreach, de a uno
        //$movimientos = Movimientopeso::with('cuenta')->find(1);         //OK pero solo muestra el id de find(x)
        //$movimientos = Movimientopeso::with('cuenta');                  //
        //$movimientos = App\Movimientopeso::with('cuenta')->first()    //NO FUNKA
        //$movimientos = App\Movimientopeso::with('cuenta')->get(1);       //NO FUNKA
        //$movimientos = App\Movimientopeso::get('cuenta');       //NO FUNKA
        //$cuenta=Movimientopeso::all()->first()->cuenta->nombre_cuenta;      //OK pero solo pasa cuenta en dd($cuenta)
        
        
        
        //($movimientos, $cuenta);
        //dd($cuentas);
        //dd($movimientos);
        
        
        return view('caja.index', compact('movimientos','cuentas'));
        //return view('caja.index', compact('movimientos'));
        

        /*
        $datos['movimientos']=Movimientopeso::paginate(15);
        return view('caja.index',$datos);
        
        dd($movimientos);
        */
        
        //$movimientos = Movimientopeso::all();
        //$movimientos = Movimientopeso::all()->first();
        //$cuenta = Movimientopeso::all()->first()->cuenta->nombre_cuenta;
        /*
        $movimientos ->each(function($movimientos){
            $movimientos->nombre_cuenta;
        });
        */
        //dd($movimientos);
        //dd($cuenta);
        // return view('caja.index')->with('movimientos',$movimientos);
        
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