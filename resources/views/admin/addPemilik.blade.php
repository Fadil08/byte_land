@extends('admin.dasboard')
@section('content')
<form action="/tambah-pemilik" method="POST" enctype="multipart/form-data">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add Daftart Pemilik</h6>
                    @csrf
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Nama Pemilik</label>
                        <input name="namaPemilik" type="text" min="0" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">No Telpon</label>
                        <input name="noTelpPemilik" type="text" min="0" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat Lengkap</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Diri</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsiDiri"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">foto Profile</label>
                        <input class="form-control bg-dark" type="file" id="formFile" name="fotoProfile">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    


</form>

@endsection