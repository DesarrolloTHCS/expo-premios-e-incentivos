<!--? Header Start -->
<style>
    .no-transform {
        text-transform: none !important;
    }
</style>
<div class="header-area">
    <div class="main-header header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-xl-2 col-lg-2 col-md-1">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img
                                src="{{ asset('storage/images/Logo-premios-e-incentivos.png') }}" alt="Logo"
                                style="max-height: 5rem"></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-10">
                    <div class="main-menu black-menu menu-bg-white d-none d-lg-block">
                        <div class="hamburger hamburger--collapse">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                        <nav class="hamburger-menu">
                            <ul id="navigation">
                                <li><a href="#inicio" id="nav-main" class="pointer">{{ __('Home') }}</a></li>
                                <li><a href="#servicios" id="nav-why" class="pointer no-transform">{{ __('Why should you attend?') }}</a></li>
                                <li><a href="#clients" id="nav-clients" class="pointer no-transform">{{ __('Guest brands') }}</a></li>
                                <li><a href="#ubicacion" id="nav-map" class="pointer">{{ __('Location') }}</a></li>
                                <li><a href="#registro" id="nav-register" class="pointer">{{ __('Sign Up') }}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
