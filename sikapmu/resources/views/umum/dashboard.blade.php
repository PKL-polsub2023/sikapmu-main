<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <h6>Hallo Wirausaha Muda</h6>
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-start">
                                    <p class="text-sm mb-0 text-capitalize">Userrs Online</p>
                                    <h4 class="mb-0">$53,000<span class="text-success  font-weight-bolder fs-5"> +55%
                                        </span></h4>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="profile-img" style="width: 30px; height: 30px;">
                                    <img src="{{ asset('assets/img/icons/icon_ewallet.png') }}" alt="profile-img" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-start">
                                    <p class="text-sm mb-0 text-capitalize">New Users</p>
                                    <h4 class="mb-0">2,300<span class="text-success  font-weight-bolder fs-5"> +5%
                                        </span></h4>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="profile-img" style="width: 30px; height: 30px;">
                                    <img src="{{ asset('assets/img/icons/icon_earth.png') }}" alt="profile-img" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-start">
                                    <p class="text-sm mb-0 text-capitalize">New Event</p>
                                    <h4 class="mb-0">+3</h4>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="profile-img" style="width: 30px; height: 30px;">
                                    <img src="{{ asset('assets/img/icons/icon_event.png') }}" alt="profile-img" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-start">
                                    <p class="text-sm mb-0 text-capitalize">New Loker</p>
                                    <h4 class="mb-0">4</h4>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="profile-img" style="width: 30px; height: 30px;">
                                    <img src="{{ asset('assets/img/icons/icon_loker.png') }}" alt="profile-img" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
    </div>
    <style>
        .bg-gradient-primary {
            background: linear-gradient(90deg, #B7ECE7 0%, #B0BDF0 100%);
        }
    </style>

</x-layout>
