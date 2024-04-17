<div class="app-menu navbar-menu">
    <!-- LOGO -->
    
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="dashboard" class="logo logo-dark" style="font-size: 2em;">
            <!-- <span class="logo-sm">
                <img src="assets/images/logo-B-LIVE.png" alt="" height="65" />
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-B-LIVE.png" alt="" height="65" />
            </span> -->
            B-LIVE
        </a>
        <!-- Light Logo-->
        <a href="dashboard" class="logo logo-light" style="font-size: 2em;">
            <!-- <span class="logo-sm">
                <img src="assets/images/logo-B-LIVE.png" alt="" height="65" />
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-B-LIVE.png" alt="" height="65" />
            </span> -->
            B-LIVE
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="assets/avatar/<?= $_SESSION['avatar'] ?>" alt="Header Avatar" />
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text"><?= $_SESSION['nom'] ?></span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">En ligne</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome <?= $_SESSION['nom'] ?>!</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="models/call/admin/logout.php"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Se déconnecter</span></a>
        </div>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <!-- end Dashboard Menu -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Opérations</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="tips">
                        <i class="fa-regular fa-newspaper"></i> <span data-key="t-authentication">
                            Les évènements
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="sectors"> <i class="fa-solid fa-vector-square"></i> <span data-key="t-widgets">Secteurs</span> </a>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Configurations</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="admin">
                        <i class="fa-solid fa-person"></i> <span data-key="t-base-ui">
                            Admins
                        </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>