<!DOCTYPE html>
<html lang="zxx">
<?php include "koneksi.php";?>
<?php require_once "vendor/autoload.php";

$clientID='487371575568-bid6ia5uojm8h4hac24hbts7vmilk4em.apps.googleusercontent.com'; //ini tuh kyk username kalo misal kita mau login ke suatu aplikasi. karna ini basic nya tuh sistem ke sistem, maka menggunakan nya seperti clientID ini.
$clientSecret='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'; //kalo ini kyak password. karna sama, ini basic nya dari sistem ke sistem, maka menggunakan nya adalah clientSecret
$redirectUrl='http://localhost/martup-multipurpose-ecommerce-html-template/martup/login.php';

// Membuat request client nya ke google

$client = new Google_Client(); //class nya
$client->setClientId($clientID); //tetapkan clientID OAuth 2.0 nya
$client->setClientSecret($clientSecret); //tetapkan clientSecret OAuth 2.0 nya
$client->setRedirectUri($redirectUrl); //tetapkan redirectURL OAuth 2.0 nya
$client->addScope('profile'); //mengambil dari profile akun google
$client->addScope('email'); //mengambil dari email akun google

?>
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
                    <img src="assets/images/breadcrumb/breadcrumb-img-product-details-page.webp" alt="">
                </div>
                <div class="breadcrumb-content section-fluid-270">
                    <div class="breadcrumb-wrapper">
                        <div class="content">
                            <span class="title-tag">BEST DEAL FOREVER</span>
                            <h2 class="title"><span class="text-mark">Login</span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...:::: Start Customer Login Section :::... -->
    <div class="customer-login section-fluid-270 section-top-gap-100">
        <div class="container-fluid">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h3>login</h3>
                        <form action="ceklogin.php" method="POST">
                            <div class="default-form-box">
                                <label>Username <span>*</span></label>
                                <input name="s_username" type="text">
                            </div>
                            <div class="default-form-box">
                                <label>Passwords <span>*</span></label>
                                <input name="s_password" type="password">
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-sm btn-radius btn-default mb-4" name="submit" type="submit">login</button>
                                <label class="checkbox-default mb-4" for="offer">
                                    <input type="checkbox" id="offer">
                                    <span>Remember me</span>
                                </label>
                                <?php
                                if(isset($_GET['code'])){
                                    $token=$client->fetchAccessTokenWithAuthCode($_GET['code']); //untuk menukar kode dengan token authentikasi yang valid
                                    $client->setAccessToken($token); //menyetel token akses yang digunakan untuk permintaan

                                    //Mengambil dari user profile
                                    $gauth = new Google_Service_Oauth2($client); //class baru dengan parameter variabel $client
                                    $google_info = $gauth->userinfo->get(); //kasih fungsi get, untuk mengambil data pada akun google
                                    $email = $google_info->email; //ambil email
                                    $name = $google_info->name; //ambil nama
                                    
                                    @session_start(); //dihubungkan ke database
                                    $_SESSION['email'] = $email;
                                    $_SESSION['namaa'] = $name;

                                    $sql = "SELECT * FROM seller WHERE s_email = '".$_SESSION['email']."' "; //pilih tabel + kolom
                                    $hit1 = mysqli_query($conn, $sql); //fungsi mysqli menggunakan paramenter conected dan sql
                                    $countw = $hit1->num_rows; //menghitung jumlah kolom dari hasil select sql

                                    if($countw > 0){ //jika >0, maka data sudah ada pada database
                                        echo "<script>
                                                window.location ='index.php'; 
                                              </script>";

                                    } else { //jika <0, maka data baru akan dimasukan pada database

                                        $sql = "INSERT INTO seller (s_username, s_email, s_nama) VALUES ('".$_SESSION['namaa']."','" . $_SESSION['email'] . "', '" . $_SESSION['namaa']. "')";

                                        if ($conn->query($sql) === TRUE) { //kalo bener, bisa di direct ke halaman selanjutnya
                                            echo "<script>
                                                    window.location ='index.php'; 
                                                  </script>";
                                        } else { //kalo gagal, ada keterangan sql nya error
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                        }
                                    };
                                //echo "Welcome ".$name." You are registered using email: ".$email;
                                }
                                else{
                                    echo "<a href='".$client->createAuthUrl()."'>Login with Google</a>"; //createAuthUrl() nya untuk mendapatkan otorisasi pengguna. Memungkinkan user untuk mengautentikasi terlebih dahulu, dan kemudian memberikan/menolak permintaan akses. (ketika mau login with google, ada pilihan akun google. dapat dipilih untuk melanjutkan dengan akun yg diinginkan)
                                }
                                ?>
                                <a href="register.php">Not have account? Sign Up!</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--login area start-->
            </div>
        </div>
    </div> <!-- ...:::: End Customer Login Section :::... -->

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

</body>

</html>