<!-- Login Start -->
<div class="mx-auto max-w-screen-sm card">

    <form action="{{route('login')}}" method="POST" class="flex mt-4 w-[100vsh] justify-center">
        @csrf

        <div class="flex items-center flex-col gap-3">
            <h1 class="title">Bienvenido</h1>

            {{-- Email. --}}
            <div class="mb-4 flex w-full">
                <label for="email">Email</label>
                <input type="email" name="email" class="input ring-red-500 ml-2">
                @error('email')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            {{-- Contraseña. --}}
            <div class="mb-4 flex w-full">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="input ring-red-500 ml-2">
                @error('password')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            {{-- Remember checkbox--}}
            <div class="mb-4 flex w-full">
                <input type="checkbox" name="remember" id="remember" class="input ml-2">
                    <label for="remember">Recuerdame</label>
                </input>
                @error('failed')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>
</div>
<!-- Login End -->
