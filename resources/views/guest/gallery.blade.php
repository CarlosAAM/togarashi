@extends('guest.layouts.master')

@section('content')
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(https://drive.google.com/uc?id={{ $image->basename }});">
        <h2 class="tit6 t-center">Galería</h2>
    </section>

    <!-- Gallery -->
    <div class="section-gallery p-t-118 p-b-100">
        <div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
            <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">Todas</button>
        </div>

        <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
            
            @foreach($images as $image)
                <!-- Image -->
                <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom">
                    <img src="https://drive.google.com/uc?id={{ $image->basename }}" alt="IMG-GALLERY">

                    <div class="overlay-item-gallery trans-0-4 flex-c-m">
                        <a class="btn-show-gallery flex-c-m fa fa-search" href="https://drive.google.com/uc?id={{ $image->basename }}" data-lightbox="gallery"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection