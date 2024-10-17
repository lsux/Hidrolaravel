@extends('components.layout')

@section('content')
    <div class="card flex items-center flex-col gap-3">
        <a href="{{route('index_acueducto')}}" class="block mb-2 text-x text-blue-500 gap-3">&larr; Regresa a los acueductos</a>

        <h2 class="font-bold mb-4 ">Actualiza acueducto</h2>

    <!-- Editar acueductos Start -->
        <form action="{{route('update_acueducto', $acueducto)}}" method="post" enctype="multipart/form-data" class="flex mt-4 w-[100vsh] justify-center">
            @csrf
            @method('PUT')

            <div class="flex items-center">
                <div class="flex flex-col gap-3">
                    <div class="flex w-full">
                        <label for="nombre">Nombre acueducto</label>
                        <input type="text" name="nombre" id="nombre" value="{{$acueducto->nombre}}" required class="ml-2">
                        @error('nombre')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex w-full">
                        <label for="municipio">Municipio</label>
                        <input type="text" name="municipio" id="municipio" value="{{$acueducto->municipio}}" required class="ml-2">
                        @error('municipio')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex w-full">
                        <label for="ubicacion">Ubicacion</label>
                        <input type="text" name="ubicacion" id="ubicacion" value="{{$acueducto->ubicacion}}" required class="ml-2">
                        @error('ubicacion')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex w-full">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" name="descripcion" id="descripcion" value="{{$acueducto->descripcion}}" required class="ml-2">
                        @error('descripcion')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="mb-1">Imagen</label>
                        <input type="file" name="fotos[]" class="form-control" id="fotos" multiple required>
                        @error('fotos.*')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
