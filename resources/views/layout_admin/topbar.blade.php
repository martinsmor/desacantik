<div class="content-page">
    <div class="content">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topbar-menu float-end mb-0">
                <li class="dropdown notification-list d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                        <form class="p-3">
                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                        </form>
                    </div>
                </li>

                <li class="notification-list">
                    <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                        <i class="dripicons-gear noti-icon"></i>
                    </a>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="account-user-avatar"> 
                            <img src="assets/img/desacantik.png" alt="user-image" class="rounded-circle">
                        </span>
                        <span>
                            <span class="account-user-name">{{ Auth::user()->name }}</span>
                            <span class="account-position">Admin</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                        <!-- item-->
                        @auth
                   <!--     <a href="/ubahpass" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-open-check-outline"></i>
                            <span>Ubah password</span>
                        </a> -->
                        <a href="/logout" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout me-1"></i>
                            <span>Logout</span>
                        </a>
                        @endauth
                    </div>
                </li>

            </ul>

            <button class="button-menu-mobile open-left">
                <i class="mdi mdi-menu"></i>
            </button>

            </div>
        </div>
        <!-- end Topbar -->