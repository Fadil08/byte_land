@extends('admin.dasboard')
@section('content')
<form action="/edit-pemilik" method="POST" enctype="multipart/form-data">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Edit Data Pemilik</h6>
                    @csrf
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Nama Pemilik</label>
                        <input name="namaPemilik" type="text"  class="form-control" id="exampleInputEmail1" value="{{$pemilik->namaPemilik}}"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">No Telpon</label>
                        <input name="noTelpPemilik" type="text"  class="form-control" id="exampleInputEmail1" value="{{$pemilik->nomerTelpon}}"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat Lengkap</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" value="{{$pemilik->alamat}}"> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Diri</label>
                        {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsiDiri"></textarea> --}}
                        <input name="deskripsiDiri" type="text" class="form-control" id="exampleInputPassword1" value="{{$pemilik->deskripsiDiri}}"> 
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">foto Profile</label>
                        <input class="form-control bg-dark" type="file" id="formFile" name="fotoProfile" value="{{$pemilik->fotoProfile}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">edit</button>
                </form>
            </div>
        </div>
</form>

@endsection