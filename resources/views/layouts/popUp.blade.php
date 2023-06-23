@extends('layouts.index')
@section('product')
<div class="portfolio-modal modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
    <form action="/" method="POST">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">{{$tanah->luas}}</h2>
                            <p class="item-intro text-muted">{{$tanah->alamat}}</p>
                            <img class="img-fluid d-block mx-auto" src="{{asset('assets/tanahs/'.$tanah->fotoTanah)}}" alt="..." />
                            <p>{{$tanah->deskripsiTanah}}</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    Explore
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Graphic Design
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" >
                                <i class="fas fa-xmark me-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection