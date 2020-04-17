<h1>Listado movimientos de caja</h1>
<br>
<br>

  <table class="table table-light" border="1">
    <thead class="thead-light">
        <tr>
            <th>id movimiento</th>
            <th>fecha</th>
            <th>concepto</th>
            <th>Nombre Cuenta</th>
            <th>Cliente</th>
            <th>Obs</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movimientopeso as $movimiento)
        <tr>
          <td>{{ $movimiento->id }}</td>
          <td>{{ $movimiento->fecha_movimiento }}</td>
          <td>{{ $movimiento->concepto}}</td>
          <td>
          @foreach($cuentas as $cuenta)
              @if( $movimiento->cuenta_id == $cuenta->id )
              {{ $cuenta->nombre_cuenta }}
              @endif
            @endforeach
          </td><td>
          @foreach($clientes as $cliente)
              @if( $movimiento->cliente_id == $cliente->id )
              {{ $cliente->nombre_cliente }}
              @endif
            @endforeach
          </td>
          <td>{{ $movimiento->obs_movimiento_pesos }}</td>
        </tr>
        @endforeach<br>
    </tbody>
  </table>
    
@foreach($movimientopeso as $movimiento)
  <br>  id m: {{ $movimiento->id }}- - - 
        cuenta_id: {{ $movimiento->cuenta_id }}- - - 
        Concepto: {{ $movimiento->concepto }} 
  

            @foreach($cuentas as $cuenta)
              @if( $movimiento->cuenta_id == $cuenta->id )
              /////////// id m: {{ $movimiento->cuenta_id }}- - -
              id c: {{ $cuenta->id }} - - - 
              NC: {{ $cuenta->nombre_cuenta }}
              @endif
            @endforeach
            <br>
@endforeach


<br><br><br><br>

@foreach($cuentas as $cuenta)
  <br>id cuenta: {{ $cuenta->id }}- - - Nombre cuenta: {{ $cuenta->nombre_cuenta }}- - - 
  <br> 
@endforeach


<br>
<br>
<br>

