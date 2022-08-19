<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.fixkart.in/landingpage/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Aug 2022 04:24:46 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="assets/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="assets/libs/nice-select/nice-select.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/hs-menu.min3860.css?v=1" />
    <link rel="stylesheet" href="assets/css/style3860.css?v=1">
    <link rel="stylesheet" href="assets/css/responsive3860.css?v=1">
    <link rel="icon" type="image/png" href="assets/img/l.html" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Fixxitindia</title>
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+91*8660806304‬*", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
</head>

<body ng-app="fixkart">

    <!-- <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div> -->
    <main ng-controller="headercontroller">
        <!--================Header==================-->
        <!--================Start Header===================-->
        <!---------Desktop Menu---------->
        <div class="d-none d-lg-block">
            <header id="navbar" class="header">
                <nav id="navbar" class="desktop-menu fixme container">
                    <div class="wrapper container-fluid col-lg-10 m-0 ms-0 me-0 w-100">
                        <div class="text-center text-lg-start">
                            <a href="index.html" class="logo navbar-brand"><img src="assets/img/fixxitindia-logo.png"
                                    width="" class="img-fluid me-4" alt=""></a>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <ul class="nav-links">
                                <li><a class="" href="#"><img src="assets/img/phone.png" class="img-fluid mx-1" alt="">
                                        <span>+91-9845937793</span></a></li>

                                <li><a href="#"><img src="assets/img/whatsapp.png" class="img-fluid" alt=""> Whatsapp
                                        Us</span></a></li>




                            </ul>


                            <div class="ms-3">
                                <a href="#" class="btn-orange-small">Get Quote</a>
                            </div>


                        </div>
                    </div>

                </nav>
            </header>
        </div>
        <!---------End Desktop Menu---------->
        <!---------Mobile Menu---------->
        <header class="hs-menubar mobile-menu d-block d-lg-none">
            <div class="brand-logo">
                <a href="index.html" class="logo navbar-brand"><img src="assets/img/fixxitindia-logo.png"
                        class="img-fluid" width="70%" alt=""></a>
            </div>
            <div class="menu-trigger"> <a class="" href="#"><img src="assets/img/whatsapp.png" class="img-fluid "
                        alt=""></a></div>
            <div class="call">
                <a href="#" class=""><a href="#"><img src="assets/img/phone.png" class="img-fluid" alt=""> </a>
            </div>


            <!-- <nav class="hs-navigation">
                    <div class="text-center">
                        <a href="index.html" class="logo navbar-brand"><img src="assets/img/fixxitindia-logo.png" class="img-fluid"
                        width="70%" alt=""></a>
                    </div>
                    
                    <div class="menu-trigger text-white close-nav"> <i class="fa text-white fa-times"></i></div>
                    <ul class="nav-links">
                        <li><a class="active" href="index.html">Home</a></li>
                        
                        <li><a href="#about">About</a></li>
                        
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        
                    </ul>
                    
                </nav> -->
        </header>
        <!---------End Mobile Menu---------->
        <!--================End Header===================-->

        <!--================Banner==================-->
        <section id="home" class="banner">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-7">
                        <div class="form-section mt-0 mb-0 d-block d-lg-none wow fadeInLeft" data-wow-duration="1500ms">

                            <div class="mb-4">
                                <h4 class="form-title">Contact us and get a<br> quote in 30 minutes!</h4>
                            </div>
                            <div class="mb-1">
                                <select class="form-control device_name" ng-model="devicel" ng-change="brand_list()">
                                    <option value="">SELECT DEVICE </option>
                                    <option ng-repeat="device in devicelist"  value="{{device.device_id}}">
                                        {{device.device_name}}</option>

                                </select>
                            </div>
                            <div class="mb-1">
                                <select class="form-control brand_name" ng-model="brandl" ng-change="model_list()">
                                    <option value="">SELECT BRAND </option>
                                    <option ng-repeat="brand in brandlist" value="{{brand.brand_id}}">
                                        {{brand.brand_name}}</option>

                                </select>
                            </div>
                            <div class="mb-1">
                                <select class="form-control model_name" ng-model="modell" ng-change="issue_list()">
                                    <option value="">SELECT MODEL </option>
                                    <option ng-repeat="model in modellist" value="{{model.modeL_id}}">
                                        {{model.model_name}}</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <select class="form-control issue_name" ng-model="issues">
                                    <option value="">SELECT ISSUE </option>
                                    <option ng-repeat="issue in issuelist" value="{{issue.issue_id}}">
                                        {{issue.issue_name}}</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <button ng-click="submit_requesr()" class="btn-orange">GET FREE QUOTE </button>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-5">
                        <div class="text-center wow fadeInRight" data-wow-duration="1500ms">
                            <img src="assets/img/fixit-img-removebg-preview.png" class="img-fluid" alt="">
                            <h1 class="title-big mb-4 mt-4 d-block d-lg-none wow fadeInUp" data-wow-duration="1500ms">
                                Free Pickup<br> & Delivery </h1>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--================End Banner==================-->
        <!--================About==================-->
        <section id="about" class="py-5">
            <div class="container-fluid py-md-3">
                <div class="col-md-11 mx-auto">
                    <div class="row g-5">
                        <div class="col-xl-4 col-lg-5 d-none d-lg-block mb-lg-0">
                            <div class="form-section  wow fadeInLeft" data-wow-duration="1500ms">

                                <div class="mb-4">
                                    <h4 class="form-title">Contact us and get a quote in 30 minutes!</h4>
                                </div>
                                <div class="mb-1">
                                    <select class="form-control" ng-model="devicel" ng-change="brand_list()" >
                                        <option value="">SELECT DEVICE </option>
                                        <option ng-repeat="device in devicelist"value="{{device.device_id}}">
                                            {{device.device_name}}</option>
                                    </select>
                                </div>
                                <div class="mb-1">
                                    <select class="form-control mybrabd" ng-model="brandl" ng-change="model_list()">
                                        <option value="">SELECT BRAND </option>
                                        <option ng-repeat="brand in brandlist" value="{{brand.brand_id}}">
                                            {{brand.brand_name}}</option>

                                    </select>
                                </div>
                                <div class="mb-1">
                                    <select class="form-control" ng-model="modell" ng-change="issue_list()">
                                        <option value="">SELECT MODEL </option>
                                        <option ng-repeat="model in modellist" value="{{model.modeL_id}}">
                                            {{model.model_name}}</option>

                                    </select>
                                </div>
                                <div class="mb-1">
                                    <select class="form-control" ng-model="issues">
                                        <option value="">SELECT ISSUE </option>
                                        <option ng-repeat="issue in issuelist" value="{{issue.issue_id}}">
                                            {{issue.issue_name}}</option>

                                    </select>
                                </div>
                                <div class="mb-1">
                                    <p style="color:red">{{nerror}}</p>
                                    <button ng-click="submit_requesr()" class="btn-orange">GET FREE QUOTE </button>
                                </div>

                            </div>
                            <h1 class="title-big mb-4 d-none d-lg-block wow fadeInUp" data-wow-duration="1500ms">Free
                                Pickup<br> & Delivery </h1>
                        </div>
                        <div class="col-xl-8 col-lg-7 text-center">
                            <div class="why-section">
                                <div class="text-center">
                                    <h2 class="title mb-4 wow fadeInUp" data-wow-duration="1500ms">Why Fixxitindia?
                                    </h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-4 mb-4">
                                        <div class="text-center wow fadeInLeft" data-wow-delay="0.2s">
                                            <img src="assets/img/icon1.svg" class="img-fluid" alt="">
                                            <h1 class="">One-stop<br> Solution </h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-4 mb-4">
                                        <div class="text-center wow fadeInLeft" data-wow-delay="0.3s">
                                            <img src="assets/img/icon2.svg" class="img-fluid" alt="">
                                            <h1 class="">Great<br> Prices </h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-4 mb-4">
                                        <div class="text-center wow fadeInLeft" data-wow-delay="0.4s">
                                            <img src="assets/img/icon3.svg" class="img-fluid" alt="">
                                            <h1 class="">Trained<br> Professionals </h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-4 mb-4">
                                        <div class="text-center wow fadeInLeft" data-wow-delay="0.5s">
                                            <img src="assets/img/icon4.svg" class="img-fluid" alt="">
                                            <h1 class="">Premium<br> Products </h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-4 mb-4">
                                        <div class="text-center wow fadeInLeft" data-wow-delay="0.6s">
                                            <img src="assets/img/icon5.svg" class="img-fluid" alt="">
                                            <h1 class="">Quick &<br> Hassle-free </h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-4 mb-4">
                                        <div class="text-center wow fadeInLeft" data-wow-delay="0.7s">
                                            <img src="assets/img/icon-6.png" class="img-fluid" alt="">
                                            <h1 class="">Guaranteed<br> Safety </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--================End About==================-->
        <!--================Videos==================-->


        <section>
            <div class="space-bottom-80">
                <section class="compare" style="background: #EAF4FF;">
                    <div class="container py-5">
                        <div class="col-md-12 text-center mb-4">
                            <h2 class="section-title text-black wow-head fadeInUp animated" data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">Our
                                favourite
                                trusted service partner</h2>
                        </div>
                        <div class="col-md-12 mx-auto">
                            <div id="counter" class="row ">
                                <div class="col-lg-4 col-4 col-md-4 wow fadeInLeft animated" data-wow-delay=".4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                    <div class="partner-card text-center">
                                        <h1 class="count plus" data-count="1200">1200</h1>
                                        <h5>Happy Customers</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4 col-md-4 wow fadeInLeft animated" data-wow-delay=".4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                    <div class="partner-card text-center">
                                        <h1 class="count plus" data-count="1500">1500</h1>
                                        <h5>Services Fulfilled</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4 col-md-4 wow fadeInLeft animated" data-wow-delay=".4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                    <div class="partner-card text-center">
                                        <h1 class="count plus" data-count="300">300</h1>
                                        <h5>Expert Technicians </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--================End Videos==================-->
                <!--================Service==================-->
                <section id="Service" class="py-5">
                    <div class="container-fluid">
                        <div class="col-md-11 mx-auto">
                            <div class="row">
                                <div class="col-lg-12 text-center mb-5">
                                    <h2 class="title wow fadeInUp" data-wow-duration="1500ms">What our customers have to
                                        say</h2>

                                </div>
                                <div class="services-slider d-none d-lg-block">
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="testi-card">

                                            <div class="user-info">
                                                <img src="assets/img/avatar.png"
                                                    class="img-fluid user mx-auto mb-2" alt=""
                                                    style="width:60px;border-radius: 50%;height: 60px;">

                                            </div>
                                            <div class="testi-content">
                                                <h4>Haripal Singh Sidhu</h4>
                                                <!-- <h6 class="">- Oneplus Nord </h6> -->
                                                <p>
                                                    The best place to get your device fixed at the most feasible
                                                    price. They fix the device professionally and provide a good
                                                    value for your money.


                                                </p>
                                                <div style="display: flex;text-align: center;margin-left: 27%;">
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                </div>
                                                <br>

                                                <img src="assets/img/google.png"
                                                    class="img-fluid user mx-auto mb-2">
                                                <p></p>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="testi-card">

                                            <div class="user-info">
                                                <img src="assets/img/avatar.png"
                                                    class="img-fluid user mx-auto mb-2" alt=""
                                                    style="width:60px;border-radius: 50%;height: 60px;">

                                            </div>
                                            <div class="testi-content">
                                                <h4>Haripal Singh Sidhu</h4>
                                                <!-- <h6 class="">- Oneplus Nord </h6> -->
                                                <p>
                                                    The best place to get your device fixed at the most feasible
                                                    price. They fix the device professionally and provide a good
                                                    value for your money.


                                                </p>
                                                <div style="display: flex;text-align: center;margin-left: 27%;">
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                </div>
                                                <br>

                                                <img src="assets/img/google.png"
                                                    class="img-fluid user mx-auto mb-2">
                                                <p></p>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="testi-card">

                                            <div class="user-info">
                                                <img src="assets/img/avatar.png"
                                                    class="img-fluid user mx-auto mb-2" alt=""
                                                    style="width:60px;border-radius: 50%;height: 60px;">

                                            </div>
                                            <div class="testi-content">
                                                <h4>Haripal Singh Sidhu</h4>
                                                <!-- <h6 class="">- Oneplus Nord </h6> -->
                                                <p>
                                                    The best place to get your device fixed at the most feasible
                                                    price. They fix the device professionally and provide a good
                                                    value for your money.


                                                </p>
                                                <div style="display: flex;text-align: center;margin-left: 27%;">
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                </div>
                                                <br>

                                                <img src="assets/img/google.png"
                                                    class="img-fluid user mx-auto mb-2">
                                                <p></p>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="testi-card">

                                            <div class="user-info">
                                                <img src="assets/img/avatar.png"
                                                    class="img-fluid user mx-auto mb-2" alt=""
                                                    style="width:60px;border-radius: 50%;height: 60px;">

                                            </div>
                                            <div class="testi-content">
                                                <h4>Haripal Singh Sidhu</h4>
                                                <!-- <h6 class="">- Oneplus Nord </h6> -->
                                                <p>
                                                    The best place to get your device fixed at the most feasible
                                                    price. They fix the device professionally and provide a good
                                                    value for your money.


                                                </p>
                                                <div style="display: flex;text-align: center;margin-left: 27%;">
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                    <span><img
                                                            src="assets/img/star.png"
                                                            class="img-fluid user mx-auto mb-2"></span>
                                                </div>
                                                <br>

                                                <img src="assets/img/google.png"
                                                    class="img-fluid user mx-auto mb-2">
                                                <p></p>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="services-slider d-block d-lg-none testi-d-lg">
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="testi-card">

                                <div class="user-info">
                                    <img src="assets/img/avatar.png"
                                        class="img-fluid user mx-auto mb-2" alt=""
                                        style="width:60px;border-radius: 50%;height: 60px;">

                                </div>
                                <div class="testi-content">
                                    <h4>Haripal Singh Sidhu</h4>
                                    <!-- <h6 class="">- Oneplus Nord </h6> -->
                                    <p>
                                        The best place to get your device fixed at the most feasible
                                        price. They fix the device professionally and provide a good
                                        value for your money.


                                    </p>
                                    <div style="display: d-inline; margin: auto; text-align: center; color:rgb(255, 199, 94)">
                                      <center><span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span></center>
                                    </div>
                                    <br>

                                    <img src="assets/img/google.png"
                                        class="img-fluid user mx-auto mb-2">
                                    <p></p>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="testi-card">

                                <div class="user-info">
                                    <img src="assets/img/avatar.png"
                                        class="img-fluid user mx-auto mb-2" alt=""
                                        style="width:60px;border-radius: 50%;height: 60px;">

                                </div>
                                <div class="testi-content">
                                    <h4>Haripal Singh Sidhu</h4>
                                    <!-- <h6 class="">- Oneplus Nord </h6> -->
                                    <p>
                                        The best place to get your device fixed at the most feasible
                                        price. They fix the device professionally and provide a good
                                        value for your money.


                                    </p>
                                    <div style="display: d-inline; margin: auto; text-align: center; color:rgb(255, 199, 94)">
                                        <center><span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span></center>
                                      </div>
                                    <br>

                                    <img src="assets/img/google.png"
                                        class="img-fluid user mx-auto mb-2">
                                    <p></p>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="testi-card">

                                <div class="user-info">
                                    <img src="assets/img/avatar.png"
                                        class="img-fluid user mx-auto mb-2" alt=""
                                        style="width:60px;border-radius: 50%;height: 60px;">

                                </div>
                                <div class="testi-content">
                                    <h4>Haripal Singh Sidhu</h4>
                                    <!-- <h6 class="">- Oneplus Nord </h6> -->
                                    <p>
                                        The best place to get your device fixed at the most feasible
                                        price. They fix the device professionally and provide a good
                                        value for your money.


                                    </p>
                                    <div style="display: d-inline; margin: auto; text-align: center; color:rgb(255, 199, 94)">
                                        <center><span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span></center>
                                      </div>
                                    <br>

                                    <img src="assets/img/google.png"
                                        class="img-fluid user mx-auto mb-2">
                                    <p></p>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="testi-card">

                                <div class="user-info">
                                    <img src="assets/img/avatar.png"
                                        class="img-fluid user mx-auto mb-2" alt=""
                                        style="width:60px;border-radius: 50%;height: 60px;">

                                </div>
                                <div class="testi-content">
                                    <h4>Haripal Singh Sidhu</h4>
                                    <!-- <h6 class="">- Oneplus Nord </h6> -->
                                    <p>
                                        The best place to get your device fixed at the most feasible
                                        price. They fix the device professionally and provide a good
                                        value for your money.


                                    </p>
                                    <div style="display: d-inline; margin: auto; text-align: center; color:rgb(255, 199, 94)">
                                        <center><span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                          <span><i class="fa fa-star" aria-hidden="true"></i></span></center>
                                      </div>
                                    <br>

                                    <img src="assets/img/google.png"
                                        class="img-fluid user mx-auto mb-2">
                                    <p></p>
                                </div>


                            </div>
                        </div>

                    </div>
                </section>
                <!--================End Service==================-->


                <!--================Footer==================-->


                <!--================End Footer==================-->


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Enter your contact details</h5>
                                <button type="button" class="close" ng-click="close_model()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div id="mobilesect">
                                    <div class="mb-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Enter Your name</label>
                                            <input type="text" class="form-control name" placeholder="Enter Name"
                                                ng-model="name">

                                        </div>
                                    </div>

                                    <div class="mb-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Enter Mobile</label>
                                            <input type="number" class="form-control mobile"
                                                placeholder="Enter your 10 digit mobile number" ng-model="mobile">

                                        </div>
                                    </div>


                                    <div class="mb-1">
                                        <p style="color:green">{{nsucess_n }}</p>
                                        <p style="color:red">{{nerror_n}}</p>
                                        <button ng-click="close_model()" class="btn-orange" id="submit_button">Submit </button>
                                    </div>

                                </div>




                            </div>


                            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="tiny-footer section-space-40" style="margin-top: 60px;">
                        <div class="container">
                            <div class="footer-head text-center text-white">
                                <p>WE FIXX IT WITH CARE</p>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-lg-8 col-md-8 py-4 px-4">
                                    <h4 class="mb0 call-to-action-title address d-inline">Address :</h4>
                                    <p class="call-action-desc address d-inline">

                                        &emsp; Door No 513/1, Opp, Koramangala Police Station 80 Feet Road, 8th Block,
                                        Koramangala, Bengaluru,Karnataka - 560095</p>
                                </div>
                                <div class="col-md-4 py-4 px-4">
                                    <h4 class="mb0 call-to-action-title address d-inline">Phone :&nbsp;</h4>
                                    <p class="call-action-desc address d-inline"><i
                                            class="fa fa-phone text-white">&nbsp;</i>9876543210</p>

                                </div>
                            </div>







                            <div class=" m-auto">
                                <div class="ft-social-widget p35"> <a href="#" title="Facebook" class="me-2"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="#" title="Twitter" class="me-2"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Linked In" class="me-2"><i class="fa fa-linkedin"></i></a>

                                    <a href="#" title="Instagram" class="me-2"><i class="fa fa-instagram"></i></a>
                                </div>
                                <div class="border-icon"></div>
                                <div class="ft-social-widget ">
                                    <p class="copyright-text">© Copyright 2022 All rights reserved by Fixxit India</p>
                                </div>

                                <div class="ft-social-logo">
                                    <img src="assets/img/fixxitindia-logo.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                </footer>


    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script src="assets/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/libs/nice-select/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.hsmenu.min3860.js?v=1"></script>
    <script src="assets/js/script3860.js?v=1"></script>


    <script src="assets/js/extjs/angular.min.js" type="text/javascript"></script>
    <script src="assets/js/extjs/angular-route.js"></script>
    <script src="assets/js/extjs/angular-cookies.js"></script>
    <script src="assets/js/extjs/angular-sanitize.js"></script>
    <script src="assets/js/extjs/vs-google-autocomplete.js"></script>
    <script data-require="angular-filter@0.5.2" data-semver="0.5.2" src="assets/js/extjs/angular-filter.js"></script>

    <script src="assets/script/app.js"></script>

    <script src="assets/script/globalUrl.js"></script>

    <script src="assets/script/servService.js"></script>


    <script>
        $(document).ready(function () {
alert(1);
            // $('select').niceSelect();
            $('#submit_button').click(function () {                     

            var device_name=$(".device_name :selected").text();
            var brand_name=$(".brand_name :selected").text();
            var model_name=$(".model_name :selected").text();
            var issue_name=$(".issue_name :selected").text();
            var name=$('.name').val();
            var mobile=$('.mobile').val();
                $.ajax({                    
                      url: "code.php",     
                      type: 'post', // performing a POST request
                      data : {'device_name':device_name,'brand_name':brand_name,'model_name':model_name,'issue_name':issue_name,'name':name,'mobile':mobile, },
                      // dataType: 'json',                   
                      success: function(data)         
                      {
                        
                      } 
                    });
            });
        });
    </script>
</body>

<!-- Mirrored from www.fixkart.in/landingpage/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Aug 2022 04:24:57 GMT -->

</html>