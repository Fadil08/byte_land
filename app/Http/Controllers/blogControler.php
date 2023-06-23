<?php

namespace App\Http\Controllers;

use App\Models\pemilik;
use App\Models\Tanah;
use Illuminate\Http\Request;

class blogControler extends Controller
{
    public function showpopUp($id)
    {
        $tanah = Tanah::find($id);
        return view('layouts.popUp',
    [
        'tanah'=> $tanah,
        'pemilik'=>pemilik::where('id_pemilik',$tanah->pemilik)->first(),
    ]);
    }
    public function showDetails($id)

    {
        return view('layouts.details',[
            'tanah' => Tanah::find($id)
        ]);
    }
}
