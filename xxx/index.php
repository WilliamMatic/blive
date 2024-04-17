<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B-live</title>

    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/video-player.css">
</head>

<body>

    <div class="backdrop"></div>
    <div class="main-wrapper">
        <!-- header wrapper -->
        <?php require 'views/header.php'; ?>
        <!-- header wrapper -->
        <!-- banenr wrapper -->

        <!-- Live actuel -->
        <div class="banner-wrapper mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="banner-slider owl-carousel owl-theme" id="autoplaylive">

                            <?php  
                                require 'models/events-live.php';
                                while ($res = $req->fetch(PDO::FETCH_OBJ)) {
                            ?>

                            
                            <div class='owl-items'>
                                <div class='banner-wrap justify-content-between align-items-center'>
                                    <div class='left-wrap'>
                                        <span class='rnd'>LIVE</span>
                                        <h2><?= substr( $res->titre, 0, 18).'...' ?></h2>
                                        <p>
                                            <?= substr( $res->contenue, 0, 250).'...' ?>
                                        </p>
                                        <a href='<?= $res->youtube ?>' class='btn btn-lg'><img src='assets/images/play.png' alt='icn'>Regarde maintenant</a>
                                    </div>
                                    <div class='right-wrap' style="background-image: url(admins/assets/astuce/<?= $res->avatar ?>);"></div>
                                </div>
                            </div>

                            <?php  

                                }$req->closeCursor();

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banenr wrapper -->


        <!-- slider wrapper -->
        
        <!-- Live terminé -->
        <div class="slide-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2>Nos anciens directs</h2>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slide-slider owl-carousel owl-theme">

                            <?php  
                                require 'models/events-inlive.php';
                                while ($res = $req->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            
                                <div class="owl-items">
                                    <a class="slide-one" href="<?= $res->youtube ?>">
                                        <div class="slide-image"><img src="admins/assets/astuce/<?= $res->avatar ?>" alt="image"></div>
                                        <div class="slide-content">
                                            <h2><?= substr($res->titre, 0, 18).'...' ?> </h2>
                                            <p>
                                                <?= $res->contenue ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>

                            <?php  

                                }$req->closeCursor();

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider wrapper -->
        <!-- footer wrapper -->
        <?php require 'views/footer.php'; ?>
        <!-- footer wrapper -->

    </div>

    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/video-player.js"></script>
    
</body>

</html>