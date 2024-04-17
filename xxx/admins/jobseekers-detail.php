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
    data-layout="vertical"
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
        <title>Démandeurs d'emploi</title>
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

            <!-- removeNotificationModal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width: 100px; height: 100px;"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
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
                        <div class="profile-foreground position-relative mx-n4 mt-n4">
                            <div class="profile-wid-bg">
                                <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                            </div>
                        </div>
                        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                            <div class="row g-4">
                                <div class="col-auto">
                                    <div class="avatar-lg">
                                        <img src="assets/images/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col">
                                    <div class="p-2">
                                        <h3 class="text-white mb-1">Anna Adame</h3>
                                        <p class="text-white text-opacity-75">Owner & Founder</p>
                                        <div class="hstack text-white-50 gap-1">
                                            <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>California, United States</div>
                                            <div><i class="ri-building-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>Themesbrand</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-12 col-lg-auto order-last order-lg-0">
                                    <div class="row text text-white-50 text-center">
                                        <div class="col-lg-6 col-4">
                                            <div class="p-2">
                                                <h4 class="text-white mb-1">24.3K</h4>
                                                <p class="fs-14 mb-0">Interêt</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-4">
                                            <div class="p-2">
                                                <h4 class="text-white mb-1">1.3K</h4>
                                                <p class="fs-14 mb-0">Consulter</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="d-flex profile-wrapper">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Aperçu</span>
                                                </a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                                    <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Activities</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                                    <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Projects</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Documents</span>
                                                </a>
                                            </li> -->
                                        </ul>
                                        <div class="flex-shrink-0">
                                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Supprimer</a>
                                        </div>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content pt-4 text-muted">
                                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                            <div class="row">
                                                <div class="col-xxl-3">
                                                    
                                                    <!-- <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-5">Complete Your Profile</h5>
                                                            <div class="progress animated-progress custom-progress progress-label">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="label">30%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-3">Info</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Nom et prénom :</th>
                                                                            <td class="text-muted">Anna Adame</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Sexe :</th>
                                                                            <td class="text-muted">Anna Adame</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Mobile :</th>
                                                                            <td class="text-muted">+(1) 987 6543</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                                            <td class="text-muted">daveadame@velzon.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Adresse :</th>
                                                                            <td class="text-muted">California, United States</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Date d'inscription</th>
                                                                            <td class="text-muted">24 Nov 2021</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Date de naissance</th>
                                                                            <td class="text-muted">24 Nov 2021</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Pretension salariale</th>
                                                                            <td class="text-muted">24 Nov 2021</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Années d'éxpérience pro.</th>
                                                                            <td class="text-muted">24 Nov 2021</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Les contrants</th>
                                                                            <td class="text-muted">24 Nov 2021</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">Compétances</h5>
                                                            <div class="d-flex flex-wrap gap-2 fs-15">
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Photoshop</a>
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">illustrator</a>
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">HTML</a>
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">CSS</a>
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Javascript</a>
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Php</a>
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Python</a>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">Langues</h5>
                                                            <div class="d-flex flex-wrap gap-2 fs-15">
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Français</a>
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Anglais</a>
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Latin</a>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center mb-4">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="card-title mb-0">Expériences pro</h5>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-4">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/img-4.jpg" alt="" height="50" class="rounded material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <a href="javascript:void(0);">
                                                                        <h6 class="text-truncate fs-14">Design your apps in your own way</h6>
                                                                    </a>
                                                                    <p class="text-muted mb-0">15 Dec 2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-4">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/img-5.jpg" alt="" height="50" class="rounded material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <a href="javascript:void(0);">
                                                                        <h6 class="text-truncate fs-14">Smartest Applications for Business</h6>
                                                                    </a>
                                                                    <p class="text-muted mb-0">28 Nov 2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/img-6.jpg" alt="" height="50" class="rounded material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <a href="javascript:void(0);">
                                                                        <h6 class="text-truncate fs-14">How to get creative in your work</h6>
                                                                    </a>
                                                                    <p class="text-muted mb-0">21 Nov 2021</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center mb-4">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="card-title mb-0">Éducation</h5>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-4">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/img-4.jpg" alt="" height="50" class="rounded material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <a href="javascript:void(0);">
                                                                        <h6 class="text-truncate fs-14">Design your apps in your own way</h6>
                                                                    </a>
                                                                    <p class="text-muted mb-0">15 Dec 2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-4">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/img-5.jpg" alt="" height="50" class="rounded material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <a href="javascript:void(0);">
                                                                        <h6 class="text-truncate fs-14">Smartest Applications for Business</h6>
                                                                    </a>
                                                                    <p class="text-muted mb-0">28 Nov 2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/img-6.jpg" alt="" height="50" class="rounded material-shadow" />
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <a href="javascript:void(0);">
                                                                        <h6 class="text-truncate fs-14">How to get creative in your work</h6>
                                                                    </a>
                                                                    <p class="text-muted mb-0">21 Nov 2021</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-9">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-3">À propos</h5>
                                                            <p>
                                                                Hi I'm Anna Adame, It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge
                                                                friend of mine told me what Occidental is European languages are members of the same family.
                                                            </p>
                                                            <p>
                                                                You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that
                                                                you already have in the software you’re working with reputable font websites. This may be the most commonly encountered tip I received from the designers I spoke with. They
                                                                highly encourage that you use different fonts in one design, but do not over-exaggerate and go overboard.
                                                            </p>
                                                            <div class="row">
                                                                <div class="col-6 col-md-4">
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary material-shadow">
                                                                                <i class="ri-user-2-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="mb-1">Secteur d'activité :</p>
                                                                            <h6 class="text-truncate mb-0">Lead Designer / Developer</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-6 col-md-4">
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary material-shadow">
                                                                                <i class="ri-global-line"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="mb-1">Website :</p>
                                                                            <a href="#" class="fw-semibold">www.velzon.com</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="tab-pane fade" id="activities" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-3">Activities</h5>
                                                    <div class="acitivity-timeline">
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/avatar-1.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar material-shadow" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Oliver Phillips <span class="badge bg-primary-subtle text-primary align-middle">New</span></h6>
                                                                <p class="text-muted mb-2">We talked about a project on linkedin.</p>
                                                                <small class="mb-0 text-muted">Today</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                                <div class="avatar-title bg-success-subtle text-success rounded-circle material-shadow">
                                                                    N
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Nancy Martino <span class="badge bg-secondary-subtle text-secondary align-middle">In Progress</span></h6>
                                                                <p class="text-muted mb-2"><i class="ri-file-text-line align-middle ms-2"></i> Create new project Buildng product</p>
                                                                <div class="avatar-group mb-2">
                                                                    <a href="javascript: void(0);" class="avatar-group-item material-shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Christi">
                                                                        <img src="assets/images/avatar-4.jpg" alt="" class="rounded-circle avatar-xs" />
                                                                    </a>
                                                                    <a href="javascript: void(0);" class="avatar-group-item material-shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Hook">
                                                                        <img src="assets/images/avatar-3.jpg" alt="" class="rounded-circle avatar-xs" />
                                                                    </a>
                                                                    <a href="javascript: void(0);" class="avatar-group-item material-shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title=" Ruby">
                                                                        <div class="avatar-xs">
                                                                            <div class="avatar-title rounded-circle bg-light text-primary material-shadow">
                                                                                R
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="javascript: void(0);" class="avatar-group-item material-shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="more">
                                                                        <div class="avatar-xs">
                                                                            <div class="avatar-title rounded-circle">
                                                                                2+
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <small class="mb-0 text-muted">Yesterday</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar material-shadow" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Natasha Carey <span class="badge bg-success-subtle text-success align-middle">Completed</span></h6>
                                                                <p class="text-muted mb-2">Adding a new event with attachments</p>
                                                                <div class="row">
                                                                    <div class="col-xxl-4">
                                                                        <div class="row border border-dashed gx-2 p-2 mb-2">
                                                                            <div class="col-4">
                                                                                <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid rounded material-shadow" />
                                                                            </div>
                                                                            <!--end col-->
                                                                            <div class="col-4">
                                                                                <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid rounded material-shadow" />
                                                                            </div>
                                                                            <!--end col-->
                                                                            <div class="col-4">
                                                                                <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid rounded material-shadow" />
                                                                            </div>
                                                                            <!--end col-->
                                                                        </div>
                                                                        <!--end row-->
                                                                    </div>
                                                                </div>
                                                                <small class="mb-0 text-muted">25 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/avatar-6.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar material-shadow" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Bethany Johnson</h6>
                                                                <p class="text-muted mb-2">added a new member to velzon dashboard</p>
                                                                <small class="mb-0 text-muted">19 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar">
                                                                    <div class="avatar-title rounded-circle bg-danger-subtle text-danger material-shadow">
                                                                        <i class="ri-shopping-bag-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Your order is placed <span class="badge bg-danger-subtle text-danger align-middle ms-1">Out of Delivery</span></h6>
                                                                <p class="text-muted mb-2">These customers can rest assured their order has been placed.</p>
                                                                <small class="mb-0 text-muted">16 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/avatar-7.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar material-shadow" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Lewis Pratt</h6>
                                                                <p class="text-muted mb-2">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                                                <small class="mb-0 text-muted">22 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar">
                                                                    <div class="avatar-title rounded-circle bg-info-subtle text-info material-shadow">
                                                                        <i class="ri-line-chart-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Monthly sales report</h6>
                                                                <p class="text-muted mb-2">
                                                                    <span class="text-danger">2 days left</span> notification to submit the monthly sales report.
                                                                    <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a>
                                                                </p>
                                                                <small class="mb-0 text-muted">15 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/avatar-8.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar material-shadow" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">New ticket received <span class="badge bg-success-subtle text-success align-middle">Completed</span></h6>
                                                                <p class="text-muted mb-2">User <span class="text-secondary">Erica245</span> submitted a ticket.</p>
                                                                <small class="mb-0 text-muted">26 Aug</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane fade" id="projects" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none profile-project-warning material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Chat App Update</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">2 year Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-warning-subtle text-warning fs-10">Inprogress</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-1.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                                J
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none profile-project-success material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">ABC Project Customization</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">2 month Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-primary-subtle text-primary fs-10">Progress</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-8.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <div class="avatar-title rounded-circle bg-primary">
                                                                                                2+
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none profile-project-info material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Client - Frank Hook</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">1 hr Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-info-subtle text-info fs-10">New</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                                M
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none profile-project-primary material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Velzon Project</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">11 hr Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-success-subtle text-success fs-10">Completed</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none profile-project-danger material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Brand Logo Design</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">10 min Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-info-subtle text-info fs-10">New</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                                E
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none profile-project-primary material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Chat App</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">8 hr Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-warning-subtle text-warning fs-10">Inprogress</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                                R
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-8.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none profile-project-warning material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Project Update</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">48 min Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-warning-subtle text-warning fs-10">Inprogress</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none profile-project-success material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Client - Jennifer</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">30 min Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-primary-subtle text-primary fs-10">Process</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-1.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none mb-xxl-0 profile-project-info material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Bsuiness Template - UI/UX design</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">7 month Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-success-subtle text-success fs-10">Completed</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-2.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <div class="avatar-title rounded-circle bg-primary">
                                                                                                2+
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none mb-xxl-0 profile-project-success material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Update Project</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">1 month Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-info-subtle text-info fs-10">New</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                                A
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none mb-sm-0 profile-project-danger material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Bank Management System</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">10 month Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-success-subtle text-success fs-10">Completed</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <div class="avatar-title rounded-circle bg-primary">
                                                                                                2+
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-3 col-sm-6">
                                                            <div class="card profile-project-card shadow-none mb-0 profile-project-primary material-shadow">
                                                                <div class="card-body p-4">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 text-muted overflow-hidden">
                                                                            <h5 class="fs-14 text-truncate"><a href="#" class="text-body">PSD to HTML Convert</a></h5>
                                                                            <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">29 min Ago</span></p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <div class="badge bg-info-subtle text-info fs-10">New</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                <div>
                                                                                    <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                                                </div>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item material-shadow">
                                                                                        <div class="avatar-xs">
                                                                                            <img src="assets/images/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-12">
                                                            <div class="mt-4">
                                                                <ul class="pagination pagination-separated justify-content-center mb-0">
                                                                    <li class="page-item disabled">
                                                                        <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                                    </li>
                                                                    <li class="page-item active">
                                                                        <a href="javascript:void(0);" class="page-link">1</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a href="javascript:void(0);" class="page-link">2</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a href="javascript:void(0);" class="page-link">3</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a href="javascript:void(0);" class="page-link">4</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a href="javascript:void(0);" class="page-link">5</a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane fade" id="documents" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-4">
                                                        <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                                        <div class="flex-shrink-0">
                                                            <input class="form-control d-none" type="file" id="formFile" />
                                                            <label for="formFile" class="btn btn-danger"><i class="ri-upload-2-fill me-1 align-bottom"></i> Upload File</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless align-middle mb-0">
                                                                    <thead class="table-light">
                                                                        <tr>
                                                                            <th scope="col">File Name</th>
                                                                            <th scope="col">Type</th>
                                                                            <th scope="col">Size</th>
                                                                            <th scope="col">Upload Date</th>
                                                                            <th scope="col">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div class="avatar-title bg-primary-subtle text-primary rounded fs-20 material-shadow">
                                                                                            <i class="ri-file-zip-fill"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0)">Artboard-documents.zip</a></h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>Zip File</td>
                                                                            <td>4.57 MB</td>
                                                                            <td>12 Dec 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink15">
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                                        </li>
                                                                                        <li class="dropdown-divider"></li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div class="avatar-title bg-danger-subtle text-danger rounded fs-20 material-shadow">
                                                                                            <i class="ri-file-pdf-fill"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Bank Management System</a></h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>PDF File</td>
                                                                            <td>8.89 MB</td>
                                                                            <td>24 Nov 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink3">
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                                        </li>
                                                                                        <li class="dropdown-divider"></li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div class="avatar-title bg-secondary-subtle text-secondary rounded fs-20 material-shadow">
                                                                                            <i class="ri-video-line"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Tour-video.mp4</a></h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>MP4 File</td>
                                                                            <td>14.62 MB</td>
                                                                            <td>19 Nov 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink4">
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                                        </li>
                                                                                        <li class="dropdown-divider"></li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div class="avatar-title bg-success-subtle text-success rounded fs-20 material-shadow">
                                                                                            <i class="ri-file-excel-fill"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Account-statement.xsl</a></h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>XSL File</td>
                                                                            <td>2.38 KB</td>
                                                                            <td>14 Nov 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink5" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink5">
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                                        </li>
                                                                                        <li class="dropdown-divider"></li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div class="avatar-title bg-info-subtle text-info rounded fs-20 material-shadow">
                                                                                            <i class="ri-folder-line"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Project Screenshots Collection</a></h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>Floder File</td>
                                                                            <td>87.24 MB</td>
                                                                            <td>08 Nov 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink6">
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div class="avatar-title bg-danger-subtle text-danger rounded fs-20 material-shadow">
                                                                                            <i class="ri-image-2-fill"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0">
                                                                                            <a href="javascript:void(0);">Velzon-logo.png</a>
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>PNG File</td>
                                                                            <td>879 KB</td>
                                                                            <td>02 Nov 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink7" data-bs-toggle="dropdown" aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink7">
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="text-center mt-3">
                                                                <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load more </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end tab-pane-->
                                    </div>
                                    <!--end tab-content-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!-- container-fluid -->
                </div>

                <!-- End Page-content -->

                <?php require 'views/footer.php'; ?>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

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
