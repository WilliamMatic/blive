<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S'inscrire</title>

    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-2.0.3.min.js" ></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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
                            <h2 class="mb-4">S'inscrire</h2>

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
                            
                            <form id="formsignup" action="#" method="POST" enctype="multipart/form-data">
                                
                                <div class="input-group">
                                    <label for="username">Nom d'utilisateur</label>
                                    <input type="text" id="username" name="username" required>
                                </div>
                                
                                <div class="input-group">
                                    <label for="phone">Numéro de telephone</label>
                                    <input type="text" id="phone" name="phone" required>
                                </div>
                                
                                <div class="input-group">
                                    <label for="email">Adresse email</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                
                                <div class="input-group">
                                    <label for="avatar">Avatar</label>
                                    <input type="file" id="avatar" name="avatar" required>
                                </div>

                                <div class="input-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" id="password" name="password" required>
                                </div>

                                <div class="input-group">
                                    <label for="confirmpassword">Confirmatio du mot de passe</label>
                                    <input type="password" id="confirmpassword" name="confirmpassword" required>
                                </div>

                                <button id="signup" type="submit">S'inscrire</button>


                                <div class="m" style="text-align: center;margin-top: 20px;">
                                    <a href="login.html">Se connecter</a>
                                </div>

                            </form>
                        </div>

                        <script type="text/javascript">
                            
                            document.getElementById('formsignup').addEventListener('submit', function(event) {
                                event.preventDefault();

                                let formData = new FormData(this);

                                fetch('models/signup.php', {
                                    method: 'POST',
                                    body: formData
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        throw new Error('Une erreur est survenue lors de l\'envoi des données.');
                                    }
                                    window.location.reload()
                                })
                                .then(data => {
                                    console.log(data);
                                    window.location.reload()
                                })
                                .catch(error => {
                                    console.error('Erreur:', error);
                                    window.location.reload()
                                    // Afficher un message d'erreur ou effectuer d'autres actions si nécessaire
                                });
                            });

                        </script>

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
    
</body>

</html>