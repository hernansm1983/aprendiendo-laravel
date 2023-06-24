<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrutasController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')
                    ->orderBy('id', 'DESC')
                    ->get();
        
        return view('frutas.index', [
            'frutas' => $frutas
        ]);
    }
    
    
    public function detail($id){
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();
        
        //var_dump($fruta);
        
        return view('frutas.detalle', [
            'fruta' => $fruta
        ]);
    }
    
    
    public function create(){
        return view('frutas.create');
    }
    
    
    public function save(Request $request){
        //guardar el registro
        $fruta = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d')
        ));
        
        return redirect()->action([FrutasController::class, 'index'])
                ->with('status', 'Fruta Creada correctamente');
    }
    
    
    public function delete($id){
        $fruta = DB::table('frutas')->where('id', '=', $id)->delete();
        
        return redirect()->action([FrutasController::class, 'index'])
                ->with('status', 'Fruta Eliminada correctamente');
    }
    
    
    public function edit($id){
        //obtener el registro de la db
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();
        
        // pasarle a la vista el objeto y rellenar el formulario
        return view('frutas.create', [
            'fruta'=>$fruta
        ]);
    }
    
    
    public function update(Request $request){
        $fruta = DB::table('frutas')->where('id', '=', $request->id)->update(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio')
        ));
        
        return redirect()->action([FrutasController::class, 'index'])->with('status', 'La Fruta ha sido editada correctamente');
    }
}
