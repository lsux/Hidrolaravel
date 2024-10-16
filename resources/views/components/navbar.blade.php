<!-- Navbar Start -->
   <div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">

            <a title="Logo de hidrobolivar" href="{{ route('home')}}">
                <Image
                    src='/img/logo-hidro.png'
                    width="110"
                    heigth="110"
                    allign="right"
                />
            </a>
            <!-- <a href="" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">Hidro</span>Web</h1>
            </a> -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{ route('nosotros')}}" class="nav-item nav-link">Nosotros</a>
                    <a href="{{ route('noticias')}}" class="nav-item nav-link">Noticias</a>
                    <a href="{{ route('index_acueducto')}}" class="nav-item nav-link">Acueductos</a>
                    <a href="/service" class="nav-item nav-link">Servicios</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">

                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                            <a href="destination.html" class="dropdown-item">Destination</a>
                            <a href="guide.html" class="dropdown-item">Travel Guides</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div> --}}
                    <a href="{{route('contacto')}}" class="nav-item nav-link">Contacto</a>

                    @guest
                        <a href="{{route('register')}}" class="nav-item nav-link">Registro</a>
                        <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                    @endguest

                    <div class="flex items-center gap-4 col-lg-6 text-lg-right">

                        @auth
                            <a href="#">Usuario: <span>{{auth()->user()->username}}</span></a>

                            <div class="relative grid place-items-center" x-data="{ open: false}">

                                {{-- Dropdown menu button --}}
                                <button @click="open = !open" type="button" class="round-btn">
                                    <img src="https://picsum.photos/200" alt="">
                                </button>

                                {{-- Dropdown menu --}}
                                <button x-show="open" @click.outside="open=false" class="bg-white shadow-lg absolute top-10 right-0 rounded-lg overflow-hidden font-light">
                                    <p class="username">{{ auth()->user()->username }}</p>
                                    <a href="{{route('dashboard')}}" class="block hover:bg-slate-100 pl-4 pr-8 py-2 text-left w-full">Dashboard</a>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf

                                        <button class="block hover:bg-slate-100 pl-4 pr-8 py-2 text-left w-full">Salir</button>
                                    </form>
                                </button>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


