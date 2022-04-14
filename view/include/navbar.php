<nav class="main-nav--bg">
    <div class="container main-nav">
        <div class="main-nav-start">
            <div class="search-wrapper">
                <i data-feather="search" aria-hidden="true"></i>
                <input type="text" placeholder="Enter keywords ..." required>
            </div>
        </div>
        <div class="main-nav-end">
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle--gray" aria-hidden="true"></span>
            </button>
            <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                <span class="sr-only">Switch theme</span>
                <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
            </button>
            <div class="nav-user-wrapper">
                <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                    <span class="sr-only">My profile</span>
                    <span class="nav-user-img">
            <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
                </button>
                <ul class="users-item-dropdown nav-user-dropdown dropdown">
                    <li><a href="##">
                            <a href="http://localhost/labo/view/layout/profile.php"><i data-feather="user" aria-hidden="true"></i>
                            <span>Profile</span></a>
                        </a></li>
                    <li><a class="danger" href="##">
                            <a href="http://localhost/labo/view/login.php"><i data-feather="log-out" aria-hidden="true"></i><span>Déconnexion</span></a>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>