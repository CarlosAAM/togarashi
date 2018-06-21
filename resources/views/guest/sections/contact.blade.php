<section id="contacto" class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(https://drive.google.com/uc?id={{ $image->basename }});">
    <h2 class="tit6 t-center">Encuéntranos</h2>
</section>

<!-- Contact form -->
<section class="section-contact bg1-pattern p-t-90 p-b-113">
    <div class="container">
        <div class="map bo8 bo-rad-10 of-hidden">
            <div class="contact-map size37" id="google_map" data-map-x="19.014941" data-map-y="-98.221866" data-pin="{{asset('assets/pato/images/icons/icon-position-map.png')}}" data-scrollwhell="0" data-draggable="1"></div>
        </div>
    </div>

    <div class="container">
        <div class="row p-t-135">
            <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <img src="{{asset('assets/pato/images/icons/map-icon.png')}}" alt="IMG-ICON">
                    </div>

                    <div class="flex-col-l">
                        <span class="txt5 p-b-10">Ubicación</span>

                        <span class="txt23 size38">Av. las Margaritas 527, El Patrimonio, 72450 Puebla, Pue.</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <img src="{{asset('assets/pato/images/icons/phone-icon.png')}}" alt="IMG-ICON">
                    </div>


                    <div class="flex-col-l">
                        <span class="txt5 p-b-10">Llámanos</span>

                        <span class="txt23 size38">01 222 375 3024</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                <div class="dis-flex m-l-23">
                    <div class="p-r-40 p-t-6">
                        <img src="{{asset('assets/pato/images/icons/clock-icon.png')}}" alt="IMG-ICON">
                    </div>


                    <div class="flex-col-l">
                        <span class="txt5 p-b-10">Horarios de apertura</span>

                        <span class="txt23 size38">15:00 – 21:00 <br/>Martes a Sábado</span>
                        <span class="txt23 size38">14:00 – 19:00 <br/>Domingo</span>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="tit7 t-center p-b-62 p-t-105">Envíanos un mensaje</h3>

        <form class="wrap-form-reservation size22 m-l-r-auto" method="POST" action="{{route('guest.contact')}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4">
                    <!-- Name -->
                    <span class="txt9">Nombre</span>

                    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Nombre">
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Email -->
                    <span class="txt9">Correo electrónico</span>

                    <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Correo">
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Phone -->
                    <span class="txt9">Teléfono</span>

                    <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Teléfono">
                    </div>
                </div>

                <div class="col-12">
                    <!-- Message -->
                    <span class="txt9">Mensaje</span>
                    <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Escribe lo que quieras"></textarea>
                </div>
            </div>

            <div class="wrap-btn-booking flex-c-m m-t-13">
                <!-- Button3 -->
                <button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">Enviar</button>
            </div>
        </form>
    </div>
</section>