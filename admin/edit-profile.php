<?php
require_once('config/connect.php');
require_once('functions/functions.php');

if (!isset($_SESSION['super_log'])) {
    gotoPage("../index");
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <title>AKKHOR | Account Setting</title>
    <meta name="description" content="">
    <?php require_once('includes/head.php'); ?>

</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <?php require_once('includes/header.php') ?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php require_once('includes/sidebar.php') ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Account Setting</h3>
                    <ul>
                        <li>
                            <a href="index">Home</a>
                        </li>
                        <li>Setting</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Account Settings Area Start Here -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add New User</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="new-added-form">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>First Name *</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Last Name *</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Gender *</label>
                                            <select class="select2">
                                                <option value="">Please Select Gender *</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>E-Mail</label>
                                            <input type="email" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Phone</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Department</label>
                                            <select class="select2">
                                                <option value="">Please Select*</option>
                                                <option value="1">Mathmetics</option>
                                                <option value="2">English</option>
                                                <option value="3">Chemistry</option>
                                                <option value="3">Biology</option>
                                                <option value="3">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>ID No *</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>

                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- All Subjects Area End Here -->
                <footer class="footer-wrap-layout1">
                    <?php require_once('includes/footer.php') ?>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <?php require_once('includes/js_imports.php') ?>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/account-settings by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 18:57:08 GMT -->

</html>