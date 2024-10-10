<!-- Login Start -->
<h1 class="title">Bienvenido</h1>

<div class="mx-auto max-w-screen-sm card">

    <form action="{{route('login')}}" method="POST">
        @csrf

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

        {{-- Remember checkbox--}}
        <div class="mb-4">
            <input type="checkbox" name="remember" id="remember">
                <label for="remember">Recuerdame</label>
            </input>
            @error('failed')
                <p class="error">{{$message}}</p>
            @enderror
        </div>

        <button class="btn">Login</button>
    </form>
</div>
<!-- Login End -->
