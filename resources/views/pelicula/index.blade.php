<h1>{{$titulo}}</h1>
<p>(Accion index del controlador PeliculaController)</p>

@if(isset($pagina))
    <h3>La pagina es: {{$pagina}}</h3>
@endif

<a href="{{action('\App\Http\Controllers\PeliculaController@detalle')}}">Ir a Detalle</a>

<br/>

<a href="{{route('pelicula.detalle')}}">Ir a Detalle (route)</a>