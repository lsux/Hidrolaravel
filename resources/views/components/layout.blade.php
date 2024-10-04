<!DOCTYPE html>
<html lang="en">

@include('components.styles')

<body>
        <x-topbar>
        </x-topbar>

        <x-navbar>
        </x-navbar>

        <x-header>
        </x-header>

        <main>
            @yield('content')
        </main>

        <x-footer>
        </x-footer>

    <!-- Back to Top - Start-->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- Back to Top - End-->
</body>


@include('components.scripts')
</html>
