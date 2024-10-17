@extends('components.layout')

@section('content')
    <!-- Detalle acueductos Start -->
        <div class="class= container-fluid py-5 flex mt-4 w-[100vsh] justify-center">

            <div class="flex items-center">
                <a href="{{route('index_acueducto')}}" class="mb-2 text-x text-blue-500 gap-3">&larr;</a>
            </div>

            <div class="flex items-center">
                <div class="flex flex-col gap-3">
                    <div class="mb-3">
                        <div class="row">
                            @if($acueducto->imagenesAcueductos)
                                @foreach ($acueducto->imagenesAcueductos as $imagenAcueducto)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="destination-item position-relative overflow-hidden mb-2">
                                        <img class="img-fluid" src="{{asset('storage/'.$imagenAcueducto->nombre)}}" alt="">
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="flex w-full">
                        <h2>Acueducto {{$acueducto->nombre}}</h2>
                    </div>

                    <div class="flex w-full">
                        <h4>Municipio - {{$acueducto->municipio}}</h4>
                    </div>

                    <div class="flex w-full">
                        <h4>Ubicacion - {{$acueducto->ubicacion}}</h4>
                    </div>

                    <div class="flex w-full">
                        <p>
                            {{$acueducto->descripcion}}
                        </p>

                    </div>

                </div>
            </div>
        </div>
@endsection
