@if(isset($fruta) && is_object($fruta))
    <h1>Editar Fruta</h1>
@else
    <h1>Alta de Frutas</h1>
@endif

<form action="{{isset($fruta) ? action('\App\Http\Controllers\FrutasController@update', ['id'=>$fruta->id]) : action('\App\Http\Controllers\FrutasController@save')}}" method="post">
    {{csrf_field()}}
    <label for="nombre">Nombre:</label> 
    <input type="text" name="nombre" value="{{ isset($fruta->nombre) ? $fruta->nombre : '' }}" />
    </br>
    <label for="descripcion">Descripcion:</label> 
    <input type="text" name="descripcion"  value="{{ isset($fruta->descripcion) ? $fruta->descripcion : '' }}" />
    </br>
    <label for="precio">Precio:</label> 
    <input type="number" name="precio" value="{{ isset($fruta->precio) ? $fruta->precio : 0 }}" />
    </br>
    <input type="submit" value="{{isset($fruta) ? 'Editar' : 'Guardar'}}" />
</form>