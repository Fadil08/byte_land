@extends('layouts.index')
@section('products')
<div class="row">
        @foreach ($tanah as $item)
        <div class="col-lg-4 col-sm-6 mb-4">            
            <div class="portfolio-item">
                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <div class="container">
                        
                    </div>
                    <div class="row">
                        <img class="img-fluid" src="{{Url('tanahs/'.$item->fotoTanah)}}" alt="..." />
                        <img class="img-fluid" src="{{Url('tanahs/'.$item->fotoTanah)}}" alt="..." />
                    </div>
                </a>
                <div class="portfolio-caption">
                    <div class="portfolio-caption-heading">$item->statusJual</div>
                    <div class="portfolio-caption-subheading text-muted">$item->hargaTanah</div>
                </div>
            </div>
        </div>
        @endforeach

</div>
@endsection


