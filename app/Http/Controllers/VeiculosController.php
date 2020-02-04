<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculos;

class VeiculosController extends Controller
{
    public function get($id=null){

        if($id){
            $Veiculos = Veiculos::findOrFail($id);
        } else {
            $Veiculos = Veiculos::get();
        }


        return $Veiculos;
    }

    public function create(Request $request){
        $Veiculos = Veiculos::create($request->all());
        return $Veiculos;
    }

    public function update($id, Request $request){
        $Veiculos = Veiculos::find($id);
        $Veiculos->fill($request->all());
        $Veiculos->save();
        return $Veiculos;

    }

    public function delete(Request $request){

    }
}
