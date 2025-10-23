<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <!-- Site Title -->
    <title>Raj Rebadiya - Personal Portfolio</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="./assets/img/android-chrome-192x192.png" />
    <link rel="shortcut icon" type="image/png" href="./assets/img/android-chrome-192x192.png" />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-pro.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon_gerold.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/backToTop.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/light-mode.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <style>
        html {
            scroll-behavior: smooth;
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            height: 55px;
            width: 55px;
            border-radius: 50%;
            background: linear-gradient(135deg, #7f00ff, #3b02e0);
            box-shadow: 0 8px 25px rgba(123, 59, 255, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .back-to-top:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 30px rgba(123, 59, 255, 0.6);
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }


        .progress-wrap {
            position: fixed;
            bottom: 30px;
            right: 30px;
            height: 60px;
            width: 60px;
            cursor: pointer;
            display: none;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, #8750f7, #5322b4);
            z-index: 9999;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .progress-wrap:hover {
            transform: scale(1.1);
        }

        .progress-wrap svg {
            position: absolute;
            top: 0;
            left: 0;
            transform: rotate(-90deg);
        }

        .progress-wrap path {
            stroke: #fff;
            stroke-width: 5;
            fill: none;
            stroke-dasharray: 307;
            stroke-dashoffset: 307;
            transition: stroke-dashoffset 0.3s linear;
        }

        .progress-wrap i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 18px;
        }

        .progress-wrap.active {
            display: block;
            opacity: 1;
        }


        .tj-footer-area {
            position: relative;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #fff;
            padding: 80px 20px 40px;
            overflow: hidden;
        }

        .footer-wave {
            position: absolute;
            top: -40px;
            left: 0;
            width: 100%;
            height: 60px;
            background: url('https://www.svgrepo.com/show/310921/wave.svg') repeat-x;
            background-size: contain;
            transform: rotate(180deg);
            opacity: 0.3;
        }

        .footer-logo-box img {
            width: 160px;
            transition: transform 0.3s ease;
        }

        .footer-logo-box img:hover {
            transform: scale(1.1);
        }

        .footer-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: inline-flex;
            gap: 25px;
        }

        .footer-menu ul li a {
            color: #cfd8dc;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .footer-menu ul li a:hover {
            color: #fff;
            transform: translateY(-3px);
        }

        .footer-social a {
            color: #cfd8dc;
            margin: 0 12px;
            font-size: 18px;
            display: inline-block;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .footer-social a:hover {
            color: #00bcd4;
            transform: scale(1.2);
        }

        .copy-text p {
            font-size: 14px;
            color: #b0bec5;
        }

        .copy-text a {
            color: #00bcd4;
            text-decoration: none;
            font-weight: 600;
        }

        .copy-text a:hover {
            text-decoration: underline;
        }

        @media (max-width: 767px) {
            .footer-menu ul {
                flex-direction: column;
                gap: 10px;
            }

            .footer-social {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body class="light-mode">
    <!-- Preloader Area Start -->
    <div class="preloader">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="preloader-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- start: Back To Top -->
    {{-- <div class="progress-wrap" id="scrollUp">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
        <i class="fa-solid fa-arrow-up"></i>
    </div> --}}
    <!-- start: Back To Top -->
    <div class="back-to-top" id="scrollUp">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
    <!-- end: Back To Top -->

    <!-- end: Back To Top -->


    <!-- HEADER START -->
    <header class="tj-header-area header-absolute">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap align-items-center">
                    <div class="logo-box">
                        <a href="#intro">
                            <img src="assets/img/logo/raj.png" alt="" />
                        </a>
                    </div>
                    <div class="header-info-list d-none d-md-inline-block">
                        <ul class="ul-reset">
                            <li><a href="mailto:mail@rajrebadiya02@gmail.com">rajrebadiya02@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="header-menu" id="headerMenu">
                        <nav>
                            <ul>
                                <li><a href="#intro">Home</a></li>
                                <li><a href="#services-section">Services</a></li>
                                <li><a href="#works-section">Portfolio</a></li>
                                <li><a href="#resume-section">Resume</a></li>
                                <li><a href="#skills-section">Skills</a></li>
                                <li><a href="#contact-section">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu d-lg-none"></div>
                    <div class="header-button">
                        <a href="#contact-section" class="btn tj-btn-primary">Hire me!</a>
                    </div>
                    <div class="menu-bar d-lg-none">
                        <button>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="tj-header-area header-2 header-sticky sticky-out">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap align-items-center">
                    <div class="logo-box">
                        <a href="#intro">
                            <img src="assets/img/logo/raj.png" alt="" />
                        </a>
                    </div>
                    <div class="header-info-list d-none d-md-inline-block">
                        <ul class="ul-reset">
                            <li><a href="mailto:mail@rajrebadiya02@gmail.com">rajrebadiya02@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="header-menu">
                        <nav>
                            <ul>
                                <li><a href="#intro">Home</a></li>
                                <li><a href="#services-section">Services</a></li>
                                <li><a href="#works-section">Portfolio</a></li>
                                <li><a href="#resume-section">Resume</a></li>
                                <li><a href="#skills-section">Skills</a></li>
                                <li><a href="#contact-section">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu d-lg-none"></div>
                    <div class="header-button">
                        <a href="#contact-section" class="btn tj-btn-primary">Hire me!</a>
                    </div>
                    <div class="menu-bar d-lg-none">
                        <button>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->

    <main class="site-content" id="content">
        <!-- HERO SECTION START -->
        <section class="hero-section d-flex align-items-center" id="intro">
            <div class="intro_text">
                <svg viewBox="0 0 1320 300">
                    <text x="50%" Y="50%" text-anchor="middle">HI</text>
                </svg>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="hero-content-box">
                           <span class="hero-sub-title">Hi, I'm Raj Rebadiya</span>
                        <h1 class="hero-title">Full-Stack Laravel<br>Developer</h1>

                            <div class="hero-image-box d-md-none text-center">
                                <img src="assets/img/hero/me_4.png" style="height: 550px !important;"
                                    alt="" />
                            </div>

                            <p class="lead">
                                I am a Laravel developer with a passion for creating innovative and user-friendly web
                                applications.
                            </p>
                            <div class="button-box d-flex flex-wrap align-items-center">
                                <a href="{{ url('/assets/files/Raj_Resume.pdf') }}" class="btn tj-btn-secondary"
                                    download>
                                    Download CV <i class="flaticon-download"></i>
                                </a>

                                <ul class="ul-reset social-icons">

                                    <li>
                                        <a href="https://www.linkedin.com/in/raj-rebadiya-3514b7256"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/RajRebadiya"><i
                                                class="fa-brands fa-github"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <div class="hero-image-box text-center">
                            <img src="assets/img/hero/me_4.png" style="height: 550px !important;" alt="" />
                        </div>
                    </div>
                </div>
                <div class="funfact-area">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                                <div class="number"><span class="odometer" data-count="2">0</span></div>
                                <div class="text">Years of <br />Experience</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                                <div class="number"><span class="odometer" data-count="10">0</span>+</div>
                                <div class="text">Project <br />Completed</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                                <div class="number"><span class="odometer" data-count="7">0</span></div>
                                <div class="text">Happy <br />Clients</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                                <div class="number" style="font-size: 48px;"><span class="odometer"
                                        data-count="100">0</span>%</div>
                                <div class="text">Projects <br />Delivered On Time</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- HERO SECTION END -->

        <!-- SERVICES SECTION START -->
        <section class="services-section" id="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Quality Services</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                I can put your ideas and thus your wishes in the form of a unique web project that
                                inspires
                                you and
                                you customers.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="services-widget position-relative">
                            <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp"
                                data-wow-delay=".5s">
                                <div class="left-box d-flex flex-wrap align-items-center">
                                    <span class="number">01</span>
                                    <h3 class="service-title">Responsive Design</h3>
                                </div>
                                <div class="right-box">
                                    <p>
                                        Ensure your website looks great on any device, with layouts that adapt to
                                        different screen sizes seamlessly.
                                    </p>
                                </div>
                                <i class="flaticon-up-right-arrow"></i>
                                <button data-mfp-src="#service-wrapper" class="service-link"></button>
                            </div>
                            <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp"
                                data-wow-delay=".6s">
                                <div class="left-box d-flex flex-wrap align-items-center">
                                    <span class="number">02</span>
                                    <h3 class="service-title">CMS Development</h3>
                                </div>
                                <div class="right-box">
                                    <p>
                                        Set up user-friendly CMS solutions with custom-built options so
                                        clients can manage content easily.
                                    </p>
                                </div>
                                <i class="flaticon-up-right-arrow"></i>
                                <button data-mfp-src="#service-wrapper" class="service-link"></button>
                            </div>
                            <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp"
                                data-wow-delay=".7s">
                                <div class="left-box d-flex flex-wrap align-items-center">
                                    <span class="number">03</span>
                                    <h3 class="service-title">API Integrations</h3>
                                </div>
                                <div class="right-box">
                                    <p>
                                        Build and integrate APIs to connect websites with third-party applications,
                                        enhancing functionality and performance.
                                    </p>
                                </div>
                                <i class="flaticon-up-right-arrow"></i>
                                <button data-mfp-src="#service-wrapper" class="service-link"></button>
                            </div>
                            <div class="service-item d-flex flex-wrap align-items-center wow fadeInUp"
                                data-wow-delay=".8s">
                                <div class="left-box d-flex flex-wrap align-items-center">
                                    <span class="number">04</span>
                                    <h3 class="service-title">Website Redesign</h3>
                                </div>
                                <div class="right-box">
                                    <p>
                                        Refresh outdated websites with modern, appealing designs that align with current
                                        brand goals and user expectations.
                                    </p>
                                </div>
                                <i class="flaticon-up-right-arrow"></i>
                                <button data-mfp-src="#service-wrapper" class="service-link"></button>
                            </div>
                            <div class="active-bg wow fadeInUp" data-wow-delay=".5s"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SERVICES SECTION END -->

        <!-- start: Service Popup -->
        <div id="service-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
            <div class="popup_modal_img">
                <img src="./assets/img/services/modal-img.jpg" alt="" />
            </div>

            <div class="popup_modal_content">
                <div class="service_details">
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">
                            <div class="service_details_content">
                                <div class="service_info">
                                    <h6 class="subtitle">SERVICES</h6>
                                    <h2 class="title">UI/UX Design</h2>
                                    <div class="desc">
                                        <p>
                                            Elizabeth some dodgy chavs are you taking the piss faff about pardon amongst
                                            car boot a
                                            load of old tosh is
                                            cracking goal blow off telling brown.
                                        </p>

                                        <p>
                                            Brolly show off show off pick your nose and blow off well A bit of how's
                                            your father
                                            tomfoolery blimey, me old
                                            mucker starkers Queen's English dropped a clanger bite your arm spiffing
                                            good time
                                            burke Why chancer. Hotpot bum
                                            bag cracking goal young delinquent naff bugger cup of chars bender loo it's
                                            all gone to
                                            pot the nancy cheeky.
                                        </p>

                                        <p>
                                            At public school cras bog some dodgy chav Richard Why argy bargy vagabon
                                            William bender
                                            matie boy, off his nut
                                            chancer Jeffrey up the kyver say mufty you mug ummm telling pear shaped
                                            Oxford owt to
                                            do with me do one so said
                                            are you taking his.
                                        </p>
                                    </div>

                                    <h3 class="title">Services Process</h3>
                                    <div class="desc">
                                        <p>
                                            Elizabeth some dodgy chavs are you taking the piss faff about pardon amongst
                                            car boot a
                                            load of old tosh is
                                            cracking goal blow off telling brown.
                                        </p>
                                    </div>
                                    <ul>
                                        <li>Reinvent Your Business to Better</li>
                                        <li>Pioneering the Internet's First</li>
                                        <li>Pioneering the Design World's First</li>
                                        <li>Pioneering the Design World's First</li>
                                        <li>Pioneering the Design World's First</li>
                                        <li>Pioneering the Design World's First</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="tj_main_sidebar">
                                <div class="sidebar_widget services_list">
                                    <div class="widget_title">
                                        <h3 class="title">All Services</h3>
                                    </div>
                                    <ul>
                                        <li class="active">
                                            <button>
                                                <i class="flaticon-design"></i>
                                                Branding Design
                                            </button>
                                        </li>
                                        <li>
                                            <button>
                                                <i class="flaticon-3d-movie"></i>
                                                3D Animation
                                            </button>
                                        </li>
                                        <li>
                                            <button>
                                                <i class="flaticon-ux-design"></i>
                                                UI/UX Design
                                            </button>
                                        </li>
                                        <li>
                                            <button>
                                                <i class="flaticon-web-design"></i>
                                                Web Design
                                            </button>
                                        </li>
                                        <li>
                                            <button>
                                                <i class="flaticon-ui-design"></i>
                                                App Design
                                            </button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="sidebar_widget contact_form">
                                    <div class="widget_title">
                                        <h3 class="title">Get in Touch</h3>
                                    </div>

                                    <form>
                                        <div class="form_group">
                                            <input type="text" name="name" id="name" placeholder="Name"
                                                autocomplete="off" />
                                        </div>
                                        <div class="form_group">
                                            <input type="email" name="semail" id="semail" placeholder="Email"
                                                autocomplete="off" />
                                        </div>
                                        <div class="form_group">
                                            <textarea name="smessage" id="smessage" placeholder="Your message" autocomplete="off"></textarea>
                                        </div>
                                        <div class="form_btn">
                                            <button class="btn tj-btn-primary" type="submit">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Service Popup -->

        <!-- PORTFOLIO SECTION START -->
        <section class="portfolio-section" id="works-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Recent Works</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                A selection of my latest projects that highlight my skills in creating modern,
                                user-focused, and high-performing web solutions.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="portfolio-filter text-center wow fadeInUp" data-wow-delay=".5s">
                            <div class="button-group filter-button-group">
                                <button data-filter="*" class="active">All</button>
                                <button data-filter=".uxui">UX/UI</button>
                                <button data-filter=".branding">Branding</button>
                                <button data-filter=".mobile-app">Apps</button>
                                <div class="active-bg"></div>
                            </div>
                        </div>

                        <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                            <div class="portfolio-sizer"></div>
                            <div class="gutter-sizer"></div>
                            <div class="portfolio-item branding ">
                                <div class="image-box">
                                    <img src="{{ asset('assets/img/Veer_creation_photos/dashboard.png') }}"
                                        alt="" />
                                </div>
                                <div class="content-box">
                                    <h3 class="portfolio-title">Veer Creation</h3>
                                    <p>Project was about Inventory And Stock Managment.</p>
                                    <i class="flaticon-up-right-arrow"></i>
                                    <button data-mfp-src="#veer_creation" class="portfolio-link modal-popup"></button>
                                </div>
                            </div>
                            <div class="portfolio-item branding ">
                                <div class="image-box">
                                    <img src="{{ asset('assets/img/clockify/dashboard.png') }}" alt="" />
                                </div>
                                <div class="content-box">
                                    <h3 class="portfolio-title">Clockify</h3>
                                    <p>Clockify is Attendence Management System and time tracking software.</p>
                                    <i class="flaticon-up-right-arrow"></i>
                                    <button data-mfp-src="#clockify-wrapper"
                                        class="portfolio-link modal-popup"></button>
                                </div>
                            </div>
                            <div class="portfolio-item  uxui mobile-app">
                                <div class="image-box">
                                    <img src="{{ asset('assets/img/jivanand_photos/dashboard.png') }}"
                                        alt="" />
                                </div>
                                <div class="content-box">
                                    <h3 class="portfolio-title">Jivanand</h3>
                                    <p>Ayurveda is a health care startup.</p>
                                    <i class="flaticon-up-right-arrow"></i>
                                    <button data-mfp-src="#jivanand-wrapper"
                                        class="portfolio-link modal-popup"></button>
                                </div>
                            </div>
                            <div class="portfolio-item mobile-app ">
                                <div class="image-box">
                                    <img src="{{ asset('assets/img/sahaayam_photos/dashboard.png') }}"
                                        alt="" />
                                </div>
                                <div class="content-box">
                                    <h3 class="portfolio-title">Sahaayam</h3>
                                    <p>Sahaayam is a Cheritable Trust work with disabled people.</p>
                                    <i class="flaticon-up-right-arrow"></i>
                                    <button data-mfp-src="#sahaayam-wrapper"
                                        class="portfolio-link modal-popup"></button>
                                </div>
                            </div>
                            <div class="portfolio-item uxui">
                                <div class="image-box">
                                    <img src="{{ asset('assets/img/instagram/dashboard.png') }}" alt="" />
                                </div>
                                <div class="content-box">
                                    <h3 class="portfolio-title">Instant Reel</h3>
                                    <p>Instant Reel is a Instagram Reel Downloader.</p>
                                    <i class="flaticon-up-right-arrow"></i>

                                    <button data-mfp-src="#reeldown-wrapper"
                                        class="portfolio-link modal-popup"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- PORTFOLIO SECTION END -->

        <!-- start: Portfolio Popup -->
        <div id="portfolio-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
            <div class="popup_modal_img">
                <img src="./assets/img/portfolio/modal-img.jpg" alt="" />
            </div>

            <div class="popup_modal_content">
                <div class="portfolio_info">
                    <div class="portfolio_info_text">
                        <h2 class="title">DStudio</h2>
                        <div class="desc">
                            <p>
                                They are was greater open above shelter lets itself under appear sixth open gathering
                                made upon
                                can't own above midst
                                gathering gathered he one us saying can't divide.
                            </p>
                        </div>
                        <a href="#works-section" class="btn tj-btn-primary">live preview <i
                                class="fal fa-arrow-right"></i></a>
                    </div>
                    <div class="portfolio_info_items">
                        <div class="info_item">
                            <div class="key">Category</div>
                            <div class="value">Web Design</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Client</div>
                            <div class="value">Artboard Studio</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Start Date</div>
                            <div class="value">August 20, 2023</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Designer</div>
                            <div class="value"><a href="#intro">ThemeJunction</a></div>
                        </div>
                    </div>
                </div>

                <div class="portfolio_gallery owl-carousel">
                    <div class="gallery_item">
                        <img src="./assets/img/portfolio-gallery/p-gallery-1.jpg" alt="" />
                    </div>
                    <div class="gallery_item">
                        <img src="./assets/img/portfolio-gallery/p-gallery-2.jpg" alt="" />
                    </div>
                    <div class="gallery_item">
                        <img src="./assets/img/portfolio-gallery/p-gallery-3.jpg" alt="" />
                    </div>
                    <div class="gallery_item">
                        <img src="./assets/img/portfolio-gallery/p-gallery-4.jpg" alt="" />
                    </div>
                </div>

                <div class="portfolio_description">
                    <h2 class="title">Project Description</h2>
                    <div class="desc">
                        <p>
                            The goal is there are many variations of passages of Lorem Ipsum available, but the majority
                            have
                            suffered alteration in some
                            form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>

                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered
                            alteration in some form, by
                            injected humour, or randomised words which don't look even slightly believable. If you are
                            going to
                            use a passage of Lorem
                            Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                        </p>
                    </div>
                </div>

                <div class="portfolio_story_approach">
                    <div class="portfolio_story">
                        <div class="story_title">
                            <h4 class="title">The story</h4>
                        </div>
                        <div class="story_content">
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form, by
                                injected humour, or randomised words which don't look even slightly believable. If you
                                are going
                                to use a passage of Lorem
                                Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                text. There
                                are many variations of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in some
                                form, by
                                injected humour, or
                                randomised words which don't look even slightly believable. If you are going to use a
                                passage of
                                Lorem Ipsum, you need to
                                be sure there isn't anything embarrassing hidden in the middle of text.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="portfolio_navigation">
                    <div class="navigation_item prev-project">
                        <a href="#works-section" class="project">
                            <i class="fal fa-arrow-left"></i>
                            <div class="nav_project">
                                <div class="label">Previous Project</div>
                                <h3 class="title">Sebastian</h3>
                            </div>
                        </a>
                    </div>

                    <div class="navigation_item next-project">
                        <a href="#works-section" class="project">
                            <div class="nav_project">
                                <div class="label">Next Project</div>
                                <h3 class="title">Qwillo</h3>
                            </div>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Portfolio Popup -->
        <!-- start: Veer Creation Popup -->
        <div id="veer_creation" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
            <div class="popup_modal_img">
                <img src="{{ asset('assets/img/Veer_creation_photos/dashboard.png') }}"
                    alt="Veer Creation Dashboard" />
            </div>

            <div class="popup_modal_content">
                <div class="portfolio_info">
                    <div class="portfolio_info_text">
                        <h2 class="title">Veer Creation – Inventory & Stock Management System</h2>
                        <div class="desc">
                            <p>
                                Veer Creation is a powerful web-based Inventory and Stock Management System designed to
                                simplify
                                business operations by automating product tracking, dispatching, and accounting
                                processes.
                                The system helps the organization manage products, categories, stock levels, and
                                customer orders — all from a centralized, user-friendly dashboard.
                            </p>
                        </div>
                        <a href="https://veercreation.shop/admin" target="_blank" class="btn tj-btn-primary">
                            Live Preview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="portfolio_info_items">
                        <div class="info_item">
                            <div class="key">Category</div>
                            <div class="value">Web Application</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Client</div>
                            <div class="value">Veer Creation</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Start Date</div>
                            <div class="value">November 1st, 2024</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Developer</div>
                            <div class="value"><a href="#intro">Raj Rebadiya</a></div>
                        </div>
                    </div>
                </div>

                <div class="portfolio_gallery owl-carousel">
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/Veer_creation_photos/product.png') }}"
                            alt="Dashboard Overview" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/Veer_creation_photos/account.png') }}"
                            alt="Order Management" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/Veer_creation_photos/dispatch.png') }}"
                            alt="Stock Management" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/Veer_creation_photos/task.png') }}"
                            alt="Reports & Insights" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/Veer_creation_photos/role.png') }}"
                            alt="Reports & Insights" />
                    </div>
                </div>

                <div class="portfolio_description">
                    <h2 class="title">Project Description</h2>
                    <div class="desc">
                        <p>
                            The Veer Creation Inventory & Stock Management System was built to digitize the company’s
                            manual
                            stock and dispatch processes. It allows the team to manage categories, products, and
                            customer
                            orders, track dispatches, monitor stock levels in real time, and handle account
                            authorization from
                            a single Laravel-based dashboard.
                        </p>
                        <p>
                            The system includes multi-user role access (Admin, Manager, Staff), order tracking,
                            auto-generated
                            reports, and an integrated accounting module for expense and sales management. It’s designed
                            for
                            efficiency, accuracy, and complete visibility over business operations.
                        </p>
                    </div>
                </div>

                <div class="portfolio_story_approach">
                    <div class="portfolio_story">
                        <div class="story_title">
                            <h4 class="title">The Story & Impact</h4>
                        </div>
                        <div class="story_content">
                            <p>
                                Before implementation, Veer Creation faced challenges managing increasing orders and
                                manual
                                stock tracking. The new system streamlined every workflow — from product listing to
                                dispatch
                                tracking — reducing human errors and saving hours of manual labor each day.
                            </p>

                            <ul>
                                <li>✅ 35% increase in on-time order dispatches.</li>
                                <li>✅ 50% reduction in workload through process automation.</li>
                                <li>✅ Real-time stock and sales insights for better decision-making.</li>
                                <li>✅ Detailed reports helping the business identify growth trends.</li>
                                <li>✅ Role-based access improved data security and accountability.</li>
                            </ul>

                            <p>
                                Today, Veer Creation operates with greater efficiency, improved team collaboration, and
                                enhanced transparency — resulting in significant business growth and customer
                                satisfaction.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="portfolio_navigation">
                    <div class="navigation_item prev-project">
                        <div class="nav_project">
                            <i class="fa-brands fa-laravel text-white"></i>
                            <h3 class="title text-white">Laravel</h3>
                        </div>
                    </div>

                    <div class="navigation_item next-project">
                        <div class="nav_project">
                            <i class="fa-brands fa-js text-white"></i>
                            <h3 class="title text-white">JavaScript</h3>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- end: Veer Creation Popup -->
        <!-- start: Clockify Popup -->
        <div id="clockify-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
            <div class="popup_modal_img">
                <img src="{{ asset('assets/img/clockify/dashboard.png') }}" alt="Clockify Dashboard" />
            </div>

            <div class="popup_modal_content">
                <div class="portfolio_info">
                    <div class="portfolio_info_text">
                        <h2 class="title">Clockify – Smart Attendance & Payroll Management System</h2>
                        <div class="desc">
                            <p>
                                Clockify is a robust Attendance and Payroll Management System developed to streamline
                                workforce operations.
                                It automates attendance tracking, leave approvals, holiday scheduling, and salary
                                processing — reducing
                                HR workload and improving team productivity.
                                With real-time tracking and detailed analytics, organizations can monitor employee
                                engagement and ensure
                                accurate payroll every month.
                            </p>
                        </div>
                        <a href="https://clockify.veercreation.co.in" target="_blank" class="btn tj-btn-primary">
                            Live Preview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="portfolio_info_items">
                        <div class="info_item">
                            <div class="key">Category</div>
                            <div class="value">Web Application</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Client</div>
                            <div class="value">Clockify</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Start Date</div>
                            <div class="value">June 10th, 2025</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Developer</div>
                            <div class="value"><a href="#intro">Raj Rebadiya</a></div>
                        </div>
                    </div>
                </div>

                <div class="portfolio_gallery owl-carousel">
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/clockify/attendance.png') }}" alt="Attendance Tracking" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/clockify/dashboard.png') }}" alt="Leave Management" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/clockify/holiday.png') }}" alt="Payroll Reports" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/clockify/employee.png') }}" alt="Holiday Scheduling" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/clockify/daily.png') }}" alt="Attendance Insights" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/clockify/month.png') }}" alt="Attendance Insights" />
                    </div>
                </div>

                <div class="portfolio_description">
                    <h2 class="title">Project Description</h2>
                    <div class="desc">
                        <p>
                            Clockify was designed to solve common workforce management challenges faced by growing
                            businesses.
                            It simplifies attendance tracking, automates salary calculation based on actual working
                            hours,
                            and ensures transparent reporting.
                        </p>
                        <p>
                            The platform includes role-based access control, leave & advance tracking, automated payroll
                            generation,
                            and detailed reporting with export options.
                            It also supports integration with biometric systems and real-time attendance monitoring
                            through dynamic dashboards.
                        </p>
                    </div>
                </div>

                <div class="portfolio_story_approach">
                    <div class="portfolio_story">
                        <div class="story_title">
                            <h4 class="title">The Story & Impact</h4>
                        </div>
                        <div class="story_content">
                            <p>
                                Before Clockify, managing attendance and salary manually consumed several hours of HR
                                time each week.
                                With the new system in place, the company now enjoys automation at every step — from
                                attendance entry
                                to salary generation — with improved accuracy and engagement.
                            </p>

                            <ul>
                                <li>✅ 60% reduction in HR administrative workload.</li>
                                <li>✅ Accurate, automatic payroll calculation based on real working hours.</li>
                                <li>✅ Centralized dashboard for attendance, leave, and advance management.</li>
                                <li>✅ Real-time employee insights improving engagement and accountability.</li>
                                <li>✅ Detailed monthly salary reports with export and sharing options.</li>
                            </ul>

                            <p>
                                Clockify has transformed the attendance management process into a smooth, automated
                                workflow.
                                It enhances transparency, accuracy, and trust between management and employees —
                                making it an essential system for any modern organization.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="portfolio_navigation">
                    <div class="navigation_item prev-project">
                        <div class="nav_project">
                            <i class="fa-brands fa-laravel text-white"></i>
                            <h3 class="title text-white">Laravel</h3>
                        </div>
                    </div>

                    <div class="navigation_item next-project">
                        <div class="nav_project">
                            <i class="fa-brands fa-php text-white"></i>
                            <h3 class="title text-white">MYSQL</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end: Clockify Popup -->
        <!-- start: Jivanand Popup -->
        <div id="jivanand-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
            <div class="popup_modal_img">
                <img src="{{ asset('assets/img/jivanand_photos/dashboard.png') }}" alt="Jivanand Dashboard" />
            </div>

            <div class="popup_modal_content">
                <div class="portfolio_info">
                    <div class="portfolio_info_text">
                        <h2 class="title">Jivanand – Ayurvedic Wellness & Panchakarma Management System</h2>
                        <div class="desc">
                            <p>
                                Jivanand is a complete Ayurvedic Wellness and Panchakarma Management System designed to
                                bring the
                                ancient science of Ayurveda into the digital age. The platform helps wellness centers
                                and ayurvedic
                                practitioners manage therapies, Panchakarma treatments, consultations, and herbal
                                medicine records
                                — all from one intuitive dashboard.
                            </p>
                            <p>
                                With digital patient tracking, therapy scheduling, and detailed treatment histories,
                                Jivanand ensures
                                that every Ayurvedic healing session is documented, personalized, and effective for
                                holistic well-being.
                            </p>
                        </div>
                        <a href="https://jivanand.in" target="_blank" class="btn tj-btn-primary">
                            Live Preview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="portfolio_info_items">
                        <div class="info_item">
                            <div class="key">Category</div>
                            <div class="value">Healthcare Web Application</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Client</div>
                            <div class="value">Jivanand Ayurvedic Wellness</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Start Date</div>
                            <div class="value">August 15th, 2025</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Developer</div>
                            <div class="value"><a href="#intro">Raj Rebadiya</a></div>
                        </div>
                    </div>
                </div>

                <div class="portfolio_gallery owl-carousel">
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/jivanand_photos/dashboard.png') }}" alt="Patient Records" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/jivanand_photos/contact.png') }}" alt="Therapy Scheduling" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/jivanand_photos/info.png') }}" alt="Panchakarma Management" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/jivanand_photos/service.png') }}"
                            alt="Herbal Medicine Inventory" />
                    </div>

                </div>

                <div class="portfolio_description">
                    <h2 class="title">Project Description</h2>
                    <div class="desc">
                        <p>
                            The Jivanand System is designed for Ayurvedic hospitals and wellness centers to manage
                            complete patient care
                            digitally — from appointment booking to Panchakarma therapy tracking. It enables doctors to
                            maintain
                            personalized patient records, assign treatments, and generate progress reports.
                        </p>
                        <p>
                            The application also includes herbal inventory management, therapist scheduling, and a
                            dynamic dashboard
                            showing real-time therapy insights. Jivanand integrates the core Ayurvedic principles of
                            <strong>Dinacharya</strong>,
                            <strong>Panchakarma</strong>, and <strong>Tridosha Balancing</strong> into a smooth and
                            modern workflow.
                        </p>
                    </div>
                </div>

                <div class="portfolio_story_approach">
                    <div class="portfolio_story">
                        <div class="story_title">
                            <h4 class="title">The Story & Impact</h4>
                        </div>
                        <div class="story_content">
                            <p>
                                Ayurveda is all about balance, discipline, and tracking of body-mind health. Before
                                Jivanand,
                                most Ayurvedic centers used manual registers and paper records. This created confusion
                                and made it
                                difficult to track patient progress or manage herbs and oils efficiently.
                            </p>

                            <ul>
                                <li>✅ 70% faster patient registration and therapy scheduling.</li>
                                <li>✅ Complete digital record of Panchakarma and herbal treatments.</li>
                                <li>✅ Real-time stock management of Ayurvedic medicines and oils.</li>
                                <li>✅ Role-based access for Doctors, Therapists, and Admin staff.</li>
                                <li>✅ Enhanced patient experience through better follow-up and personalized care.</li>
                            </ul>

                            <p>
                                Jivanand bridges ancient Ayurvedic wisdom with modern technology — enabling traditional
                                healers
                                to offer holistic care with efficiency, transparency, and trust. It supports the vision
                                of
                                promoting Ayurvedic wellness in a digital, data-driven world.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="portfolio_navigation">
                    <div class="navigation_item prev-project">
                        <div class="nav_project">
                            <i class="fa-solid fa-leaf text-white"></i>
                            <h3 class="title text-white">Ayurveda</h3>
                        </div>
                    </div>

                    <div class="navigation_item next-project">
                        <div class="nav_project">
                            <i class="fa-brands fa-laravel text-white"></i>
                            <h3 class="title text-white">Laravel</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end: Jivanand Popup -->

        <!-- start: Sahaayam Popup -->
        <div id="sahaayam-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
            <div class="popup_modal_img">
                <img src="{{ asset('assets/img/sahaayam_photos/dashboard.png') }}" alt="Sahaayam Dashboard" />
            </div>

            <div class="popup_modal_content">
                <div class="portfolio_info">
                    <div class="portfolio_info_text">
                        <h2 class="title">Sahaayam – Charitable Trust & Sustainable Work Platform</h2>
                        <div class="desc">
                            <p>
                                Sahaayam is a charitable trust run by differently-abled individuals who earn through
                                meaningful work
                                instead of taking donations. The platform helps showcase their eco-friendly products
                                such as paper bags
                                and stationery while promoting sustainable practices without using plastic.
                            </p>
                            <p>
                                The system allows users to learn about Sahaayam, contact the team, and place orders for
                                paper-based
                                products online — increasing visibility and helping the trust reach more customers
                                efficiently.
                            </p>
                        </div>
                        <a href="https://sahaayam.jivanand.in" target="_blank" class="btn tj-btn-primary">
                            Live Preview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="portfolio_info_items">
                        <div class="info_item">
                            <div class="key">Category</div>
                            <div class="value">Charitable Trust Web Application</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Client</div>
                            <div class="value">Sahaayam Trust</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Start Date</div>
                            <div class="value">July 5th, 2025</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Developer</div>
                            <div class="value"><a href="#intro">Raj Rebadiya</a></div>
                        </div>
                    </div>
                </div>

                <div class="portfolio_gallery owl-carousel">
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/sahaayam_photos/dashboard.png') }}" alt="Homepage Overview" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/sahaayam_photos/info.png') }}" alt="Product Listing" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/sahaayam_photos/about.png') }}" alt="Order Management" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/sahaayam_photos/service.png') }}"
                            alt="Contact & Engagement" />
                    </div>
                </div>

                <div class="portfolio_description">
                    <h2 class="title">Project Description</h2>
                    <div class="desc">
                        <p>
                            The Sahaayam website was designed to digitally represent the charitable trust and its
                            eco-friendly
                            initiatives. It allows visitors to learn about the trust, explore their handmade paper
                            products,
                            and place orders online — helping the disabled team earn and sustain their livelihood.
                        </p>
                        <p>
                            The system emphasizes sustainability and transparency. No donations are collected; instead,
                            the
                            trust generates revenue through productive work. The platform showcases the trust’s mission
                            and
                            promotes environmentally friendly practices by completely avoiding plastic.
                        </p>
                    </div>
                </div>

                <div class="portfolio_story_approach">
                    <div class="portfolio_story">
                        <div class="story_title">
                            <h4 class="title">The Story & Impact</h4>
                        </div>
                        <div class="story_content">
                            <p>
                                Before the website, Sahaayam relied mainly on word-of-mouth for orders and outreach.
                                Now, the digital
                                presence has expanded their reach, allowed customers to place orders online, and
                                enhanced visibility
                                for their sustainable products.
                            </p>

                            <ul>
                                <li>✅ Enabled disabled individuals to earn a livelihood through productive work.</li>
                                <li>✅ Digital platform increases order reach beyond local customers.</li>
                                <li>✅ Showcases eco-friendly, plastic-free products like paper bags and stationery.</li>
                                <li>✅ Simplified order management and customer engagement.</li>
                                <li>✅ Promotes sustainability and social responsibility online.</li>
                            </ul>

                            <p>
                                The Sahaayam website bridges tradition and modern technology — empowering
                                differently-abled people
                                while promoting environmentally conscious products, community engagement, and
                                sustainable practices.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="portfolio_navigation">
                    <div class="navigation_item prev-project">
                        <div class="nav_project">
                            <i class="fa-solid fa-hand-holding-heart text-white"></i>
                            <h3 class="title text-white">Charity</h3>
                        </div>
                    </div>

                    <div class="navigation_item next-project">
                        <div class="nav_project">
                            <i class="fa-brands fa-laravel text-white"></i>
                            <h3 class="title text-white">Laravel</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end: Sahaayam Popup -->
        <!-- start: Instagram Reel Downloader Popup -->
        <div id="reeldown-wrapper" class="popup_content_area zoom-anim-dialog mfp-hide" data-lenis-prevent>
            <div class="popup_modal_img">
                <img src="{{ asset('assets/img/instagram/dashboard.png') }}"
                    alt="Instagram Reel Downloader Dashboard" />
            </div>

            <div class="popup_modal_content">
                <div class="portfolio_info">
                    <div class="portfolio_info_text">
                        <h2 class="title">Instagram Reel Downloader – HD Audio/Video Quality</h2>
                        <div class="desc">
                            <p>
                                This Instagram Reel Downloader is a web-based tool that allows users to download
                                Instagram Reels
                                in high-definition video and audio quality. It is designed for simplicity, speed, and
                                seamless
                                user experience across devices.
                            </p>
                            <p>
                                Users can paste the Instagram Reel link and instantly download the content in HD format,
                                ensuring
                                they retain full audio-video quality for personal or professional use.
                            </p>
                        </div>
                        <a href="https://instagram-reel-downloader-3a4c.onrender.com" target="_blank"
                            class="btn tj-btn-primary">
                            Live Preview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="portfolio_info_items">
                        <div class="info_item">
                            <div class="key">Category</div>
                            <div class="value">Web Application / Utility Tool</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Client</div>
                            <div class="value">Self Project</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Start Date</div>
                            <div class="value">October 17th, 2025</div>
                        </div>
                        <div class="info_item">
                            <div class="key">Developer</div>
                            <div class="value"><a href="#intro">Raj Rebadiya</a></div>
                        </div>
                    </div>
                </div>

                <div class="portfolio_gallery owl-carousel">
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/instagram/dashboard.png') }}" alt="Homepage Overview" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/instagram/info.png') }}" alt="Download Page" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/instagram/service.png') }}" alt="Settings & Options" />
                    </div>
                    <div class="gallery_item">
                        <img src="{{ asset('assets/img/instagram/faq.png') }}" alt="Downloaded Reel Preview" />
                    </div>
                </div>

                <div class="portfolio_description">
                    <h2 class="title">Project Description</h2>
                    <div class="desc">
                        <p>
                            The Instagram Reel Downloader tool was developed to provide users with an easy and fast way
                            to save
                            Instagram Reels in high-definition video and audio. It supports multiple formats and
                            resolutions,
                            allowing users to select their preferred download quality.
                        </p>
                        <p>
                            The system includes intuitive UX for pasting reel URLs, instant download links, and ensures
                            full
                            HD quality without losing audio clarity. It is fully responsive and works seamlessly on
                            desktop,
                            tablet, and mobile devices.
                        </p>
                    </div>
                </div>

                <div class="portfolio_story_approach">
                    <div class="portfolio_story">
                        <div class="story_title">
                            <h4 class="title">The Story & Impact</h4>
                        </div>
                        <div class="story_content">
                            <p>
                                With the growing popularity of Instagram Reels, users wanted a simple solution to save
                                content
                                offline. This tool made the process easy, fast, and high-quality — saving time and
                                ensuring
                                no loss of media integrity.
                            </p>

                            <ul>
                                <li>✅ Download Instagram Reels in HD video and audio quality instantly.</li>
                                <li>✅ Supports multiple formats and device compatibility.</li>
                                <li>✅ Simple user interface for fast and intuitive usage.</li>
                                <li>✅ Helps creators save reference content for inspiration and offline use.</li>
                                <li>✅ Fully responsive design for desktop, tablet, and mobile users.</li>
                            </ul>

                            <p>
                                The Instagram Reel Downloader demonstrates a practical web solution, combining speed, HD
                                media
                                support, and user-friendly design — a perfect addition to your portfolio showcasing
                                modern
                                utility tools.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="portfolio_navigation">
                    <div class="navigation_item prev-project">
                        <div class="nav_project">
                            <i class="fa-brands fa-instagram text-white"></i>
                            <h3 class="title text-white">Instagram</h3>
                        </div>
                    </div>

                    <div class="navigation_item next-project">
                        <div class="nav_project">
                            <i class="fa-brands fa-laravel text-white"></i>
                            <h3 class="title text-white">Laravel</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end: Instagram Reel Downloader Popup -->




        <!-- RESUME SECTION START -->
        <section class="resume-section" id="resume-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="section-title"><i class="flaticon-recommendation"></i> My Experience</h2>
                        </div>

                        <div class="resume-widget">
                            <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                                <div class="time">2024 November - Present</div>
                                <h3 class="resume-title">Veer Creation</h3>
                                <div class="institute">Junior Laravel Developer</div>
                            </div>
                            <div class="resume-item wow fadeInLeft" data-wow-delay=".5s">
                                <div class="time">2024 March - 2024 Octomber</div>
                                <h3 class="resume-title">Brain Art IT Solution</h3>
                                <div class="institute">Laravel Intern</div>
                            </div>
                            {{-- <div class="resume-item wow fadeInLeft" data-wow-delay=".6s">
                                <div class="time">2020 - 2021</div>
                                <h3 class="resume-title">Web design course</h3>
                                <div class="institute">House of Life, Leeds</div>
                            </div>
                            <div class="resume-item wow fadeInLeft" data-wow-delay=".7s">
                                <div class="time">2018 - 2020</div>
                                <h3 class="resume-title">Parsons, The New School</h3>
                                <div class="institute">Theme Junction, Bursa</div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header wow fadeInUp" data-wow-delay=".4s">
                            <h2 class="section-title"><i class="flaticon-graduation-cap"></i> My Education</h2>
                        </div>
                        <div class="resume-widget">
                            <div class="resume-item wow fadeInRight" data-wow-delay=".5s">
                                <div class="time">2021 - 2024</div>
                                <h3 class="resume-title">Bachelor of Computer Application</h3>
                                <div class="institute">Atmanand Saraswati Science College</div>
                            </div>
                            <div class="resume-item wow fadeInRight" data-wow-delay=".6s">
                                <div class="time">2020 - 2021</div>
                                <h3 class="resume-title">Higher Secondary School</h3>
                                <div class="institute">Sadhana Vidhya Bhavan</div>
                            </div>
                            <div class="resume-item wow fadeInRight" data-wow-delay=".7s">
                                <div class="time">2018 - 2019</div>
                                <h3 class="resume-title">Secondary School </h3>
                                <div class="institute">Saraswati Vidhyalay</div>
                            </div>
                            {{-- <div class="resume-item wow fadeInRight" data-wow-delay=".8s">
                                <div class="time">2010 - 2011</div>
                                <h3 class="resume-title">Parsons, The New School</h3>
                                <div class="institute">Parsons, The New School</div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- RESUME SECTION END -->

        <!-- SKILLS SECTION START -->
        <section class="skills-section" id="skills-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Skills</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                I craft modern, responsive, and performance-driven websites that bring ideas to life
                                and help brands stand out online.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="skills-widget d-flex flex-wrap justify-content-center align-items-center">
                            <div class="skill-item wow fadeInUp" data-wow-delay=".3s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="assets/img/icons/skills-1.svg" alt="" />
                                    </div>
                                    <div class="number">95%</div>
                                </div>
                                <p>HTML</p>
                            </div>
                            <div class="skill-item wow fadeInUp" data-wow-delay=".4s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="assets/img/icons/skills-2.svg" alt="" />
                                    </div>
                                    <div class="number">80%</div>
                                </div>
                                <p>CSS3</p>
                            </div>
                            <div class="skill-item wow fadeInUp" data-wow-delay=".5s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="assets/img/icons/skills-3.svg" alt="" />
                                    </div>
                                    <div class="number">80%</div>
                                </div>
                                <p>Javascript</p>
                            </div>
                            <div class="skill-item wow fadeInUp" data-wow-delay=".6s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="assets/img/icons/Laravel.svg" alt="" />
                                    </div>
                                    <div class="number">95%</div>
                                </div>
                                <p>Laravel</p>
                            </div>
                            <div class="skill-item wow fadeInUp" data-wow-delay=".7s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="assets/img/icons/MySQL.svg" alt="" />
                                    </div>
                                    <div class="number">85%</div>
                                </div>
                                <p>MySQL</p>
                            </div>
                            <div class="skill-item wow fadeInUp" data-wow-delay=".8s">
                                <div class="skill-inner">
                                    <div class="icon-box">
                                        <img src="assets/img/icons/jQuery.svg" alt="" />
                                    </div>
                                    <div class="number">90%</div>
                                </div>
                                <p>jquery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SKILLS SECTION END -->

        <!-- CONTACT SECTION START -->
        <section class="contact-section" id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 order-2 order-md-1">
                        <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                            <div class="section-header">
                                <h2 class="section-title">Let's work together!</h2>
                                <p>I design and code beautifully simple things and i love what i do. Just simple like
                                    that!</p>
                            </div>

                            <div class="tj-contact-form">
                                <form id="contac-form" action="{{ route('contact.send') }}" method="POST">
                                    @csrf
                                    <div class="row gx-3">
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="text" name="conName" id="conName"
                                                    placeholder="First name" value="{{ old('conName') }}">
                                                @error('conName')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="text" name="conLName" id="conLName"
                                                    placeholder="Last name" value="{{ old('conLName') }}">
                                                @error('conLName')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="email" name="conEmail" id="conEmail"
                                                    placeholder="Email address" value="{{ old('conEmail') }}">
                                                @error('conEmail')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form_group">
                                                <input type="tel" name="conPhone" id="conPhone"
                                                    placeholder="Phone number" value="{{ old('conPhone') }}">
                                                @error('conPhone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form_group">
                                                <select name="conService" id="conService" class="tj-nice-select">
                                                    <option value="" disabled selected>Choose Service</option>
                                                    <option value="website_work">WebSite Development</option>
                                                    <option value="api_work">API Integration & Development</option>
                                                    <option value="saas_product">Saas Product</option>
                                                    <option value="crm_software">CRM Software</option>
                                                </select>
                                                @error('conService')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form_group">
                                                <textarea name="conMessage" id="conMessage" placeholder="Message">{{ old('conMessage') }}</textarea>
                                                @error('conMessage')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form_btn">
                                                <button type="submit" class="btn tj-btn-primary">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                @if (session('success'))
                                    <div class="alert alert-success mt-3">{{ session('success') }}</div>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1 col-md-5 d-flex flex-wrap align-items-center order-1 order-md-2">
                        <div class="contact-info-list">
                            <ul class="ul-reset">
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                    data-wow-delay=".4s">
                                    <div class="icon-box">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="text-box">
                                        <p>Phone</p>
                                        <a href="tel:0123456789">+91 63532 72524</a>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                    data-wow-delay=".5s">
                                    <div class="icon-box">
                                        <i class="flaticon-mail-inbox-app"></i>
                                    </div>
                                    <div class="text-box">
                                        <p>Email</p>
                                        <a href="mailto:mail@mail.com">rajrebadiya02@mail.com</a>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                                    data-wow-delay=".6s">
                                    <div class="icon-box">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <div class="text-box">
                                        <p>Address</p>
                                        <a href="#contact-section">Surat , Gujarat , India</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTACT SECTION END -->

        <!-- BEGIN: Contact Form Success Modal Message -->
        <div class="modal contact_modal" id="message_sent" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title"><strong>Message Sent Successfully</strong></span>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <p>Thank you for contacting us. We will get back to you shortly.<br />Have a great day!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Contact Form Success Modal Message -->

        <!-- BEGIN: Contact Form Fail Modal Message -->
        <div class="modal contact_modal failed" id="message_fail" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title"><strong>Error</strong></span>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <p>Oops! Something went wrong, please try again.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Contact Form Fail Modal Message End -->
    </main>

    <!-- FOOTER AREA START -->
    <footer class="tj-footer-area">
        <div class="footer-wave"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="footer-logo-box mb-4">
                        <a href="#intro"><img src="assets/img/logo/raj.png" alt="Logo" /></a>
                    </div>

                    <div class="footer-menu mb-4">
                        <nav>
                            <ul>
                                <li><a href="#intro">Home</a></li>
                                <li><a href="#services-section">Services</a></li>
                                <li><a href="#works-section">Portfolio</a></li>
                                <li><a href="#contact-section">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="copy-text">
                        <p>
                            &copy; {{ date('Y') }} All rights reserved by
                            <a href="#intro" target="_blank">Raj Rebadiya</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

    <script>
        const scrollUp = document.getElementById("scrollUp");
        const path = scrollUp.querySelector("path");
        const pathLength = path.getTotalLength();

        window.addEventListener("scroll", () => {
            const scroll = window.scrollY;
            const height = document.documentElement.scrollHeight - window.innerHeight;
            const progress = pathLength - (scroll * pathLength) / height;
            path.style.strokeDashoffset = progress;

            if (scroll > 300) {
                scrollUp.classList.add("active");
            } else {
                scrollUp.classList.remove("active");
            }
        });

        scrollUp.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
    <script>
        const scrollBtn = document.getElementById("scrollUp");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                scrollBtn.classList.add("show");
            } else {
                scrollBtn.classList.remove("show");
            }
        });

        scrollBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>




    <!-- JS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/gsap-scroll-to-plugin.min.js"></script>
    <script src="assets/js/gsap-scroll-trigger.min.js"></script>
    <script src="assets/js/gsap-split-text.min.js"></script>
    <script src="assets/js/lenis.min.js"></script>

    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/backToTop.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/validate.min.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
