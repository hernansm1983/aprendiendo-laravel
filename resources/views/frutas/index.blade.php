<h1>Listado de Frutas</h1>
@if(session('status'))
    {{session('status')}}
@endif
</br>
<a href="{{action('\App\Http\Controllers\FrutasController@create');}}">Crear</a>
</br>
<ul>
    @foreach($frutas as $fruta)
    <li><a href="{{action('\App\Http\Controllers\FrutasController@detail', ['id'=>$fruta->id])}}">{{$fruta->nombre}}</a></li>
    @endforeach
</ul>