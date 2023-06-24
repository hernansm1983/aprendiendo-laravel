<h1>{{$fruta->nombre}}</h1>

<p>
   {{$fruta->descripcion}} 
</p>

</br>
<a href="{{action('\App\Http\Controllers\FrutasController@delete', ['id' => $fruta->id])}}">Borrar</a>
</br>
<a href="{{action('\App\Http\Controllers\FrutasController@edit', ['id' => $fruta->id])}}">Actualizar</a>