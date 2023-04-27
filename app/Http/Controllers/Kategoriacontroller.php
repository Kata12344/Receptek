<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategoria;
use Illuminate\Http\Request;

class Kategoriacontroller extends Controller
{
    
public function index(){
        $kategoria =  Kategoria::all();
        return $kategoria;
    }

    public function show($id, $nev)
    {
        $kateg = Kategoria::where('id', $id)
                                ->where('nev', $nev)
                                ->get();
        return $kateg[0];   
    }
    public function destroy($id)
    {
        Kategoria::find($id)->delete();
    }

    public function store(Request $request)
    {
        $kateg = new Kategoria();
        $kateg->id = $request->id;
        $kateg->nev = $request->nev;
        $kateg->save();
    }

    public function update(Request $request, $id)
    {
        $kateg = Kategoria::find($id);
        $kateg->id = $request->id;
        $kateg->nev = $request->nev;
        $kateg->save();
    }

}
