@extends('guest.layouts.master')

@section('content')
    <!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(https://drive.google.com/uc?id={{ $image->basename }});">
		<h2 class="tit6 t-center">
			Menú
		</h2>
	</section>

    <!-- Main menu -->
    @foreach($categories as $category)
        <section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
            <div class="header-mainmenu parallax0 parallax100" style="margin-bottom: 60px; background-image: url(https://drive.google.com/uc?id={{ $category->image }});">
                <div class="bg1-overlay t-center p-t-170 p-b-165">
                    <h2 class="tit4 t-center">{{ $category->name }}</h2>
                </div>
            </div>

            <div class="container">
                <div class="row">
                        
                    @foreach($category->subcategories as $subcategory)
                        <div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
                            <div class="wrap-item-mainmenu p-b-22">
                                <h3 class="tit-mainmenu tit10 p-b-25">{{ $subcategory->name }}</h3>
                                
                                @foreach($subcategory->dishes as $dish)
                                    <!-- Item mainmenu -->
                                    <div class="item-mainmenu m-b-36">
                                        <div class="flex-w flex-b m-b-3">
                                            <a href="#" class="name-item-mainmenu txt21">{{ $dish->name }}</a>

                                            <div class="line-item-mainmenu bg3-pattern"></div>

                                            <div class="price-item-mainmenu txt22">{{ $dish->price }}</div>
                                        </div>

                                        <span class="info-item-mainmenu txt23">{{ $dish->description }}</span>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endforeach
@endsection