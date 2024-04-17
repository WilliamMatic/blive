<?php session_start(); ?>

<?php  
    if ( !isset($_SESSION['id']) || empty($_SESSION['id']) ) {
        header("Location: login.php");
        exit();
        die();
    }
?>

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

    <style type="text/css">
        
        .video-container {
          position: relative;
          width: 80%; /* Réduit la largeur de la vidéo */
          margin: auto; /* Centre la vidéo horizontalement */
          padding-bottom: 50%; /* Ratio 16:9 pour une vidéo YouTube */
          overflow: hidden;
        }
        .video-container iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
        }
        .video-info {
          text-align: center;
          padding: 20px;
          background-color: #f4f4f4;
        }
        .video-info h2 {
          margin-top: 0;
        }
        .video-info p {
          margin-bottom: 0;
        }

    </style>

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
                        
                        <div class="video-container">
                          <!-- Remplacez 'CODE_VIDEO' par le code d'intégration de votre vidéo YouTube -->
                          <iframe src="https://www.youtube.com/embed/<?= $_GET['id'] ?>" frameborder="0" allowfullscreen></iframe>
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