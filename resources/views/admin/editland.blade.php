@extends('admin.dasboard')
@section('content')
<form action="/tambah-tanah" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Edit Land</h6>
                    @csrf
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Luas</label>
                        <input name="luas" type="text" min="0" class="form-control" id="exampleInputEmail1" value="{{$tanah->luas}}"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">kontur Tanah</label>
                        <input name="konturTanah" type="text" min="0" class="form-control" id="exampleInputEmail1" value="{{$tanah->konturTanah}}"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Hak Milik</label>
                        <input name="hak_milik" type="text" min="0" class="form-control" id="exampleInputEmail1" value="{{$tanah->hak_milik}}"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01"> Nama Pemilik</label>
                        <select class="form-select" id="inputGroupSelect01" name="id_pemilik">
                            @foreach ($pemilik as $item)   
                            <option selected>{{$item->namaPemilik}}</option>
                            {{-- <option selected, name= "koneksiJaringan"></option> --}}
                            <option value="{{$item->id}}">{{$item->namaPemilik}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">provinsi</label>
                        <input  name="alamat" type="text" class="form-control" id="exampleInputPassword1" value="{{$tanah->alamat}}" >
                    </div>                   
                    {{-- </div> --}}
            </div>
        </div>
            
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                @csrf  
                <div class="mb-3">
                    <label for="ukuran" class="form-label">Deskripsi Tanah</label>
                    <input name="deskripsiTanah" type="text" min="0" class="form-control" id="exampleInputEmail1" value="{{$tanah->deskripsiTanah}}"
                        aria-describedby="emailHelp">
                </div> 
                {{-- <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Tanah</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsiTanah" value="{{$tanah->deskripsiTanah}}" ></textarea> --}}
                {{-- </div> --}}
                <div class="mb-3">
                    <label for="text" class="form-label">harga</label>
                    <input name="harga" type="text" class="form-control" id="text" value="{{$tanah->hargaTanah}}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">foto Tahah</label>
                    <input class="form-control bg-dark" type="file" id="formFile" name="fotoTanah" value="fotoTanah">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">foto Denah</label>
                    <input class="form-control bg-dark" type="file" id="formFile"  value="fotoDenah"
                    name="fotoDenah" >
                </div>
                    <label for="exampleFormControlTextarea1">Fasilitas</label>
                
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Listrik</label>
                    <select class="form-select" id="inputGroupSelect01" name="listrik" > 
                    <option selected  >{{$tanah->listrik}}</option>
                    {{-- <option selected, name= "listrik" ></option> --}}
                    <option value="Terjangkau">Terjangkau</option>
                    <option value="TidakTerjangkau">Tidak Terjangkau</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Air</label>
                    <select class="form-select" id="inputGroupSelect01" name="air">
                        <option selected>{{$tanah->sumberAir}}</option>
                        {{-- <option selected, name= "Air"></option> --}}
                        <option value="Pemerintah">Pemerintah</option>
                        <option value="Sumur">Sumur</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Jaringan</label>
                    <select class="form-select" id="jaringan" name="koneksiJaringan">
                    <option selected >{{$tanah->koneksiJaringan}}<option>
                    {{-- <option selected, name= "jaringan"></option> --}}
                    <option value="terjangkau">Terjangkau</option>
                    <option value="tidakTerjangkau">Tidak Terjangkau</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">status Jual</label>
                    <select class="form-select" id="inputGroupSelect01" name="statusJual">
                        <option selected>{{$tanah->statusJual}}</option>
                        {{-- <option selected, name= "koneksiJaringan"></option> --}}
                        <option value="Terbatas">Terbatas</option>
                        <option value="Terjual">Terjual</option>
                        {{-- console.log(jaringan); --}}
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            
        </div>
       
    </div>


</form>

@endsection