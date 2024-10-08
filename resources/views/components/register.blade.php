
<!-- Register Start -->
    <h1 class="title">Registra nueva cuenta</h1>

    <div class="mx-auto max-w-screen-sm card">

        <form action="{{route('register')}}" method="POST">
            @csrf

            {{-- Usuario. --}}
            <div class="mb-4">
                <label for="username">Usuario</label>
                <input type="text" name="username" class="input ring-red-500">
                @error('username')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            {{-- Email. --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" class="input ring-red-500">
                @error('email')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            {{-- Contraseña. --}}
            <div class="mb-4">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="input ring-red-500">
                @error('password')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            {{-- Confirmar contraseña. --}}
            <div class="mb-8">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" class="input ring-red-500">
                @error('password')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <button class="btn">Registrarse</button>
        </form>
    </div>
<!-- Register End -->
