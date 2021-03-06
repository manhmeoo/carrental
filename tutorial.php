<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>

    <title>Car Rental|| Contact Us Page</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <!--slick-slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all"
        data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <style>
    .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }
    </style>
</head>

<body>
    <<!-- Start Switcher -->
        <?php include('includes/colorswitcher.php');?>
        <!-- /Switcher -->

        <!--Header-->
        <?php include('includes/header.php');?>
        <!-- /Header -->

        <!--Page Header-->
        <section class="page-header contactus_page">
            <div class="container">
                <div class="page-header_wrap">
                    <div class="page-heading">
                        <h1>tutorial</h1>
                    </div>
                    <ul class="coustom-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>tutorial</li>
                    </ul>
                </div>
            </div>
            <!-- Dark Overlay-->
            <div class="dark-overlay"></div>
        </section>
        <!-- /Page Header-->

        <!--Contact-us-->
        <section class="section-padding">
            <div class="tutorial-container">
                <div class="details-container">
                    <div class="left">
                        <div>
                            <img src="assets\images\tutorialFirstStep.png" alt="first step">
                        </div>
                        <div class="step">
                            <h3 style=" font-family: Times New Roman">T??m Xe</h3>
                            <p style=" font-family: Times New Roman">B???n c?? th??? t??m xe ??ng ?? nhanh
                                ch??ng ??? n??i b???n mu???n t??m, th???i gian, h??ng xe, ?????t xe nhanh</p>
                        </div>
                        <div ">
                            <img src=" assets\images\thirdStep.png" alt="first step">
                        </div>
                        <div class="step">
                            <h3 style=" font-family: Times New Roman">?????t C???c</h3>
                            <p style=" font-family: Times New Roman">Sau khi nh???n ???????c s??? ?????ng ?? t??? ch???
                                xe, kh??ch h??ng c?? th??? ?????t c???c b???ng 3 h??nh th???c chuy???n kho???n, v?? ??i???n t??? ho???c ti???n m???t.
                            </p>

                        </div>
                        <div>
                            <img src="assets\images\fifthStep.png" alt="first step">
                        </div>
                        <div class="step">
                            <h3 style=" font-family: Times New Roman">Tr??? xe</h3>
                            <p style=" font-family: Times New Roman">Sau khi h???t th???i gian thu??, b???n
                                ho??n tr??? xe gi???ng nh?? t??nh tr???ng v?? th???a thu???n ban ?????u. K?? x??c nh???n bi??n b???n b??n giao,
                                nh???n l???i gi???y t??? ????? ho??n th??nh chuy???n ??i tuy???t v???i c???a b???n.</p>
                        </div>
                    </div>
                    <div class="tutorial-line">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="right">
                        <div class="step">
                            <h3 style=" font-family: Times New Roman">????ng Nh???p</h3>
                            <p style=" font-family: Times New Roman">????ng nh???p v??o Mioto qua Facebook,
                                Google, s??? ??i???n tho???i ho???c email c???a b???n. Ch??ng t??i c???n
                                b???n x??c th???c s??? ??i???n tho???i tr?????c khi ?????t xe.</p>
                        </div>
                        <div><img src="assets\images\secondStep.png" alt="first step"></div>
                        <div class="step">
                            <h3 style=" font-family: Times New Roman">?????t Xe</h3>
                            <p style=" font-family: Times New Roman">L???a ch???n chi???c xe m?? b???n ??ng ?? v??
                                g???i Y??u c???u xe ?????n Ch??? xe. Sau ???? ch??? xe s??? nhanh ch??ng ph???n h???i ?????n b???n trong th???i gian
                                nhanh nh???t.</p>
                        </div>
                        <div><img src="assets\images\fourthStep.png" alt="first step"></div>
                        <div class="step">
                            <h3 style=" font-family: Times New Roman">Nh???n xe</h3>
                            <p style=" font-family: Times New Roman">B???n v?? ch??? xe li??n h??? g???p nhau ?????
                                nh???n xe. ??? Mioto, c?? nhi???u ch??? xe s???n s??ng ??em xe ?????n t???n n??i cho b???n.k?? x??c nh???n bi??n
                                b???n giao xe, nh???n ch??a kh??a v?? b???t ?????u h??nh tr??nh c???a b???n</p>
                        </div>
                        <div><img src="assets\images\finalStep.png" alt="first step"></div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /Contact-us-->


        <!--Footer -->
        <?php include('includes/footer.php');?>
        <!-- /Footer-->

        <!--Back to top-->
        <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>
        </div>
        <!--/Back to top-->

        <!--Login-Form -->
        <?php include('includes/login.php');?>
        <!--/Login-Form -->

        <!--Register-Form -->
        <?php include('includes/registration.php');?>

        <!--/Register-Form -->

        <!--Forgot-password-Form -->
        <?php include('includes/forgotpassword.php');?>
        <!--/Forgot-password-Form -->

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/interface.js"></script>
        <!--Switcher-->
        <script src="assets/switcher/js/switcher.js"></script>
        <!--bootstrap-slider-JS-->
        <script src="assets/js/bootstrap-slider.min.js"></script>
        <!--Slider-JS-->
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->

</html>