<!-- Topbar Start -->
        <div class="container-fluid bg-light pt-3 d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                        <div class="d-inline-flex align-items-center">
                            <p><i class="fa fa-envelope mr-2"></i>hidrobolix@example.com</p>
                            <p class="text-body px-3">|</p>
                            <p><i class="fa fa-phone-alt mr-2"></i>+58 0286-7129800</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <div class="d-inline-flex align-items-center">
                            <a class="text-primary px-3" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary px-3" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary px-3" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary pl-3" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 col-lg-6 text-lg-right">
                        @guest
                            <a href="{{route('register')}}" class="nav-item nav-link">Registro</a>
                            <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                        @endguest
                        @auth
                            <a href="#">Usuario: {{auth()->user()->username}}</a>

                            <div class="relative grid place-items-center" x-data="{ open: false}">

                                {{-- Dropdown menu button --}}
                                <button @click="open = !open" type="button" class="round-btn">
                                    <img src="https://picsum.photos/200" alt="">
                                </button>

                                {{-- Dropdown menu --}}
                                <button x-show="open" @click.outside="open=false" class="bg-white shadow-lg absolute top-10 right-0 rounded-lg overflow-hidden font-light">
                                    <p class="username">{{ auth()->user()->username }}</p>
                                    <a href="{{route('dashboard')}}" class="block hover:bg-slate-100 pl-4 pr-8 py-2 text-left w-full">Dashboard</a>
                                    <form action="" method="POST">
                                        @csrf

                                        <button action="{{route('logout')}}" class="block hover:bg-slate-100 pl-4 pr-8 py-2 text-left w-full">Salir</button>
                                    </form>
                                </button>


                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
<!-- Topbar End -->

