@extends('admin.dasboard')
@section('content')
<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="row">
            <div>
                <h6 class="mb-4">Show Data Pemilik</h6>
            </div>
            <div>
                <a class="btn btn-outline-success" href="/admin/pemilik/tambah">Tambah</a>
            </div>

        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Foto Profile</th>
                        <th scope="col">nama Lengkap</th>
                        <th scope="col">No Telpon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Opsi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemilik as $item)   
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td style="text-align: left"><img class="rounded shadow-sm" style="height: 30px" src="{{asset('assets/profile/'.$item->fotoProfile)}}" alt="{{$item->fotoProfile}}" id="popup"></td>
                        
                        {{-- <td style="text-align: center"><img class="rounded shadow-sm" style="height: 30px" src="{{asset('assets/tanahs/'.$item->fotoTanah)}}" alt="{{$item->gambar}}"></td> --}}
                        {{-- <td><img class="rounded-circle me-lg-2" src="assets/tanahs/{{$item->fotoDenah}}" alt="" style="width: 40px; height: 40px;"></td> --}}
                        <td>{{$item->namaPemilik}}</td>
                        <td>{{$item->nomerTelpon}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>
                            <form action="/hapus-pemilik/{{$item->id}}" method="POST" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                @csrf
                                <input type="hidden" name="id " value="{{$item->id}}">
                                <a href="{{url('/admin/pemilik/edit/'.$item->id) }}" class="btn btn-outline-success">Edit</a>
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