<!-- Acueductos Start -->
       <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Ubicacion</h6>
                <h1>Explora los acueductos</h1>
            </div>

            @auth
                <a href="{{route('crear_acueductos')}}"class="nav-item nav-link">Registra acueducto</a>
            @endauth

            <div class="row">

                @if($acueductos)
                    @foreach ($acueductos as $acueducto)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="destination-item position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="img/destination-1.jpg" alt="">
                            <a class="destination-overlay text-white text-decoration-none" href="">
                                <h5 class="text-white">{{$acueducto->nombre}}</h5>
                                <span>100 Acueductos</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @endif

                {{-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination-2.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Alta Vista</h5>
                            <span>100 Acueductos</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination-3.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Toro Muerto</h5>
                            <span>100 Acueductos</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination-4.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Villa Bahia</h5>
                            <span>100 Acueductos</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination-5.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">La 45</h5>
                            <span>100 Acueductos</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination-6.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">San Happy</h5>
                            <span>100 Acueductos</span>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
<!-- Acueductos End -->

