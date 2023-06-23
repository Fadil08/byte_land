<?php

namespace App\Http\Controllers;

use App\Models\pemilik;
use App\Models\Tanah;
use Illuminate\Http\Request;

class jualTanahControler extends Controller
{
    public function viewproduct()
    {
        return view('layouts.product',[
            'tanah' => Tanah::all()
            // 'contact' => pemilik::all(),
        ]);
    }
}
