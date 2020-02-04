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

        return response($Veiculos,200);
    }

    public function create(Request $request){
        $Veiculos = Veiculos::create($request->all());
        return response($Veiculos,200);
    }

    public function update($id, Request $request){
        $Veiculos = Veiculos::find($id);
        $Veiculos->fill($request->all());
        $Veiculos->save();
        return response($Veiculos,200);

    }

    public function delete($id, Request $request){
        $Veiculos = Veiculos::where('id',$id)->delete();
        return response($Veiculos, 200);
    }
}
