<!-- Acueductos Start -->
       <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Ubicacion</h6>
                <h1>Explora los acueductos</h1>
            </div>

            @auth
            <div class="row flex-row justify-end px-3 gap-3">
                <a href="{{route('crear_acueductos')}}"class="nav-item nav-link px-2 py-1 text-xs text-white rounded-md flex mt-4 w-[100vsh] bg-blue-500">Registra un acueducto</a>
            </div>
            @endauth

            <div class="row">
                {{-- {{dd($acueductos[0]->imagenesAcueductos[0]->nombre)}} --}}
                @if($acueductos)
                    @foreach ($acueductos as $acueducto)
                    {{-- {{dd($acueducto->imagenesAcueductos->first()->nombre)}} --}}
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="destination-item position-relative overflow-hidden mb-2">
                            {{-- @for ()

                            @endfor --}}
                            <img class="img-fluid" src="{{asset('storage/'.$acueducto->imagenesAcueductos->first()->nombre)}}" alt="">
                            <a class="destination-overlay text-white text-decoration-none" href="">
                                <h5 class="text-white">{{$acueducto->nombre}}</h5>
                            </a>
                        </div>
                        @auth
                            <div class="row flex-row justify-end px-3 gap-3">
                                {{-- Boton actualizar. --}}
                                <a href="{{route('edit_acueducto', $acueducto)}}" class="bg-green-500 px-2 py-1 text-xs text-white rounded-md flex mt-4 w-[100vsh]">Actualizar</a>
                                {{-- Boton eliminar. --}}
                                <form action="{{route('destroy_acueducto', $acueducto)}}" method="post" class="flex mt-4 w-[100vsh]">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 px-2 py-1 text-xs text-white rounded-md">Borrar</button>
                                </form>
                            </div>
                        @endauth
                    </div>
                    @endforeach
                @endif

                {{-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ url('storage/'.$acueducto->imagenesAcueductos->first()->nombre)}}img/destination-2.jpg" alt="">
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

