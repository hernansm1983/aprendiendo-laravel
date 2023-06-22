<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrutasController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')->get();
        
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
}
