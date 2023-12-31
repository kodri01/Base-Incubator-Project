<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" href="public/images/up-arrow.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo accordion-body">

                    <img src="{{ url('Image/' . $abouts->logo) }}" style="width: 50px" alt="logo">

                    <a href="{{ route('users.index') }}" class="app-brand-link">
                        <span
                            class="-text demo menu-text fw-bolder text-white fs-4 text-center text-uppercase">{{ $abouts->name }}</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>



                <ul class="menu-inner py-1">
                    <li class="menu-item mt-3">
                        <a href="{{ route('users.user') }}" class="menu-link">
                            {{-- <a href="{{ route('beritas.index') }}" class="menu-link"> --}}
                            <i class="menu-icon tf-icons bx bxs-user"></i>
                            <div data-i18n="Basic">Manage Users </div>
                        </a>
                    </li>

                    <li class="menu-item mt-3">
                        <a href="{{ route('users.index') }}" class="menu-link">
                            {{-- <a href="{{ route('beritas.index') }}" class="menu-link"> --}}
                            <i class="menu-icon tf-icons bx bxs-store-alt"></i>
                            <div data-i18n="Basic">Manage Brand </div>
                        </a>
                    </li>


                    {{-- <li class="menu-item mt-3">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bxs-package"></i>
                            <div data-i18n="Account Settings">Manage Brand</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <a href="{{ route('packages.index') }}" class="menu-link">
                                        <div data-i18n="Account">View Products</div>
                                    </a>
                            </li>
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <a href="{{ route('packages.create') }}" class="menu-link">
                                        <div data-i18n="Account">Add Products</div>
                                    </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-account-settings-notifications.html" class="menu-link">
                                    <div data-i18n="Notifications">Notifications</div>
                                </a>
                            </li>
                        </ul>
                    </li> --}}


                    {{-- categories --}}
                    {{-- <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Categories</span>
                    </li> --}}
                    {{-- <li class="menu-item mt-3">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-category"></i>
                            <div data-i18n="Account Settings">Manage Categories</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <a href="{{ route('categories.index') }}" class="menu-link">
                                    <div data-i18n="Account">View Categories</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <a href="{{ route('categories.create') }}" class="menu-link">
                                    <div data-i18n="Without navbar">Add Categories</div>
                                </a>
                            </li>
                            <li class="menu-item">
                        <a href="pages-account-settings-notifications.html" class="menu-link">
                            <div data-i18n="Notifications">Notifications</div>
                        </a>
                        </li>
                        </ul>
                    </li> --}}


                    {{-- <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Messages</span>
                        </li> --}}

                    <!-- Cities -->

                    {{-- <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Cities</span>
            </li> --}}
                    {{-- <li class="menu-item mt-3">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-pin"></i>
                            <div data-i18n="Account Settings">Manage Cities</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <a href="{{ route('cities.index') }}" class="menu-link">
                                        <div data-i18n="Account">View Cities</div>
                                    </a>
                            </li>
                            <li class="menu-item">
                                <a href="" class="menu-link">
                                    <a href="{{ route('cities.create') }}" class="menu-link">
                                        <div data-i18n="Without navbar">Add Cities</div>
                                    </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-account-settings-notifications.html" class="menu-link">
                                    <div data-i18n="Notifications">Notifications</div>
                                </a>
                            </li>
                        </ul>
                    </li> --}}


                    <!-- Orders -->
                    {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Orders</span></li> --}}
                    <li class="menu-item mt-3">
                        <a href="{{ route('beritas.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-news"></i>
                            <div data-i18n="Basic">Manage Berita </div>
                        </a>
                    </li>
                    <li class="menu-item mt-3">
                        <a href="{{ route('opinis.index') }}" class="menu-link">
                            {{-- <a href="{{ route('messages.index') }}" class="menu-link"> --}}
                            <i class="menu-icon tf-icons bx bx-message"></i>
                            <div data-i18n="Basic">Manage Testimoni </div>
                        </a>
                    </li>
                    <li class="menu-item mt-3">
                        <a href="{{ route('strukturs.index') }}" class="menu-link">
                            {{-- <a href="{{ route('messages.index') }}" class="menu-link"> --}}
                            <i class="menu-icon tf-icons bx bx-sitemap"></i>
                            <div data-i18n="Basic">Struktural</div>
                        </a>
                    </li>
                    <li class="menu-item mt-3">

                        <a href="{{ route('about.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cog"></i>
                            <div data-i18n="Basic">Setting </div>
                        </a>
                    </li>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <form action="">
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"><input type="submit" style="display: none"></i>
                                    <input type="text" class="form-control border-0 shadow-none"
                                        placeholder="Search..." aria-label="Search..." name="search" />
                                </div>

                            </div>
                        </form>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            {{-- <li class="nav-item lh-1 me-3">
                <a
                class="github-button"
                href="https://github.com/themeselection/sneat-html-admin-template-free"
                data-icon="octicon-star"
                data-size="large"
                data-show-count="true"
                aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                >Star</a
                >
            </li> --}}

                            <!-- User -->
                            <li class="menu-item navbar-dropdown dropdown-user dropdown">
                                <a class="menu-item dropdown-toggle hide-arrow text-black fs-2"
                                    href="javascript:void(0);" data-bs-toggle="dropdown">
                                    {{-- <div class="avatar avatar-online"> --}}
                                    <i class="menu-icon bx bx-user"></i>
                                    {{-- <img src="/storage/{{ auth()->user()->image }}" alt class="w-px-40 h-auto rounded-circle" />
                </div> --}}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="/image/{{ auth()->user()->logo }}" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                                    {{-- <span class="fw-semibold d-block">{{ auth()->user()->name }}</span> --}}
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="/admin/users/{{ auth()->user()->id }}/edit">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('about.index') }}">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li> --}}
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span data-i18n="align-middle">Log Out</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">

                                                @csrf
                                            </form>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper ms-4 my-4" style="width: 96%">





                    <!-- Content -->
                    @yield('content')






                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            ,
                            <a href="#" target="_blank"
                                class="footer-link fw-bolder text-uppercase">{{ $abouts->name }}</a>
                        </div>

                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>
