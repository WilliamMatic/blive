<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Vstream - Media Landing Page</title>

        <link rel="stylesheet" href="css/themify-icons.css" />
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/video-player.css" />
    </head>

    <body>
        <div class="preloader"></div>

        <div class="backdrop"></div>
        <div class="switchcolor"><img src="images/settings.png" alt="icon" /></div>
        <div class="switchcolor-wrap">
            <a class="link sheet-close"><i class="ti-close"></i></a>
            <h2>Settings</h2>
            <h4>Choose Color Theme</h4>
            <ul>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="red" checked="" /><i class="ti-check"></i>
                        <span class="circle-color bg-red" style="background-color: #ff3b30;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="green" /><i class="ti-check"></i>
                        <span class="circle-color bg-green" style="background-color: #4cd964;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="blue" checked="" /><i class="ti-check"></i>
                        <span class="circle-color bg-blue" style="background-color: #132977;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="pink" /><i class="ti-check"></i>
                        <span class="circle-color bg-pink" style="background-color: #ff2d55;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="yellow" /><i class="ti-check"></i>
                        <span class="circle-color bg-yellow" style="background-color: #ffcc00;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="orange" /><i class="ti-check"></i>
                        <span class="circle-color bg-orange" style="background-color: #ff9500;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="gray" /><i class="ti-check"></i>
                        <span class="circle-color bg-gray" style="background-color: #8e8e93;"></span>
                    </label>
                </li>

                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="brown" /><i class="ti-check"></i>
                        <span class="circle-color bg-brown" style="background-color: #d2691e;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="darkgreen" /><i class="ti-check"></i>
                        <span class="circle-color bg-darkgreen" style="background-color: #228b22;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="deeppink" /><i class="ti-check"></i>
                        <span class="circle-color bg-deeppink" style="background-color: #ffc0cb;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="cadetblue" /><i class="ti-check"></i>
                        <span class="circle-color bg-cadetblue" style="background-color: #5f9ea0;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="darkorchid" /><i class="ti-check"></i>
                        <span class="circle-color bg-darkorchid" style="background-color: #9932cc;"></span>
                    </label>
                </li>
            </ul>
            <div class="toggle-div mt-4">
                <h4 class="d-inline">Dark Mode</h4>
                <div class="d-inline float-right">
                    <label class="toggle toggle-init"><input type="checkbox" /><span class="toggle-icon"></span></label>
                </div>
            </div>
        </div>

        <div class="main-wrapper">
            <!-- header wrapper -->
            <div class="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 navbar p-0">
                            <a href="index.html" class="logo"><img src="images/logo.png" alt="logo" class="light" /><img src="images/logo-white.png" alt="logo" class="dark" /></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav nav-menu float-none text-center">
                                    <li class="nav-item"><a class="nav-link" href="season.html">Season</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single.html">Single</a></li>
                                    <li class="nav-item"><a class="nav-link" href="search.html">Action</a></li>
                                    <li class="nav-item"><a class="nav-link" href="video.html">Video</a></li>
                                    <li class="nav-item"><a class="nav-link" href="landing.html">Landing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="user-avater">
                                <img src="images/user-8.png" alt="user" />
                                <div class="user-menu">
                                    <ul>
                                        <li>
                                            <a href="profile.html"><i class="ti-user"></i>My Profile</a>
                                        </li>
                                        <li>
                                            <a href="favorites.html"><i class="ti-heart"></i>My Favorites</a>
                                        </li>
                                        <li>
                                            <a href="term.html"><i class="ti-world"></i>Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="home.html"><i class="ti-power-off"></i>Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="search-div">
                                <input type="text" placeholder="Seacrh" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header wrapper -->
            <!-- banenr wrapper -->
            <div class="banner-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banner-slider owl-carousel owl-theme">
                                <div class="owl-items">
                                    <div class="banner-wrap justify-content-between align-items-center">
                                        <div class="left-wrap">
                                            <span class="rnd">IMDb 6.7</span>
                                            <h2>
                                                Mother of <br />
                                                Brooklyn
                                            </h2>
                                            <span class="tag"><b>SEASON 1</b></span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                            <span class="tag">2 h 20 min</span>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                            <a href="#" class="btn btn-lg btn-video"><img src="images/play.png" alt="icn" />Watch now</a>
                                        </div>
                                        <div class="right-wrap" style="background-image: url(images/banner-4.jpg);"></div>
                                    </div>
                                </div>

                                <div class="owl-items">
                                    <div class="banner-wrap justify-content-between align-items-center">
                                        <div class="left-wrap">
                                            <span class="rnd">IMDb 6.7</span>
                                            <h2>
                                                Made <br />
                                                in heaven
                                            </h2>
                                            <span class="tag"><b>SEASON 1</b></span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                            <span class="tag">2 h 20 min</span>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                            <a href="#" class="btn btn-lg btn-video"><img src="images/play.png" alt="icn" />Watch now</a>
                                        </div>
                                        <div class="right-wrap" style="background-image: url(images/banner-3.jpg);"></div>
                                    </div>
                                </div>

                                <div class="owl-items">
                                    <div class="banner-wrap justify-content-between align-items-center">
                                        <div class="left-wrap">
                                            <span class="rnd">IMDb 6.7</span>
                                            <h2>
                                                Zero<br />
                                                dark night
                                            </h2>
                                            <span class="tag"><b>SEASON 1</b></span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                            <span class="tag">2 h 20 min</span>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                            <a href="#" class="btn btn-lg btn-video"><img src="images/play.png" alt="icn" />Watch now</a>
                                        </div>
                                        <div class="right-wrap" style="background-image: url(images/banner-2.jpg);"></div>
                                    </div>
                                </div>
                                <div class="owl-items">
                                    <div class="banner-wrap justify-content-between align-items-center">
                                        <div class="left-wrap">
                                            <span class="rnd">IMDb 6.7</span>
                                            <h2>
                                                The <br />
                                                night ever
                                            </h2>
                                            <span class="tag"><b>SEASON 1</b></span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                            <span class="tag">2 h 20 min</span>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                            <a href="#" class="btn btn-lg btn-video"><img src="images/play.png" alt="icn" />Watch now</a>
                                        </div>
                                        <div class="right-wrap">
                                            <video autoplay muted loop id="myVideo">
                                                <source src="images/video3.mp4" type="video/mp4" />
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banenr wrapper -->
            <!-- slider wrapper -->
            <div class="slide-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-left mb-4 mt-4">
                            <h2>Specials & Latest Movies</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="slide-slider owl-carousel owl-theme">
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s5.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Made in haven <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s6.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Gravity <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s7.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Inspector <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s8.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Sky Staar <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s1.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Inspector <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s2.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Sky Staar <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider wrapper -->
            <!-- slider wrapper -->
            <div class="slide-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-left mb-4 mt-1">
                            <h2>Recommended movies</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="slide-slider owl-carousel owl-theme">
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s9.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Second Man Earth <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s10.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Defective Area <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s11.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Law of Order <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s12.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Ravata of Sky <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s3.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Inspector <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s4.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Sky Staar <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider wrapper -->

            <!-- slider wrapper -->
            <div class="slide-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-left mb-4 mt-1">
                            <h2>Best of World Cinema</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="slide-slider owl-carousel owl-theme">
                                <div class="owl-items">
                                    <a class="slide-one slide-two" href="#">
                                        <div class="slide-image" style="background-image: url(images/s17.png);"></div>
                                        <div class="slide-content">
                                            <h2>Batman Knight <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one slide-two" href="#">
                                        <div class="slide-image" style="background-image: url(images/s18.jpg);"></div>
                                        <div class="slide-content">
                                            <h2>Gimini Man <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one slide-two" href="#">
                                        <div class="slide-image" style="background-image: url(images/s19.jpg);"></div>
                                        <div class="slide-content">
                                            <h2>Create of Shadow <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one slide-two" href="#">
                                        <div class="slide-image" style="background-image: url(images/s20.jpg);"></div>
                                        <div class="slide-content">
                                            <h2>Jusy Cry yourself <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="owl-items">
                                    <a class="slide-one slide-two" href="#">
                                        <div class="slide-image" style="background-image: url(images/s7.jpg);"></div>
                                        <div class="slide-content">
                                            <h2>Create of Shadow <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one slide-two" href="#">
                                        <div class="slide-image" style="background-image: url(images/s8.jpg);"></div>
                                        <div class="slide-content">
                                            <h2>Jusy Cry yourself <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider wrapper -->
            <!-- slider wrapper -->
            <div class="category-wrapper slide-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-left mb-4 mt-1">
                            <h2>Watch in Your Language</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="category-slider owl-carousel owl-theme">
                                <div class="owl-items">
                                    <a href="search.html" class="category-wrap" style="background-image: url(images/gb1.png);"><span>Spanish</span></a>
                                </div>

                                <div class="owl-items">
                                    <a href="search.html" class="category-wrap" style="background-image: url(images/gb2.png);"><span>Romania</span></a>
                                </div>
                                <div class="owl-items">
                                    <a href="search.html" class="category-wrap" style="background-image: url(images/gb3.png);"><span>English</span></a>
                                </div>
                                <div class="owl-items">
                                    <a href="search.html" class="category-wrap" style="background-image: url(images/gb4.png);"><span>Swiss</span></a>
                                </div>

                                <div class="owl-items">
                                    <a href="search.html" class="category-wrap" style="background-image: url(images/gb2.png);"><span>Italina</span></a>
                                </div>

                                <div class="owl-items">
                                    <a href="search.html" class="category-wrap" style="background-image: url(images/gb3.png);"><span>Urdu</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider wrapper -->
            <!-- slider wrapper -->
            <div class="slide-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-left mb-4 mt-1">
                            <h2>Best of Oscars</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="slide-slider owl-carousel owl-theme">
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s13.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Second Man Earth <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s14.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Defective Area <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s15.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Law of Order <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s16.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Ravata of Sky <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s5.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Law of Order <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="owl-items">
                                    <a class="slide-one" href="season.html">
                                        <div class="slide-image"><img src="images/s6.jpg" alt="image" /></div>
                                        <div class="slide-content">
                                            <h2>Ravata of Sky <img src="images/plus.png" alt="icon" class="add-wishlist" /></h2>
                                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                            <span class="tag">2 h 20 min</span>
                                            <span class="tag">2020</span>
                                            <span class="tag"><b>HD</b></span>
                                            <span class="tag"><b>16+</b></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider wrapper -->
            <!-- footer wrapper -->
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h4 class="mb-4">We are digital agency, a small design agency based in paris as i was groping to remove the chain from about my victim’s neck only through language.</h4>
                        </div>
                        <div class="col-sm-6 text-left">
                            <img src="images/icon-21.png" alt="icon" class="icon-img" />
                        </div>
                        <div class="col-sm-5 offset-sm-1 text-right">
                            <form action="#" class="mt-0">
                                <input type="text" placeholder="Email" />
                                <button>Submit</button>
                            </form>
                        </div>
                        <div class="col-sm-12">
                            <div class="middle-footer">
                                <div class="row">
                                    <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                        <h5>Social Link</h5>
                                        <ul>
                                            <li><a href="#">Facebook</a></li>
                                            <li><a href="#">Twitter</a></li>
                                            <li><a href="#">Instagram</a></li>
                                            <li><a href="#">Youtube</a></li>
                                            <li><a href="#">Dribble</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                        <h5>ONLINE</h5>
                                        <ul>
                                            <li><a href="#">Web</a></li>
                                            <li><a href="#">Series</a></li>
                                            <li><a href="#">Natak</a></li>
                                            <li><a href="#">Comedy</a></li>
                                            <li><a href="#">Action</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                        <h5>Language</h5>
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Arab</a></li>
                                            <li><a href="#">Urdu</a></li>
                                            <li><a href="#">Brazil</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                        <h5>Channel</h5>
                                        <ul>
                                            <li><a href="#">Makeup</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Girls</a></li>
                                            <li><a href="#">Sandals</a></li>
                                            <li><a href="#">Headphones</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                        <h5>About</h5>
                                        <ul>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Term of use</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Feedback</a></li>
                                            <li><a href="#">Careers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                        <h5 class="mb-3">Office</h5>
                                        <p style="width: 100%;">
                                            41 madison ave, floor 24 new work, NY 10010 <br />
                                            1-877-932-7111
                                        </p>
                                        <p style="width: 100%;">
                                            41 madison ave, floor 24 new work, NY 10010 <br />
                                            1-877-932-7111
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 lower-footer"></div>
                        <div class="col-sm-6">
                            <p class="copyright-text">© 2020 copyright. All rights reserved.</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p class="float-right copyright-text">In case of any concern, <a href="#">contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer wrapper -->
        </div>

        <div class="player-container lightbox" style="display: none;">
            <a href="#" class="close-video-player btn-lightbox-close"><i class="ti-close"></i></a>
            <div class="player">
                <video id="video" src="images/video1.mp4" playsinline></video>
                <div class="play-btn-big"></div>
                <div class="controls">
                    <div class="time"><span class="time-current"></span><span class="time-total"></span></div>
                    <div class="progress">
                        <div class="progress-filled"></div>
                    </div>
                    <div class="controls-main">
                        <div class="controls-left">
                            <div class="volume">
                                <div class="volume-btn loud">
                                    <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.75497 17.6928H2C0.89543 17.6928 0 16.7973 0 15.6928V8.30611C0 7.20152 0.895431 6.30611 2 6.30611H6.75504L13.9555 0.237289C14.6058 -0.310807 15.6 0.151473 15.6 1.00191V22.997C15.6 23.8475 14.6058 24.3098 13.9555 23.7617L6.75497 17.6928Z"
                                            transform="translate(0 0.000518799)"
                                            fill="white"
                                        />
                                        <path
                                            id="volume-low"
                                            d="M0 9.87787C2.87188 9.87787 5.2 7.66663 5.2 4.93893C5.2 2.21124 2.87188 0 0 0V2C1.86563 2 3.2 3.41162 3.2 4.93893C3.2 6.46625 1.86563 7.87787 0 7.87787V9.87787Z"
                                            transform="translate(17.3333 7.44955)"
                                            fill="white"
                                        />

                                        <path
                                            id="volume-high"
                                            d="M0 16.4631C4.78647 16.4631 8.66667 12.7777 8.66667 8.23157C8.66667 3.68539 4.78647 0 0 0V2C3.78022 2 6.66667 4.88577 6.66667 8.23157C6.66667 11.5773 3.78022 14.4631 0 14.4631V16.4631Z"
                                            transform="translate(17.3333 4.15689)"
                                            fill="white"
                                        />
                                        <path
                                            id="volume-off"
                                            d="M1.22565 0L0 1.16412L3.06413 4.0744L0 6.98471L1.22565 8.14883L4.28978 5.23853L7.35391 8.14883L8.57956 6.98471L5.51544 4.0744L8.57956 1.16412L7.35391 0L4.28978 2.91031L1.22565 0Z"
                                            transform="translate(17.3769 8.31403)"
                                            fill="white"
                                        />
                                    </svg>
                                </div>
                                <div class="volume-slider">
                                    <div class="volume-filled"></div>
                                </div>
                            </div>
                        </div>
                        <div class="play-btn paused"></div>
                        <div class="controls-right">
                            <div class="speed">
                                <ul class="speed-list">
                                    <li class="speed-item" data-speed="0.5">0.5x</li>
                                    <li class="speed-item" data-speed="0.75">0.75x</li>
                                    <li class="speed-item active" data-speed="1">1x</li>
                                    <li class="speed-item" data-speed="1.5">1.5x</li>
                                    <li class="speed-item" data-speed="2">2x</li>
                                </ul>
                            </div>
                            <div class="fullscreen">
                                <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                                        transform="translate(2 2)"
                                        fill="white"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/plugin.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/video-player.js"></script>
    </body>
</html>
