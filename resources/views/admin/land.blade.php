@extends('admin.dasboard')
@section('content')
<div class="row g-4" style="margin-left: 10px; margin-top:10px" >
    <div class="col-sm-6 col-xl-3">
        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-line fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">Total Tanah</p>
                <h6 class="mb-0">{{$count}}</h6>
            </div>
        </div>
    </div>
</div>
{{-- <br> --}}
<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="row">
        
            <div>
                <h6 class="mb-4">Show  Data Tanah</h6>
            </div>
            <div>
                <a class="btn btn-outline-success" href="/admin/tanah/tambah">Tambah</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Luas</th>
                        <th scope="col">Foto Tanah</th>
                        <th scope="col"> Foto Denah</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tanah as $key => $item)   
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td style="text-align: center"><img class="rounded shadow-sm" style="height: 30px" src="{{asset('assets/denahTanah/'.$item->fotoDenah)}}" alt="{{$item->gambar}}"></td>
                        <td style="text-align: center"><img class="rounded shadow-sm" style="height: 30px" src="{{asset('assets/tanahs/'.$item->fotoTanah)}}" alt="{{$item->gambar}}"></td>
                        {{-- <td><img class="rounded-circle me-lg-2" src="assets/tanahs/{{$item->fotoDenah}}" alt="" style="width: 40px; height: 40px;"></td> --}}
                        <td>{{$item->luas}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>
                            <form action="/hapus-tanah{{$item->id}}" method="POST" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                @csrf
                                <input type="hidden" name="id " value="{{$item->id}}">
                                <a href="{{ url('/admin/tanah/edit/'.$item->id) }}" class="btn btn-outline-success">Edit</a>
                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection