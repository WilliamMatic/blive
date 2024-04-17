<?php 
    session_start(); 

    if ( !isset($_SESSION['id']) || empty($_SESSION['id']) ) {
        header("Location: ../login-admin");
        exit();
    }

    $datedeb = date('Y-m-d');
    $datefin = date('Y-m-d');

    $_SESSION['datedeb'] = $datedeb;
    $_SESSION['datefin'] = $datefin;
?>
<!DOCTYPE html>
<html lang="en"  data-layout="horizontal" data-topbar="light" data-sidebar="light" data-bs-theme="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="vintage" data-theme-colors="default" data-sidebar-user-show>
    <head>
        <meta charset="utf-8" />
        <title> Dashboard</title>
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
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                    <h4 class="mb-sm-0"><code>DU <?= $_SESSION['datedeb'] ?></code><code> Au <?= $_SESSION['datefin'] ?></code> </h4>

                                    <div class="page-title-right">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dépôts">Filtre</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row project-wrapper">
                           
                            <div class="col-xxl-8">
                                <div class="row">

                                    <div class="col-xl-3">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-warning-subtle text-warning rounded-2 fs-2">
                                                            <i class="fa-solid fa-calendar-days text-warning"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="text-uppercase fw-medium text-muted mb-3">
                                                            Les évènements
                                                        </p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <?php  
                                                                require 'models/count-events.php';
                                                                if ($events = $req->fetch(PDO::FETCH_OBJ)) {
                                                            ?>
                                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="<?= $events->events ?>">0</span></h4>
                                                            <?php } ?>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            <a href="tips">
                                                                Voir détail
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-3">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-success-subtle text-success rounded-2 fs-2">
                                                            <i class="fa-solid fa-calendar-check text-success"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="text-uppercase fw-medium text-muted mb-3">
                                                            Les évènements actifs
                                                        </p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <?php  
                                                                require 'models/count-events-actifs.php';
                                                                if ($eventsactifs = $req->fetch(PDO::FETCH_OBJ)) {
                                                            ?>
                                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="<?= $eventsactifs->eventsactifs ?>">0</span></h4>
                                                            <?php } ?>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            <a href="events-actif">
                                                                Voir détail
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-3">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-danger-subtle text-danger rounded-2 fs-2">
                                                            <i class="fa-regular fa-calendar-xmark text-danger"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Les évènements inactifs</p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <?php  
                                                                require 'models/count-events-inactifs.php';
                                                                if ($eventsinactifs = $req->fetch(PDO::FETCH_OBJ)) {
                                                            ?>
                                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="<?= $eventsinactifs->eventsinactifs ?>">0</span></h4>
                                                            <?php } ?>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            <a href="events-inactif">
                                                                Voir détail
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-3">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle text-info rounded-2 fs-2">
                                                            <i class="fa-solid fa-user-tie text-info"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Les utilisateurs</p>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <?php  
                                                                require 'models/count-users.php';
                                                                if ($users = $req->fetch(PDO::FETCH_OBJ)) {
                                                            ?>
                                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="<?= $users->users ?>">0</span></h4>
                                                            <?php } ?>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            <a style="text-decoration: line-through;" href="#">
                                                                Voir détail
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex">
                                                <!-- <h4 class="card-title mb-0 flex-grow-1">Les évènts le plus vendus</h4> -->
                                            </div>
                                            <!-- end card header -->

                                            <div class="card-body p-0 pb-2">
                                                <div>
                                                    <div
                                                        id="projects-overview-chart"
                                                        data-colors='["--vz-primary", "--vz-warning", "--vz-success"]'
                                                        data-colors-minimal='["--vz-primary", "--vz-primary-rgb, 0.1", "--vz-primary-rgb, 0.50"]'
                                                        data-colors-interactive='["--vz-primary", "--vz-info", "--vz-warning"]'
                                                        data-colors-creative='["--vz-secondary", "--vz-warning", "--vz-success"]'
                                                        data-colors-corporate='["--vz-primary", "--vz-secondary", "--vz-danger"]'
                                                        data-colors-galaxy='["--vz-primary", "--vz-primary-rgb, 0.1", "--vz-primary-rgb, 0.50"]'
                                                        data-colors-classic='["--vz-primary", "--vz-secondary", "--vz-warning"]'
                                                        dir="ltr"
                                                        class="apex-charts"
                                                    ></div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->

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
            <div class="modal-dialog">
                <form method="POST" action="models/filter.php">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingcontentModalLabel">Filtrer le résultat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="mb-3">
                                <label for="datedeb-name" class="col-form-label">Date debut:</label>
                                <input type="date" value="<?= date('Y-m-d') ?>" class="form-control" name="datedeb" id="datedeb-name" required />
                            </div>

                            <div class="mb-3">
                                <label for="datefin-name" class="col-form-label">Date fin:</label>
                                <input type="date" value="<?= date('Y-m-d') ?>" class="form-control" name="datefin" id="datefin-name" required />
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Lancer la recherche</button>
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script type="text/javascript">
            
            <?php  
                require 'models/users-events.php';
            ?>
            
            var options = {
                series: [
                    {
                        name: "Total des achats",
                        data: <?php echo json_encode($nombreUtilisateurs); ?>
                    },
                ],
                chart: {
                    height: 350,
                    type: "line",
                    zoom: {
                        enabled: false,
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    curve: "straight",
                },
                title: {
                    text: "Les évènements le plus vendus",
                    align: "left",
                },
                grid: {
                    row: {
                        colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
                        opacity: 0.5,
                    },
                },
                xaxis: {
                    categories: <?php echo json_encode($astuces); ?>
                },
            };

            var chart = new ApexCharts(document.querySelector("#projects-overview-chart"), options);
            chart.render();


        </script>
    </body>
</html>
