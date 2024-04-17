<?php session_start(); ?>
<?php  
    if ( !isset($_SESSION['id']) || empty($_SESSION['id']) ) {
        header("Location: ../login-admin");
        exit();
    }
?>
<!DOCTYPE html>
<html
    lang="en"
    data-layout="horizontal"
    data-topbar="light"
    data-sidebar="light"
    data-bs-theme="dark"
    data-sidebar-size="lg"
    data-sidebar-image="none"
    data-preloader="disable"
    data-theme="vintage"
    data-theme-colors="default"
    data-sidebar-user-show
>
    <head>
        <meta charset="utf-8" />
        <title>Evènement actifs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Sous-traitance d'excellence, résultats probants" name="description" />
        <meta content="PitUp" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo.png" />

        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.css
            "
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.css.map" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css.map" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css" />

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/fontawesome.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/fontawesome.min.js"></script>

        <!--datatable css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
        <!--datatable responsive css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" />
    </head>

    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">
            
            <?php require 'views/header.php'; ?>
            
            <!-- ========== App Menu ========== -->
            <?php require 'views/nav.php'; ?>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

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

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="card-title mb-0">Les Evènement actifs</h5>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dépôts">NOUVEAU</button>
                                    </div>
                                    <div class="card-body">
                                        <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th data-ordering="false">Titre</th>
                                                    <th data-ordering="false">Prix</th>
                                                    <th data-ordering="false">Secteur</th>
                                                    <th data-ordering="false">Admin</th>
                                                    <th data-ordering="false">Date évènement</th>
                                                    <th data-ordering="false">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    require 'models/call/astuce/getListactif.php';
                                                    while ($res = $listAll->fetch(PDO::FETCH_OBJ)) {
                                                ?>
                                                    <tr>
                                                        <td><?= $res->titre ?></td>
                                                        <td><?= $res->price ?>$</td>
                                                        <td><?= $res->secteurname ?></td>
                                                        <td><?= $res->adminname ?></td>
                                                        <td><?= $res->datepub ?></td>
                                                        <td>
                                                            <a class="me-2" href="models/call/astuce/delete.php?id=<?= $res->id ?>">
                                                                <i class="fa-solid fa-trash-can text-danger"></i>
                                                            </a>
                                                            <a href="astuce-<?= $res->id ?>">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php }$listAll->closeCursor(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>

                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php require 'views/footer.php'; ?>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <div class="modal fade" id="dépôts" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form method="POST" action="models/call/astuce/add.php" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Publication évènement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="title-name" class="col-form-label">Titre:</label>
                                        <input type="text" class="form-control" name="title" id="title-name" required />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="price-name" class="col-form-label">Prix:</label>
                                        <input type="number" class="form-control" name="price" id="price-name" required />
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label for="youtube-name" class="col-form-label">ID youtube:</label>
                                        <input type="text" class="form-control" name="youtube" id="youtube-name" required />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label">Secteur d'activité:</label>
                                        <select class="form-select" name="sector" required>
                                            <option value=""></option>
                                            <?php  
                                                require 'models/call/astuce/getSecteur.php';
                                                while ($res = $secteurAll->fetch(PDO::FETCH_OBJ)) {
                                            ?>
                                                <option value="<?= $res->id ?>"><?= $res->designation ?></option>
                                            <?php }$secteurAll->closeCursor(); ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label">Admin:</label>
                                        <select class="form-select" name="admin" required>
                                            <option value=""></option>
                                            <?php  
                                                require 'models/call/astuce/getAdmin.php';
                                                while ($res = $adminAll->fetch(PDO::FETCH_OBJ)) {
                                            ?>
                                                <option value="<?= $res->id ?>"><?= $res->nom ?></option>
                                            <?php }$adminAll->closeCursor(); ?>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label for="avatar-name" class="col-form-label">Cover:</label>
                                        <input type="file" class="form-control" name="avatar" id="avatar-name" required />
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label for="date-name" class="col-form-label">Date de l'évènement:</label>
                                        <input type="date" class="form-control" name="date" id="date-name" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="content-name" class="col-form-label">Description:</label>
                                        <textarea rows="7" required name="content" id="content-name" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <!-- JAVASCRIPT -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="assets/js/apexcharts.min.js"></script>

        <!-- projects js -->
        <script src="assets/js/dashboard-projects.init.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!--datatable js-->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

        <script src="assets/js/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
