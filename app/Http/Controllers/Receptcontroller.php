<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Receptcontroller extends Controller
{
    public function index(){
        $recept =  Recept::all();
        return $recept;
    }

    public function show($nev,$kat_id,$kep_eleresi_ut,$leiras,)
    {
        $rec = Recept::where('nev', $nev)
                                ->where('kat_id', $kat_id)
                                ->where('kep_eleresi_ut', $kep_eleresi_ut)
                                ->where('leiras', $leiras)
                                ->get();
        return $rec[0];   
    }
    public function destroy($id)
    {
        Recept::find($id)->delete();
    }

    public function store(Request $request)
    {
        $rec = new Recept();
        $rec->nev = $request->nev;
        $rec->kat_id = $request->kat_id;
        $rec->kep_eleresi_ut = $request->kep_eleresi_ut;
        $rec->leiras = $request->leiras;
        $rec->save();
    }

    public function update(Request $request, $id)
    {
        $rec = Recept::find($id);
        $rec->nev = $request->nev;
        $rec->kat_id = $request->kat_id;
        $rec->kep_eleresi_ut = $request->kep_eleresi_ut;
        $rec->leiras = $request->leiras;
        $rec->save();
    }

    public function minden(){
        $rec = DB::select(DB::raw("
        select *
        from recepts , kategorias
        where recepts.kat_id = kategorias.id
        "));
        return $rec;
    }

    public function kategoriak(){
        $rec = DB::select(DB::raw("
        select *
        from recepts , kategorias
        where recepts.kat_id = kategorias.id
        and kategorias.nev like 'leves'
        "));
        return $rec;
    }
}
