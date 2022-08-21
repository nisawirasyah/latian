<!DOCTYPE html>
<html lang="zxx">

<?php include 'koneksi.php';?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Martup - Multipurpose eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Martup is Multipurpose eCommerce HTML Template, that's perfect for any kind of eCommerce websites such as fashion, furniture and many more.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/material-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
    <script type="text/javascript" src="script.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
<link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <?php include 'header.php';?>

    <!-- ...::: Strat Breadcrumb Section :::... -->
    <div class="breadcrumb-section">
        <div class="box-wrapper">
            <div class="breadcrumb-wrapper breadcrumb-wrapper--style-1 pos-relative">
                <div class="breadcrumb-bg">
                    <img src="assets/images/banner/layout-my-account.JPG" alt="">
                </div>
                <div class="breadcrumb-content section-fluid-270">
                    <div class="breadcrumb-wrapper">
                        <div class="content">
                            <span class="title-tag">BEST DEAL FOREVER</span>
                            <h2 class="title"><span class="text-mark">Account</span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...:::: Start Account Dashboard Section:::... -->
    <div class="account-dashboard section-fluid-270 section-top-gap-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link btn btn-sm btn-default-outline ">Dashboard</a></li>
                            <li><a href="#orders" data-bs-toggle="tab" class="nav-link btn btn-sm btn-default-outline ">Orders</a></li>
                            <li><a href="#products" data-bs-toggle="tab" class="nav-link btn btn-sm btn-default-outline ">Products</a></li>
                            <li><a href="#account-detail" data-bs-toggle="tab" class="nav-link btn btn-sm btn-default-outline active">Edit Details Store </a></li>
                            <li><a href="logout.php" id="confirm" class="nav-link btn btn-sm btn-default-outline" onclick="reset()">logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Dashboard </h4>
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <h6><strong>Warung Moa</strong></h6>
                            <h6><strong>Nisa Wirasyah, Pengelola</strong></h6>
                            <p><strong>nisawirasyah@gmail.com</strong></p>
                            <address>Bekasi, Jawa Barat</address>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <h4>Orders</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>May 10, 2018</td>
                                            <td><span class="success">Completed</span></td>
                                            <td>$25.00 for 1 item </td>
                                            <td><a href="cart.html" class="view">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>May 10, 2018</td>
                                            <td>Processing</td>
                                            <td>$17.00 for 1 item </td>
                                            <td><a href="cart.html" class="view">view</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="products">
                            <h4>Products</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Pre-Orders</th>
                                            <th>Date Realease</th>
                                            <th>Full Payment</th>
                                            <th>Down Payment</th>
                                            <th>Change Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mini Album TXT Minisode : 2</td>
                                            <td>May 09, 2022</td>
                                            <td><a href="#" class="view">10</a></td>
                                            <td><a href="#" class="view">25</a></td>
                                            <td><a href="#" class="view">Change Information</a></td>
                                        </tr>
                                        <tr>
                                            <td>2nd Memories TXT</td>
                                            <td>Maret, 2018</td>
                                            <td><a href="#" class="view">4</a></td>
                                            <td><a href="#" class="view">7</a></td>
                                            <td><a href="#" class="view">Change Information</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Ready Stock</th>
                                            <th>Date Realease</th>
                                            <th>Stock</th>
                                            <th>Change Information</th>
                                            <th>Archive</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Treasure - The Second Step : Chapter One</td>
                                            <td>February 15, 2022</td>
                                            <td>30</span></td>
                                            <td><a href="#" class="view">Change</a></td>
                                            <td><a href="#" class="view">Archive</a></td>
                                        </tr>
                                        <tr>
                                            <td>Plushie HeadBong</td>
                                            <td>April, 2022</td>
                                            <td>10</td>
                                            <td><a href="#" class="view">Change</a></td>
                                            <td><a href="#" class="view">Archive</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sold Out</th>
                                            <th>Date Realease</th>
                                            <th>Change Information</th>
                                            <th>Archive</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NCT Dream Album : Glitch Mode</td>
                                            <td>April, 2022</td>
                                            <td><a href="#" class="view">Change</a></td>
                                            <td><a href="#" class="view">Archive</a></td>
                                            <td><a href="#" class="view">Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Archive</th>
                                            <th>Date Realease</th>
                                            <th>Change Information</th>
                                            <th>Showing</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NCT 127 Album : Regular</td>
                                            <td>October, 2018</td>
                                            <td><a href="#" class="view">Change</a></td>
                                            <td><a href="#" class="view">Showing</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="address">
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <h5 class="billing-address">Store Information</h5>
                            <a href="#" class="view">Edit</a>
                            <h5><strong>Warung Moa</strong></h5>
                            <h5><strong>Nisa Wirasyah, Pengelola</strong></h5>
                            <p><strong>nisawirasyah@gmail.com</strong></p>
                            <address>Bekasi, Jawa Barat</address>
                        </div>
                        <div class="tab-pane fade" id="account-detail">
                            <h3>Edit Details Store </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="#">
                                            <div class="default-form-box mb-20">
                                                <label>Username </label>
                                                <input type="text" name="username">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Shop Name </label>
                                                <input type="text" name="nama">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="text" name="email">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Password </label>
                                                <input type="password" name="pass">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Reconfirm Password</label>
                                                <input type="text" name="rpass">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Phone </label>
                                                <input type="text" name="phone">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Address </label>
                                                <input type="text" name="alamat">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Bank Name </label>
                                                <input type="text" name="namabank">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Bank ID </label>
                                                <input type="text" name="norek">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Profile Picture</label>
                                                <input type="text" name="imgprofile">
                                            </div>
                                            <br>
                                            <label class="checkbox-default" for="offer">
                                                <input type="checkbox" id="offer">
                                                <span>Receive offers from our partners</span>
                                            </label>
                                            <br>
                                            <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                                <input type="checkbox" id="newsletter">
                                                <span>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></span>
                                            </label>
                                            <div class="save_button mt-3">
                                                <button class="btn btn-sm btn-default-outline" name="submit1" onclick="save()" type="submit" >Save</button>
                                            </div>
                                            <br>
                                            <div class="default-form-box-mb-20">
                                                <label id="savacc"><br></label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Account Dashboard Section:::... -->

    <?php include 'footer.php';?>

    <!-- Scroll To button -->
    <div id="scroll-to-top" class="scroll-to-top"><span class="material-icons-outlined">expand_less</span></div>

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script> -->
    <!-- <script src="assets/js/plugins/plugins.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>
    <!-- <script src="assets/js/main.min.js"></script> -->

    <script type="">
        function save(){
            document.getElementById("savacc")innerHTML = "Perubahan Berhasil Disimpan!";
        }
    </script>

    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="js/alertify.min.js"></script>
    <script>
        function reset() {
            document.alertify.set({
                labels : {
                    ok      : "OK",
                    cancel  : "Cancel"
                },

                delay : 5000,
                buttonReverse : false,
                buttonFocus   : "ok"
            });
        }

        $("#confirm").on("click", function() {
            reset();
            alertify.confirm("This is a confirm dialog", function (e) {
                if (e) {
                alertify.success("You've clicked OK");
                } else {
                    alertify.error("You've clicked Cancel");
                }
            });
            return false;
        });
    </script>

</body>

</html>