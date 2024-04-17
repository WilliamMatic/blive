<div class="header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 navbar p-0">
                <a href="index.html" class="logo"><img src="assets/images/logo-orange.png" alt="logo" class="light"><img src="assets/images/logo-blanc.png" alt="logo" class="dark"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav nav-menu float-none text-center">
                        <li class="nav-item"><a class="nav-link" href="home">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Qui sommes nous</a></li>
                        <li class="nav-item"><a class="nav-link" href="tarif.html">Tarification</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Nous écrire</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                
                <?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])): ?>
                    <div class="user-avater">
                        <img src="assets/avatar/<?= $_SESSION['avatar'] ?>" alt="<?= $_SESSION['nom'] ?>">
                        <div class="user-menu">
                            <ul>
                                <!-- <li><a href="profile.html"><i class="ti-user"></i>Mon profil</a></li>
                                <li><a href="favorites.html"><i class="ti-heart"></i>Mes Favories</a></li>
                                <li><a href="Subscriptions"><i class="ti-world"></i>Abonnements</a></li> -->
                                <li><a href="logout.html"><i class="ti-power-off"></i>Déconnexion</a></li>
                            </ul>
                        </div>
                    </div>
                <?php endif ?>
                
                <?php if (!isset($_SESSION['id']) || empty($_SESSION['id'])): ?>
                    <div class="user-avater">
                        <a href="login.html">
                            <img src="assets/images/user.png" alt="login">
                        </a>
                    </div>
                <?php endif ?>

                


            </div>
        </div>
    </div>
</div>