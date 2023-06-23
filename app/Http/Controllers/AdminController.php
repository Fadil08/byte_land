<?php

namespace App\Http\Controllers;

use App\Models\pemilik;
use App\Models\Tanah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
    public function show()
    {
        $tanah = Tanah::all();
        return view('admin.land',[
            'tanah'=>$tanah,
            'count'=>$tanah->count(),


        ]);
    }
    public function showDasboard()
    {
        $tanah = Tanah::all();
        $user = Auth::user();

        return view('admin.dasboard',[
            'tanah'=>$tanah,
            'nama'=>$user->fotoProfile,
            'fotoProfile'=>$user->fotoProfile,
            // 'count'=> $tanah->count()
        ]);
    }

    public function tambah()
    {
        return view('admin.addland',[
            'pemilik' =>pemilik::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.editland',[
            'tanah' => Tanah::find($id),
            'pemilik' =>pemilik::all()
        ]);
    }

    public function prosesTambah(Request $request)
    {
        // dd($request);
        $validated= $request->validate([
            'fotoTanah' => 'required',
            'fotoDenah' => 'required',
        ]);
        if($validated){
            if($request->hasFile('fotoTanah')){
                $alamat = ("$request->nomerRT/$request->nomerRW/$request->provinsi/$request->kecamatan/$request->desa/$request->dusun");
                // $tanah1=$request->konturTanah;
                // print($tanah1);
                // print($alamat);

                $request->file('fotoDenah')->move('assets/denahTanah/',date('YmdHis') . "." .$request->file('fotoDenah')->getClientOriginalName());
                $request->file('fotoTanah')->move('assets/tanahs/',date('YmdHis') . "." .$request->file('fotoTanah')->getClientOriginalName());        
                $tanah = new Tanah();
                $tanah->luas=$request->luas;
                $tanah->konturTanah=$request->konturTanah;
                $tanah->id_pemilik = $request->id_pemilik;
                $tanah->hak_milik=$request->hak_milik;
                $tanah->alamat= $alamat;
                $tanah->deskripsiTanah=$request->deskripsiTanah;
                $tanah->hargaTanah=$request->harga;
                $tanah->fotoTanah = date('YmdHis') . "." .$request->file('fotoTanah')->getClientOriginalName();
                $tanah->fotoDenah = date('YmdHis') . "." .$request->file('fotoDenah')->getClientOriginalName();
                $tanah->listrik=$request->listrik;
                $tanah->sumberAir=$request->air;
                $tanah->koneksiJaringan=$request->koneksiJaringan;
                $tanah->statusJual=$request->statusJual;
                $tanah->save();
                return redirect('/admin/tanah')->with('message', 'Tanah berhasil diperbarui!');

        }
        }
    }

 

    public function prosesEdit(Request $request)
    {
        $tanah = Tanah::find($request->id);
        $tanah->luas=$request->luas;
        $tanah->konturTanah=$request->konturTanah;
        $tanah->id_pemilik = $request->id_pemilik;
        $tanah->hak_milik=$request->hak_milik;
        $tanah->alamat= $request->alamat;
        $tanah->deskripsiTanah=$request->deskripsiTanah;
        $tanah->hargaTanah=$request->harga;
        $tanah->fotoTanah = date('YmdHis') . "." .$request->file('fotoTanah')->getClientOriginalName();
        $tanah->fotoDenah = date('YmdHis') . "." .$request->file('fotoDanah')->getClientOriginalName();
        $tanah->listrik=$request->listrik;
        $tanah->sumberAir=$request->air;
        $tanah->koneksiJaringan=$request->koneksiJaringan;
        $tanah->statusJual=$request->statusJual;
        $tanah->save();
        return redirect('/admin/pemilik')->with('message', 'Tanah berhasil diperbarui!');
    }
    public function viewEditPemilik($id)
    {
        // $pemilik=>pemilik::all-();
        return view('admin.editpemilik',[
            'pemilik'=>pemilik::find($id)

        ]);
    }

    public function hapus($id)
    
    {
            $tanah = Tanah::find($id);
            // unlink("assets/denahTanah/".$tanah->fotoDenah);
            // unlink("assets/tanahs/".$tanah->fotoDenah);
            $tanah->delete();
            return back();
    }
    public function adminLogin()
    {
        return view('layouts.login');
    }
    public function home()
    {
        return view('layouts.index');
    }
    // public function showMenuAdmin()
    // {
    //     // return view('layouts.index');
    //     return view('admin.dasboard');

    // }
    public function viewAddPemilik()
    {
        return view('admin.addPemilik');
    }
    public function prosesAddPemilik(Request $request)
    {
        // dd($request);
        $validate = $request->validate([
            'fotoProfile'=>'required',   
             ]);
        if($validate) {
            if($request->hasFile('fotoProfile')){
                $request->file('fotoProfile')->move('assets/profile/',date('YmdHis') . "." .$request->file('fotoProfile')->getClientOriginalName());
                $pemilik = new pemilik();
                $pemilik->namaPemilik = $request->namaPemilik;
                $pemilik->nomerTelpon = $request->noTelpPemilik;

                $pemilik->deskripsiDiri = $request->deskripsiDiri;
                $pemilik->alamat = $request->alamat;
                $pemilik->fotoProfile =date('YmdHis') . "." .$request->file('fotoProfile')->getClientOriginalName();
                $pemilik->save();
                return redirect('/admin/pemilik')->with('message', 'Tambah pemilik berhasil!');

            }

        }
    } 
    public function hapusPemilik($id)
    
    {
            $tanah = pemilik::find($id);
            $tanah->delete();
            return back();
    }
    public function editPemilik(Request $request)
    {
        // dd($request);
        $pemilik = Tanah::find($request->id);
        $pemilik->namaPemilik = $request->namaPemilik;
        $pemilik->nomerTelpon = $request->noTelpPemilik;
        $pemilik->deskripsiDiri = $request->deskripsiDiri;
        $pemilik->alamat = $request->alamat;
        $pemilik->fotoProfile =date('YmdHis') . "." .$request->file('fotoProfile')->getClientOriginalName();
        $pemilik->save();
        return back();
    }

    public function showPemilik()
    {
        return view('admin.showPemilik',[
            'pemilik'=> pemilik::all()
        ]);
    }
}
