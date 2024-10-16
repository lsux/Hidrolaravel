@extends('components.layout')

@section('content')
    <!-- Crear acueductos Start -->

    <form action="{{route('store_acueducto')}}" method="post" enctype="multipart/form-data" class="flex mt-4 w-[100vsh] justify-center">
        @csrf
        <div class="flex items-center">
            <div class="flex flex-col gap-3">
                <div class="flex w-full">
                    <label for="nombre">Nombre acueducto</label>
                    <input type="text" name="nombre" id="nombre" required class="ml-2">
                    @error('nombre')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex w-full">
                    <label for="municipio">Municipio</label>
                    <input type="text" name="municipio" id="municipio" required class="ml-2">
                    @error('municipio')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex w-full">
                    <label for="ubicacion">Ubicacion</label>
                    <input type="text" name="ubicacion" id="ubicacion" required class="ml-2">
                    @error('ubicacion')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex w-full">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" required class="ml-2">
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
                <button type="submit" class="btn btn-primary">Subir</button>
            </div>

        </div>
    </form>
@endsection
