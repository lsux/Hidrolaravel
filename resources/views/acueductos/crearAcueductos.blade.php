<!-- Crear acueductos Start -->
<form action="{{route('store_acueducto')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div>
                <label for="nombre">Nombre acueducto</label>
                <input type="text" name="nombre" id="nombre" required>
                @error('nombre')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="municipio">Municipio</label>
                <input type="text" name="municipio" id="municipio" required>
                @error('municipio')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="ubicacion">Ubicacion</label>
                <input type="text" name="ubicacion" id="ubicacion" required>
                @error('ubicacion')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" required>
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
        </div>

        <button type="submit" class="btn btn-primary">Subir</button>
    </div>
</form>
