@extends('admin.dasboard')
@section('content')
<form action="/tambah-tanah" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add Land</h6>
                    @csrf
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Luas</label>
                        <input name="luas" type="text" min="0" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">kontur Tanah</label>
                        <input name="konturTanah" type="text" min="0" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Hak Milik</label>
                        <input name="hak_milik" type="text" min="0" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Pemilik</label>
                        <input name="namaPemilik" type="text" class="form-control" id="exampleInputPassword1" >
                    </div> --}}
                    {{-- <div class="mb-3">
                        <select name="pemilik_id" class="form-select">
                            <option selected>Pilih Kategori</option>
                            @foreach ($pemilik as $item)   
                            <option value="{{$item->id}}">{{$item->namaPemilik}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01"> Nama Pemilik</label>
                        <select class="form-select" id="inputGroupSelect01" name="id_pemilik">
                            <option selected>Choose...</option>
                            {{-- <option selected, name= "koneksiJaringan"></option> --}}
                            @foreach ($pemilik as $item)   
                            <option value="{{$item->id}}">{{$item->namaPemilik}}</option>
                            @endforeach
                    <div class="mb-3">
                        <label for="text" class="form-label">Hak Milik</label>
                        <input name="judul" type="text" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">provinsi</label>
                        <input  name="provinsi" type="text" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kabupaten</label>
                        <input  name="kabupaten" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">kecamatan</label>
                        <input  name="kecamatan" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Desa</label>
                        <input  name="desa" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-text">Dusun</span>
                        <input type="text" aria-label="First name" class="form-control" name="dusun">
                        <span class="input-group-text">RT</span>
                        <input type="text" aria-label="First name" class="form-control" name='nomerRT'>
                        <span class="input-group-text">RW</span>
                        <input type="text" aria-label="First name" class="form-control" name="nomerRW">
                    </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary rounded h-100 p-4">
                        {{-- <h6 class="mb-4">Add Land</h6> --}}
                        {{-- <form action="/tambah-tanah" method="POST"> --}}
                            @csrf
                            
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Tanah</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsiTanah"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">harga</label>
                                <input name="harga" type="text" class="form-control" id="text",>
                            </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">foto Tahah</label>
                        <input class="form-control bg-dark" type="file" id="formFile" name="fotoTanah">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">foto Denah</label>
                        <input class="form-control bg-dark" type="file" id="formFile" 
                        name="fotoDenah" >
                    </div>
                    <label for="exampleFormControlTextarea1">Fasilitas</label>
                    <div class="row">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Listrik</label>
                            <select class="form-select" id="inputGroupSelect01" name="listrik" > 
                            {{-- <option selected  >Choose...</option> --}}
                            {{-- <option selected, name= "listrik" ></option> --}}
                            <option value="Terjangkau">Terjangkau</option>
                            <option value="TidakTerjangkau">Tidak Terjangkau</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Air</label>
                            <select class="form-select" id="inputGroupSelect01" name="air">
                            <option selected>Choose...</option>
                            {{-- <option selected, name= "Air"></option> --}}
                            <option value="Pemerintah">Pemerintah</option>
                            <option value="Sumur">Sumur</option>
                        
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Jaringan</label>
                            <select class="form-select" id="jaringan" name="koneksiJaringan">
                            <option selected>Choose...</option>
                            {{-- <option selected, name= "jaringan"></option> --}}
                            <option value="terjangkau">Terjangkau</option>
                            <option value="tidakTerjangkau">Tidak Terjangkau</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">status Jual</label>
                            <select class="form-select" id="inputGroupSelect01" name="statusJual">
                                <option selected>Choose...</option>
                                {{-- <option selected, name= "koneksiJaringan"></option> --}}
                                <option value="Terbatas">Terbatas</option>
                                <option value="Terjual">Terjual</option>
                                {{-- console.log(jaringan); --}}
                            </select>
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>


</form>
<script>
    // ('#inputGroupSelect01').change(function () {
    //     var selectedItem = $('.selectpicker').val();
    //     alert(selectedItem);
    //     console.log(selectedItem);
    // });
    console.log(jaringan);
</script>
@endsection