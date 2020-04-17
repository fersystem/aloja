<h1>Listado cuentas</h1>
<br>
<br>

@foreach($cuentas as $cuenta)
<li>{{ $cuenta->nombre_cuenta}}</li>
@endforeach

