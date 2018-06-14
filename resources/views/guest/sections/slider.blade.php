<!-- Slide1 -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            @foreach($images as $image)
                <div class="item-slick1 item1-slick1" style="background-image: url({{ asset(str_replace('public', 'storage', $image)) }}">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        @switch(($loop->index)%3)
                            @case(0)
                                <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">Bienvenido a</span>
                                <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">Togarashi</h2>

                                @break;
                            @case(1)
                                <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">Échale un vistazo a nuestro menú</span>
        
                                <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                                    <a href="{{ route('guest.menu')}}" class="btn1 flex-c-m size1 txt3 trans-0-4">Ver Menú</a>
                                </div>
                                @break
                            @case(2)
                                <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">Revisa nuestra galería</span>
        
                                <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                                    <a href="{{ route('guest.gallery')}}" class="btn1 flex-c-m size1 txt3 trans-0-4">Ver Galería</a>
                                </div>
                                @break
                        @endswitch
                    </div>
                </div>
            @endforeach
        </div>

        <div class="wrap-slick1-dots"></div>
    </div>
</section>