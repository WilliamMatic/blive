<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vstream - Media Landing Page</title>

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
                    
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    
                    <div class="col-12" style="margin: 30px 0 30px 0;">
                        <h1 class="text-center">Nos Tarifs</h1>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title" style="text-align: center;" class="text-center"><b>Plan de Base</b></h5>
                            <p class="card-text" style="text-align: center;">
                                Accès limité à certains contenus.
                            </p>
                            <h5 style="text-align: center; color: #f29304;"><b class="" style="color: #f29304;">$9.99/mois</b></h5>
                            <button class="btn btn-danger btn-block" style="background-color: #f29304;border: 1px solid #f29304;">Chosir</button>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title" style="text-align: center;" class="text-center"><b>Plan Standard</b></h5>
                            <p class="card-text" style="text-align: center;">
                                Accès illimité à tous les contenus.
                            </p>
                            <h5 style="text-align: center; color: #f29304;"><b class="" style="color: #f29304;">$19.99/mois</b></h5>
                            <button class="btn btn-danger btn-block" style="background-color: #f29304;border: 1px solid #f29304;">Chosir</button>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title" style="text-align: center;" class="text-center"><b>Plan Premium</b></h5>
                            <p class="card-text" style="text-align: center;">
                                Accès illimité + Contenus exclusifs.
                            </p>
                            <h5 style="text-align: center; color: #f29304;"><b class="" style="color: #f29304;">$29.99/mois</b></h5>
                            <button class="btn btn-danger btn-block" style="background-color: #f29304;border: 1px solid #f29304;">Chosir</button>
                          </div>
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