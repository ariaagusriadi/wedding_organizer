@php
    function check($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="" class="navbar-brand d-flex align-items-center border-end px-2 px-lg-3">
        <h2 class="m-0 text-primary">Elegantra Wedding Creations</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link {{ check('/') }}">Home</a>
            <a href="{{ url('product') }}" class="nav-item nav-link {{ check('product') }}">Product</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Project</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ url('/about') }}" class="dropdown-item {{ check('about') }}">About</a>
                    <a href="{{ url('/galeri') }}" class="dropdown-item {{ check('galery') }}">Galery</a>
                    <a href="{{ url('/profile') }}" class="dropdown-item {{ check('profile') }}">Profile</a>
                    {{-- <a href="{{ url('/event') }}" class="dropdown-item {{ check('event') }}">Event</a> --}}
                </div>
            </div>
            <a href="{{ url('/artikel') }}" class="nav-item nav-link {{ check('artikel') }}">Article</a>
            <a href="{{ url('/contact') }}" class="nav-item nav-link {{ check('contact') }}">Contact</a>

        </div>
        {{-- <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Get A Quote<i
                class="fa fa-arrow-right ms-3"></i></a> --}}
    </div>
</nav>
