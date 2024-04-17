<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter</title>

    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/video-player.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

                        <style type="text/css">

                            h2 {
                                text-align: center;
                                color: #333;
                                font-size: 3em;
                            }

                            .input-group {
                                margin-bottom: 20px;
                            }

                            .input-group label {
                                display: block;
                                margin-bottom: 5px;
                                color: #666;
                            }

                            .input-group input {
                                width: 100%;
                                padding: 10px;
                                border: 1px solid #ccc;
                                border-radius: 5px;
                            }

                            button {
                                width: 100%;
                                padding: 10px;
                                background-color: #007bff;
                                color: #fff;
                                border: none;
                                border-radius: 5px;
                                cursor: pointer;
                            }

                            button:hover {
                                background-color: #0056b3;
                            }

                            #container{width: 400px;margin: 40px auto;}

                            @media (max-width: 450px){
                                #container{width: 100%;}
                            }

                        </style>
                        
                        <div id="container" style="">
                            <h2 class="mb-4">Connexion admin</h2>

                            <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['error'];unset($_SESSION['error']); ?>
                                </div>
                            <?php endif ?>

                            <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $_SESSION['success'];unset($_SESSION['success']); ?>
                                </div>
                            <?php endif ?>

                            <form action="models/call/admin/login.php" method="POST" id="formlogin">
                                <div class="input-group">
                                    <label for="email">Adresse email</label>
                                    <input type="text" id="email" name="email" required>
                                </div>
                                <div class="input-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" id="password" name="password" required>
                                </div>
                                <button type="submit">Se connecter</button>

                            </form>
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