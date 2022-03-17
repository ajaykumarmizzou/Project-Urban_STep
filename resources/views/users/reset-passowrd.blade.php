<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
    <title>Dashboard</title>
</head>

<body>
    <section class="sec1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <img src="images/logo.png" class="img-responsive">
                </div>
                <div class="col-sm-8 text-center">
                    <!-- <h2>Cities Are <span>Better</span><br>
                    When <span class="spn2">Citizens</span> Are Involved
                    </h2> -->
                    <img src="images/ads.jpg" class="img-responsive adsHght">
                </div>
                <div class="col-sm-2">
                    <img src="images/logo4.jpg" class="img-responsive pull-right flt-right">
                    <!-- <ul class="sgnbtn">
                        <li><a href="#"  data-toggle="modal" data-target="#loginModal">Sign In</a></li>
                    </ul> -->
                    <!-- <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="index.html"><i class="fa fa-fw fa-user-circle"></i>डैशबोर्ड</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-fw fa-table"></i>मेरी प्रोफाइल </a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile.blade.php">प्रोफाइल देखिये</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="edit-profile.blade.php">प्रोफाइल एडिट करें</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="reset-passowrd.blade.php">पासवर्ड बदलें</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="complain.blade.php"><i class="fas fa-fw fa-file"></i>शिकायत</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="suggestion.blade.php"><i class="fas fa-fw fa-file"></i>सुझाव</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="feedback.blade.php"><i class="fas fa-fw fa-file"></i>प्रतिक्रिया</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="suggestion.blade.php"><i class="fas fa-cog"></i>सेटिंग</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="login.blade.php"><i class="fas fa-power-off"></i>लोग आउट</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">पासवर्ड बदलें</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">डैशबोर्ड</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">पासवर्ड रीसेट</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="user-profile">
                                <div class="details">
                                    <div>
                                        <div>पुराना पासवर्ड</div>
                                        <div>
                                            <input type="password" name="" class="form-control" placeholder="Enter Old Password">
                                        </div>
                                    </div>
                                    <div>
                                        <div>नया पासवर्ड</div>
                                        <div>
                                            <input type="password" name="" class="form-control" placeholder="Enter New Password">
                                        </div>
                                    </div>
                                    <div>
                                        <div>पासवर्ड की पुष्टि कीजिये</div>
                                        <div>
                                            <input type="password" name="" class="form-control" placeholder="Confirm New Password">
                                        </div>
                                    </div>
                                    <div>
                                        <a class="btn btn-default btnD1" href="#">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 We - The Change. All rights reserved. Dashboard by <a href="#">Fuel4media</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="js/bootstrap.bundle.js"></script>
    <!-- main js -->
    <script src="js/main-js.js"></script>
</body>
</html>