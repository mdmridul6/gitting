<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag"
                    href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a class="dropdown-item"
                        href="#" data-language="en"><i class="flag-icon flag-icon-us"></i>
                        English</a><a class="dropdown-item" href="#" data-language="fr"><i
                            class="flag-icon flag-icon-fr"></i>
                        French</a><a class="dropdown-item" href="#" data-language="de"><i
                            class="flag-icon flag-icon-de"></i>
                        German</a><a class="dropdown-item" href="#" data-language="pt"><i
                            class="flag-icon flag-icon-pt"></i>
                        Portuguese</a></div>
            </li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                        data-feather="moon"></i></a></li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                        data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                        data-search="search">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                    data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                        class="badge rounded-pill bg-danger badge-up">5</span></a>
                {{-- <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                            <div class="badge rounded-pill badge-light-primary">6 New</div>
                        </div>
                    </li>

                    <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all
                            notifications</a></li>
                </ul> --}}
            </li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{ Auth::user()->name
                            }}</span><span class="user-status">Admin</span>
                    </div><span class="avatar"><img class="round"
                            src="{{ asset('/app-assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar"
                            height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="page-profile.html"><i class="me-50"
                            data-feather="user"></i>Profile</a>
                    <a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i>Inbox</a>

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i data-feather="log-out"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
        </ul>
    </div>
</nav>
<!-- END: Header-->
