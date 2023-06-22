<h1>Listado de Frutas</h1>

<ul>
    @foreach($frutas as $fruta)
    <li><a href="{{action('\App\Http\Controllers\FrutasController@detail', ['id'=>$fruta->id])}}">{{$fruta->nombre}}</a></li>
    @endforeach
</ul>