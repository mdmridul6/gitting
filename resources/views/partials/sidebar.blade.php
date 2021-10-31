<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('home') }}">
                    <span class="brand-logo">
                        {{-- Logo --}}
                    </span>
                    <h2 class="brand-text">POS</h2>
                </a></li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc">
                    </i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item {{ Request::routeIs('admin.role.index') ? 'active' : '' }}"><a
                    class="d-flex align-items-center" href="{{ route('admin.role.index') }}">
                    <i data-feather='shield'></i>
                    <span class="menu-title text-truncate" data-i18n="Kanban">User Access</span></a>
            </li>
            <li class=" nav-item {{ Request::routeIs('admin.user.index') ? 'active' : '' }}"><a
                    class="d-flex align-items-center" href="{{ route('admin.user.index') }}">
                    <i data-feather='user'></i>
                    <span class="menu-title text-truncate" data-i18n="Kanban">User Control</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
