<style>
    :root {
        --primary-color: <?php echo empty($content->primary_color) ? '#ae8fc9' : $content->primary_color; ?>;
        --secondary-color: <?php echo empty($content->secondary_color) ? '#45353b' : $content->secondary_color; ?>;
        --background-color: <?php echo empty($content->background_color) ? '#559fdf' : $content->background_color; ?>;
        --text-color: <?php echo empty($content->text_color) ? '#420e3a' : $content->text_color; ?>;
        --header-color: <?php echo empty($content->header_color) ? '#64b473' : $content->header_color; ?>;
        --nav-color: #00dffd;
        --hero-bg: url('images/<?php echo $content->top_banner_image; ?>');
        --about-bg: url('images/<?php echo $content->about_banner_image; ?>');
        --header-bar: #;
        --nav-bar-text: #160335;
        --body-bg: #e3eaa4;
        --footer-bg: #43400e;
        --footer-bottom-bg: #2b3319;
        --footer-bottom-text: #1f022d;
        --button-color-gradient: linear-gradient(180deg, #31ff87 -26.97%, #21fe0d 157.88%);

        --footer-background-color: #34213c;
    }






    .primary-background-color {
        background-color: #FFD39A !important;
    }

    .primary-text-color {
        color: #222 !important;
    }

    .topbar-background-color {
        background-color: #FFD39A !important;
        /* border-bottom:solid 1px #eee !important */
    }

    .top-nav-icon-color {
        color: #fff !important;
    }

    .topbar-background-color a,
    .topbar-background-color .cart_amt,
    .topbar-background-color {
        color: #222 !important;
    }

    .topbar-background-color .cart_amt {
        color: #fff !important;
    }

    .topbar-background-color a:hover {
        color: #3e4253 !important;
    }

    .logo-bg-color {
        background-color: unset !important;
        color: #111 !important;
    }

    .nav-color {
        background-color: var(--nav-color);
    }

    .nav-text-color {
        color: #333333 !important;
    }

    .nav-icon-color {
        color: #222 !important;
    }

    .nav-active-color {
        color: #222 !important;
    }

    .nav-text-color:hover {
        color: #8c8c8c !important;
    }

    .nav-color-bottom {
        background-color: #f3f3f3 !important;
    }

    .nav-txt-color-bottom {
        color: #000 !important;
    }

    .navbar-brand {
        font-size: 1.25rem !important;
    }

    .banner-slogan-color {
        color: #fff !important;
    }

    .banner-heading-color {
        color: #fff !important;
    }

    .banner-tagline-color {
        color: #fff !important;
    }

    .banner-btn-color {
        background-color: #FFB3B3 !important;
        color: #fff !important;
        border: 0 !important;
    }

    .banner-btn-color:hover {
        background-color: #F29393 !important;
        color: #fff !important;
    }

    .banner-bg-box-color {
        background-color: #6c6c6c61 !important;
    }

    /* Slider Buttons */
    .slide1 .btn1 {
        background-color: #253344 !important;
        border-color: #222 !important;
    }

    .slide1 .btn2 {
        background-color: transparent !important;
        border-color: #fff !important;
    }

    .slide2 .btn1 {
        background-color: var(--about-bg) !important;
        border-color: var(--about-bg) !important;
    }

    .slide2 .btn2 {
        background-color: transparent !important;
        border-color: #fff !important;
    }

    .swiper-slide .btn-group>div:hover {
        background-color: var(--about-bg) !important;
        border-color: var(--about-bg) !important;
    }

    /* Slider Buttons */
    .about-btn-color {
        color: #fff !important;
        background-color: #222 !important;
    }

    .about-btn-color:hover {
        color: #fff !important;
        background-color: #256D85 !important;
    }

    .product-block .shop-btn-color {
        background-color: #FFB3B3 !important;
        color: #fff !important;
        border-bottom: solid 1px transparent !important;
    }

    .product-block .shop-btn-color:hover {
        background-color: #F29393 !important;
        color: #fff !important;
        border-bottom: solid 1px transparent !important;
    }

    /* Overlays */
    .overlay-background:before {
        background-color: #00000047 !important;
    }

    .slide1-overly::before {
        background-color: #000000d9 !important;
    }

    .slide2-overly::before {
        background-color: #000000ce !important;
    }

    .about-overlay:before {
        background-color: #00000063 !important;
    }

    .pdt-overlay {
        background-color: #62626200 !important;
    }

    /* Overlays */
    .about-section-color {
        color: #222 !important;
        background-color: #fff !important;
    }

    .about-section-icon-color {
        color: #6E85B7 !important;
    }

    .footer-icon-color {
        color: #fff !important;
    }

    .footer-background-color {
        background-color: #2C3639 !important;
        color: #fff !important;
    }

    .footer-background-color a {
        color: #fff !important;
    }

    .spacer.primary-background-color:before,
    .footer-background-color h5:before {
        background-color: #ffffff !important;
    }

    .cart_bag {
        top: 60px !important;
        border: 1px solid #222 !important;
    }

    .cart_bag:before {
        border-bottom: 10px solid #222 !important;
    }

    .product-block .product-image::before {
        background: #e84c3d !important;
    }

    /*Theme  css*/

    /*Element Base
/* ---------------------------------------------*---------------------------- */

    .navbar-section1,
    .banner-section1,
    .about-section1,
    .pdt-section1,
    .footer1 {
        font-family: "Poppins", sans-serif;
    }

    .navbar-section2,
    .banner-section2,
    .about-section2,
    .pdt-section2,
    .footer2 {
        font-family: "Rubik", sans-serif;
    }

    .navbar-section3,
    .banner-section3,
    .about-section3,
    .pdt-section3,
    .footer3 {
        font-family: "Inter", sans-serif;
    }

    .navbar-section4,
    .banner-section4,
    .about-section4,
    .pdt-section4,
    .footer4 {
        font-family: "Raleway", sans-serif;
    }

    .navbar-section5,
    .banner-section5,
    .about-section5,
    .pdt-section5,
    .footer5 {
        font-family: "Poppins", sans-serif;
    }

    .navbar-section6,
    .banner-section6,
    .about-section6,
    .pdt-section6,
    .footer6 {
        font-family: "Poppins", serif;
    }

    .navbar-section7,
    .banner-section7,
    .about-section7,
    .pdt-section7,
    .contact-section7,
    .featured-section7,
    .footer7 {
        font-family: "Rubik", sans-serif;
    }

    .navbar-section8,
    .banner-section8,
    .about-section8,
    .pdt-section8,
    .footer8 {
        font-family: "Roboto", sans-serif;
    }

    .navbar-section9,
    .banner-section9,
    .about-section9,
    .pdt-section9,
    .footer9 {
        font-family: "Rubik", sans-serif;
    }

    .navbar-section10,
    .banner-section10,
    .about-section10,
    .pdt-section10,
    .footer10 {
        font-family: "PT Sans", sans-serif;
    }

    .about-section2 .banner2 .head-title h1,
    .about-section2 .about-section h2,
    .about-section2 .about-section h3,
    .pdt-section2 h2,
    .pdt-section2 h5m .banner-section2 .banner .head-title h1,
    .footer2 h5 {
        font-family: "Rubik", sans-serif;
    }

    .about-section3 .banner3 .head-title h1,
    .about-section3 .about-section h2,
    .about-section3 .about-section h3,
    .pdt-section3 h2,
    .pdt-section3 h5,
    .banner-section3 .banner .head-title h1,
    .footer3 h5 {
        font-family: "Inter", sans-serif;
    }

    .about-section4 .banner4 .head-title h1,
    .about-section4 .about-section h2,
    .about-section4 .about-section h3,
    .pdt-section4 h2,
    .pdt-section4 h5,
    .banner-section4 .banner .head-title h1,
    .footer4 h5 {
        font-family: "Raleway", sans-serif;
    }

    .about-section6 .banner6 .head-title h5,
    .about-section6 .about-section h2,
    .about-section6 .about-section h3,
    .pdt-section6 h2,
    .pdt-section6 h5,
    .banner-section6 .banner .head-title h1,
    .footer6 h5 {
        font-family: "Poppins", sans-serif;
    }

    .about-section8 .banner8 .head-title h5,
    .about-section8 .about-section h2,
    .about-section8 .about-section h3,
    .pdt-section8 h2,
    .pdt-section8 h5,
    .banner-section8 .banner .head-title h1,
    .footer8 h5 {
        font-family: "Roboto", sans-serif;
    }

    .product-name3,
    .product-name1 {
        font-weight: 700;
        margin-bottom: 1rem;
    }

    body {
        font-family: "Montserrat", sans-serif;
        font-size: 1rem;
        color: #222;
    }

    a {
        text-decoration: none;
    }

    main {
        position: relative;
        overflow: hidden;
    }

    a:hover {
        text-decoration: none;
        color: #1c1c1c;
    }

    img {
        max-width: 100%;
    }

    /* -------------------------------------------------------------------------- */

    /*Buttons
/* ---------------------------------------------*---------------------------- */
    .btn {
        color: #fff;
        font-size: 1rem;
        padding: 0.875rem 2rem;
        display: inline-table;
        border: 2px solid transparent;
        line-height: 1;
        height: max-content;
    }

    .btn.btn-sm {
        font-size: 0.875rem;
        margin: 0;
        padding: 0.75rem 2rem;
    }

    .btn-success {
        font-size: 1.313rem;
        font-weight: 400;
        padding: 1.125rem 2.5rem;
    }

    .btn-success:hover {
        background: #52aa18;
        border-color: #52aa18;
    }

    /* -------------------------------------------------------------------------- */

    /*BgColor Primary
/* ---------------------------------------------*---------------------------- */

    header .header-icon i {
        color: #222;
        font-size: 1.25rem;
    }

    header .ms-auto {
        font-size: 14px;
        color: #fff;
    }

    ul li {
        padding: 0;
        list-style: none;
    }

    /* -------------------------------------------------------------------------- */

    /*Title block spacer
/* ---------------------------------------------*---------------------------- */
    .spacer {
        margin: 0 0 1.563rem 0;
        width: 2.813rem;
        height: 2px;
    }

    .pdt-section .product-title {
        font-weight: 700;
    }

    /* -------------------------------------------------------------------------- */

    /*prouct common design
/* ---------------------------------------------*---------------------------- */

    .pdt-section-common h2 {
        margin-bottom: 2rem;
    }

    .pdt-section-common .product-block {
        position: relative;
        overflow: hidden;
        background-color: #fff;
        margin-bottom: 2rem;
        text-align: left;
        transition: all 0.1s;
        border: solid 1px #e8e8e8;
        text-align: center;
        padding-bottom: 2rem;
    }

    .pdt-section-common .product-block:hover {
        box-shadow: 0 0 5px 5px rgb(126 141 162 / 10%);
    }

    .pdt-section-common .product-details {
        padding: 1rem 2rem 1rem;
        text-align: center;
        background-color: #ffffff;
        border-top: solid 1px #ddd;
    }

    .pdt-section-common .prod_category {
        margin-bottom: 0;
    }

    .pdt-section-common .prod_price {
        color: #0d6efd;
        font-size: 1.25rem;
        padding-top: 1.5rem;
        font-weight: 700;
    }

    /* -------------------------------------------------------------------------- */

    /* 1. Header
/* ---------------------------------------------*---------------------------- */


    /* -------------------------------------------------------------------------- */

    /*sizing design
/* ---------------------------------------------*---------------------------- */

    .size-opts {
        margin: 10px 0 20px;
    }

    ul.proSize-ul {
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    ul.proSize-ul li {
        list-style-type: none;
        margin-right: 10px;
    }

    ul.proSize-ul li:last-child {
        margin-right: 0;
    }

    ul.proSize-ul li label {
        margin-bottom: 0;
        display: block;
        position: relative;
        overflow: hidden;
    }

    ul.proSize-ul li label span {
        border: 2px solid #505050;
        font-size: 15px;
        line-height: 1;
        padding: 8px 8px 7px 8px;
        color: #000;
        text-align: center;
        min-width: 50px;
        height: 32px;
        transition: all 0.15s ease;
        display: block;
        letter-spacing: 0.5px;
        font-weight: 400;
    }

    ul.proSize-ul li label input[type="radio"] {
        position: absolute;
        width: 50px;
        height: 32px;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer;
    }

    ul.proSize-ul li label input[type="radio"]:checked+span {
        border: 2px solid #4cc600;
        transition: all 0.15s ease;
        color: #3a9402;
        font-weight: 700;
    }

    ul.proSize-ul li.unavailable span {
        background-color: #ddd;
        opacity: 0.3;
        overflow: hidden;
        cursor: not-allowed;
    }

    ul.proSize-ul li.unavailable span::before {
        background-color: #000;
        content: "";
        height: 2px;
        left: -5px;
        position: absolute;
        top: 11px;
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        width: 141%;
    }

    ul.proSize-ul li.unavailable input[type="radio"]:checked+span {
        border: 2px solid #505050;
        transition: all 0.15s ease;
        color: #000;
        font-weight: 400;
    }

    /* -------------------------------------------------------------------------- */

    /* 1. Banner
/* ---------------------------------------------*---------------------------- */




    /* -------------------------------------------------------------------------- */

    /* 1. Footer
/* ---------------------------------------------*---------------------------- */

    footer {
        padding: 4rem 0;
        font-weight: 300;
        font-size: 0.85rem;
    }

    footer .company-info .footer-logo {
        font-size: 1.5rem;
    }

    footer .company-info p {
        padding: 1rem 6rem 0 0;
        font-weight: 300;
    }

    footer ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    footer ul li {
        padding-top: 0.5rem;
    }

    footer a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
    }

    footer a:hover {
        color: #fff;
    }

    footer .copyright {
        border-top: solid 1px rgba(255, 255, 255, 0.1);
        border-bottom: solid 1px rgba(255, 255, 255, 0.1);
        padding: 1rem 0;
        margin-top: 5rem;
    }

    .footer2 .fblock {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 1rem;
        border-radius: 0.5rem;
        min-height: 180px;
    }

    footer.footer1 {
        padding-bottom: 0;
    }

    footer.footer5 {
        background-color: #086c99;
    }

    .footer-cc img {
        width: 50px;
    }



    /*Banner Section*/

    .about-section3 .about-section {
        padding: 0 0 6rem 0;
    }

    .about-section3 .about-section-block {
        color: #fff;
    }

    .about-section3 .about-section h2 {
        font-size: 2.5rem;
        font-weight: 700;
        padding-bottom: 2rem;
    }

    .about-section3 .about-section h5 {
        font-size: 1.25rem;
        font-weight: 500;
        padding-top: 2rem;
    }

    .about-section3 h3.title {
        position: relative;
        display: inline-block;
        margin: 0 0 3rem 0;
        font-size: 2rem;
        color: #2f97c3;
    }

    .about-section3 h3.title span {
        background-color: #f7f7f7;
        position: relative;
        z-index: 9;
        padding-left: 10px;
        padding-right: 10px;
    }

    .about-section3 .about-section .about-icon {
        max-width: 88px;
        margin: 0 auto;
    }

    .about-section3 .about-section .block {
        padding: 0 2rem;
        max-width: 350px;
        margin: 0 auto;
    }

    .about-section3 .arrow {
        position: relative;
    }

    .product-section3 .btn-shop {
        text-align: center;
        border: 2px solid #fb7204;
        display: inline-block;
        font-size: 14px;
        text-transform: uppercase;
        transition: 0.3s;
        color: #fff;
        padding: 15px 32px;
        letter-spacing: 1px;
        background-color: #fb7204;
        max-width: 15rem;
        border: 0;
    }

    .pdt-section3 .product-title-bar h2 {
        font-size: 22px;
    }

    .pdt-section3 .product-title-bar h2 i {
        font-size: 22px;
    }

    .pdt-section3 .product-block {
        position: relative;
        overflow: hidden;
        margin-bottom: 0.5rem;
        padding-bottom: 1.5rem;
        font-size: 0.9rem;
    }

    .pdt-section3 .btn_shop {
        padding-top: 5px;
        padding-bottom: 5px;
        position: absolute;
        left: 0;
        top: 19px;
        width: 100%;
        background-color: #fff;
    }

    .pdt-section3 .btn_shop .btn {
        padding: 0;
    }

    .pdt-section3 .product-block .btn_shop {
        transition: all 0.5s;
    }

    .pdt-section3 .product-block:hover .btn_shop {
        opacity: 1;
        top: -6px;
    }

    .pdt-section3 .price-cell {
        height: 22px;
        position: relative;
        overflow: hidden;
    }

    .pdt-section3 .product-details {
        margin: 0 auto;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        overflow: hidden;
        padding: 1rem 1rem 1rem 0;
    }

    .pdt-section3 .prod_price {
        font-size: 15px;
    }

    .featured-products3 .btn {
        padding: 0;
        border: 0;
        box-shadow: none;
        outline: none;
        border-radius: 0;
    }

    .featured-products3 .featured-title {
        border-bottom: solid 1px #eee;
    }

    .featured-products3 .featured-title h2 {
        font-size: 22px;
        margin-bottom: 1rem;
        font-weight: 500;
    }

    .featured-products .featured-title bi {
        display: none;
    }

    .featured-products3 .featured-title bi {
        display: inline;
    }

    .featured-products .bi-icon1 {
        display: none;
    }

    .featured-products3 .prod_category {
        margin-bottom: 0.5rem;
    }

    .featured-products3 .product-title {
        padding: 0 0 0.5rem 0;
        font-size: 1rem;
        font-weight: 400;
    }

    .featured-products3 .prod_category {
        color: #e84c3d;
    }

    .pdt-section .product-title.product-name3 {
        padding: 0;
        font-size: 1rem;
        font-weight: 400;
    }

    footer.footer3 .footer-nav ul li {
        float: left;
        width: 48%;
    }

    footer.footer3 .spacer {
        height: 2px;
        width: 80%;
        background-color: #ff7902;
        margin-bottom: 2rem;
        position: relative;
        margin-top: 1rem;
    }

    footer.footer3 .spacer:before {
        height: 10px;
        width: 10px;
        background-color: #ff7902;
        border-radius: 50%;
        position: absolute;
        left: 0;
        top: -4px;
        content: "";
    }

    /*End Banner Section*/


    /* -------------------------------------------------------------------------- */

    /* Website: 6
/* ---------------------------------------------*---------------------------- */

    .navbar-section6 {
        box-shadow: 0 0 12px 1px rgba(0, 0, 0, 0.2);
    }

    .navbar-section6 .container-fluid {
        padding-left: 15px;
        padding-right: 15px;
        max-width: 1720px;
    }

    .navbar-section6 .header-top-bar {
        height: 65px;
        font-size: 14px;
        line-height: 21px;
        font-weight: 400;
        display: flex !important;
        align-items: center !important;
    }

    .navbar-section6 .header-top-bar .topbar-box {
        display: flex;
        background: white;
        color: #434e6e;
        width: fit-content;
        padding: 7px 15px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 400;
    }

    .navbar-section6 .shop-btn {
        display: inline-block;
        color: #fff;
        background-color: #434e6e;
        padding: 8px 18px;
        border-radius: 5px;
        border: 1px solid #434e6e;
    }

    .navbar-section6 .navbar {
        padding: 0;
        margin: 0;
    }

    .navbar-section6 .top-head {
        height: 91px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .navbar-section6 .max-wid {
        border-top: 1px solid #f5f5f5;
        height: 91px;
        display: flex;
        align-items: center;
    }

    .navbar-section6 .primary-navigation .navbar-nav a.nav-link:before {
        position: absolute;
        content: "";
        width: 0;
        height: 1px;
        left: 0;
        bottom: -2px;
        background-color: #363636;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    .navbar-section6 .primary-navigation .navbar-nav a.nav-link.nav-active-color:before {
        width: 35px;
    }

    .navbar-section6 .primary-navigation .navbar-nav a.nav-link:hover:before {
        width: 35px;
    }

    .navbar-section6 .header-top-bar ul.top-bar-right li {
        position: relative;
    }

    .navbar-section6 header .logo {
        position: absolute;
        top: -5rem;
    }

    .navbar-section6 header a.navbar-brand {
        font-size: 36px !important;
        line-height: 36px;
        font-weight: 500;
        padding: 0;
        margin: 0;
    }

    .navbar-section6 header a.navbar-brand span {
        color: #424242;
    }

    .navbar-section6 header .logo-icon {
        font-size: 1.563rem;
        width: 3.438rem;
        height: 3.438rem;
        padding: 0.5rem 0 0 0;
        margin: -0.675rem 0.875rem 0 0;
        display: block;
        color: #fff;
        text-align: center;
        -webkit-border-radius: 99%;
        -moz-border-radius: 99%;
        -o-border-radius: 99%;
        border-radius: 99%;
        position: relative;
        top: 4px;
    }

    .navbar-section6 header .header-content .header-icon {
        padding: 0.625rem 1.25rem;
        border-left: solid 1px rgba(0, 0, 0, 0.1);
    }

    .navbar-section6 header .header-content .header-icon i {
        color: #008fce;
    }

    .navbar-section6 header .header-content .header-icon strong {
        font-weight: 600;
        font-size: 1rem;
    }

    .navbar-section6 header .header-content .header-icon p {
        line-height: 1;
        font-size: 15px;
    }

    .navbar-section6 .primary-navigation .navbar-nav .nav-link {
        color: #363636;
        /* padding: .5rem 2rem; */
        padding: 0;
        font-size: 16px;
        line-height: 24px;
        font-weight: 600;
        transition: all 0.3s;
        text-transform: capitalize;
        margin: 0 0.25rem;
        position: relative;
    }

    .navbar-section6 .primary-navigation .navbar-nav .nav-link.active {
        background-color: #34e081;
        border-radius: 2rem;
    }

    .navbar-section6 .nav-icon {
        display: none;
    }

    .navbar-section6 .primary-navigation {
        position: relative;
        z-index: 9;
    }

    .navbar-section6 .header-icon .far {
        color: #ff7906;
        position: relative;
        top: 1px;
    }

    .navbar-section6 .cart_amt {
        color: #333;
    }

    .navbar-section6 .cart_bag {
        top: 50px;
    }

    .navbar-section6 .cart_link .btn.btn-update {
        color: #fff;
        background-color: #34e081;
        border: 0;
    }

    .nav-home .navbar-section6 header a.navbar-brand {
        color: #fff;
        font-weight: 700;
    }

    .nav-home .navbar-section6 .primary-navigation .navbar-nav .nav-link {
        color: #fff;
    }

    .nav-home .navbar-section6 .primary-navigation .navbar-nav .nav-link.active {
        background-color: #34e081;
        border-radius: 2rem;
    }

    /*Banner Section*/

    .banner-section6 {
        background-color: #f5f5f5 !important;
        padding: 40px;
        padding-bottom: 150px;
    }

    .banner-section6 .banner {
        overflow: hidden;
        color: #fff;
        background-image: var(--hero-bg);
        position: relative;
        padding: 5rem 0 5rem 0;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 600px !important;
        max-width: 1690px !important;
        text-align: left;
        margin: auto;
        border-radius: 30px;
    }

    .banner-section6 .banner:before {
        position: absolute;
        content: "";
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
    }

    .banner-section6 .banner>.container {
        max-width: 1160px !important;
    }

    .banner-section6 .banner .banner-wrapper {
        max-width: 790px !important;
    }

    .banner-section6 .banner .head-title {
        position: relative;
    }

    .banner-section6 .banner .head-title h1 {
        font-size: 70px;
        line-height: 1.2;
        font-weight: 700;
        margin: 0 0 1rem 0;
        position: relative;
        text-transform: capitalize;
    }

    .banner-section6 .banner .head-title p {
        font-size: 18px;
        line-height: 1.7;
        font-weight: 400;
    }

    .banner-section6 .btn-primary {
        display: inline-block;
        padding: 12px 30px;
        font-size: 16px;
        line-height: 24px;
        font-weight: 600;
        border: 0;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        opacity: 1 !important;
        z-index: 1;
        position: relative;
        border-radius: 5px;
        overflow: hidden;
    }

    .banner-section6 .btn-primary img:nth-child(1) {
        bottom: -15px;
        left: -15px;
        position: absolute;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        z-index: -1;
        width: 100%;
    }

    .banner-section6 .btn-primary img:nth-child(2) {
        top: -15px;
        right: -15px;
        position: absolute;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        z-index: -1;
        width: 100%;
    }

    .banner-section6 .btn-primary:hover img:nth-child(1) {
        bottom: 0;
        left: 0;
        opacity: 0.2;
        visibility: visible;
        max-width: 30px;
    }

    .banner-section6 .btn-primary:hover img:nth-child(2) {
        top: 0;
        right: 0;
        opacity: 0.2;
        visibility: visible;
        max-width: 30px;
    }

    .about-section6 {
        height: 580px;
        background-color: #fff !important;
        overflow: hidden;
    }

    .about-section6 .about-animation-img img {
        position: absolute;
        right: 0;
        bottom: 0;
        max-width: 100%;
        animation: aboutAnimation 8s infinite linear;
    }

    @keyframes aboutAnimation {
        0% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(50px, 0);
        }

        100% {
            transform: translate(0, 0);
        }
    }

    .about-section6 .container-fluid {
        padding: 0;
        margin: 0;
        height: 100%;
        width: 100%;
    }

    .about-section6 .left-col {
        overflow: hidden;
        color: #fff;
        background-image: url(../../img/about.png);
        position: relative;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        margin: auto;
    }

    .about-section6 .about-data {
        max-width: 470px;
        padding-left: 30px;
    }

    .about-section6 h2 {
        font-size: 50px;
        margin-bottom: 10px;
        line-height: 1.3;
        margin-top: -10px;
        font-weight: 700;
        color: #434e6e;
    }

    .about-section6 p {
        font-size: 16px;
        line-height: 1.7;
        font-weight: 500;
    }

    .about-section6 .btn-primary {
        display: inline-block;
        padding: 12px 30px;
        font-size: 16px;
        line-height: 24px;
        font-weight: 600;
        border: 0;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        opacity: 1 !important;
        z-index: 1;
        position: relative;
        border-radius: 5px;
        overflow: hidden;
    }

    .about-section6 .btn-primary img:nth-child(1) {
        bottom: -15px;
        left: -15px;
        position: absolute;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        z-index: -1;
        width: 100%;
    }

    .about-section6 .btn-primary img:nth-child(2) {
        top: -15px;
        right: -15px;
        position: absolute;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        z-index: -1;
        width: 100%;
    }

    .about-section6 .btn-primary:hover img:nth-child(1) {
        bottom: 0;
        left: 0;
        opacity: 0.2;
        visibility: visible;
        max-width: 30px;
    }

    .about-section6 .btn-primary:hover img:nth-child(2) {
        top: 0;
        right: 0;
        opacity: 0.2;
        visibility: visible;
        max-width: 30px;
    }

    .pdt-section6 {
        background-color: #f5f5f5 !important;
        transition: all 0.4s ease 0s;
        padding-top: 150px;
    }

    .pdt-section6 .product-block:hover {
        -webkit-transform: translate(0, -5px);
        transform: translate(0, -5px);
    }

    .pdt-section6 .prod_img6 {
        transition: all 0.4s ease 0s;
    }

    .pdt-section6 .product-block:hover .prod_img6 {
        transform: scale(1.1) rotate(3deg);
    }

    .pdt-section6 .bottom-btn {
        text-align: right;
        position: absolute;
        right: -8px;
        bottom: -8px;
    }

    .pdt-section6 .bottom-btn i {
        display: inline-block;
        width: 60px;
        height: 60px;
        line-height: 42px;
        color: #6D8B74;
        background-color: #fff;
        font-size: 25px;
        border: 10px solid #f5f5f5;
        border-radius: 50%;
        text-align: center;
        cursor: pointer;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    .pdt-section6 .bottom-btn:hover i {
        color: #fff;
        background-color: #5F7161;
        -webkit-transform: rotate(-360deg);
        transform: rotate(-360deg);
    }

    .pdt-section6 .bottom-btn a {
        display: inline-block;
        color: #434e6e;
        font-weight: 600;
        position: relative;
        top: -5px;
        right: 0;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        text-decoration: none;
    }

    .pdt-section6 .bottom-btn:hover a {
        opacity: 1 !important;
        visibility: visible !important;
        right: 15px !important;
    }

    .prod_price6 {
        font-size: 1.5rem;
    }

    .navbar-section6 .cart_bag {
        border: 1px solid #000;
    }

    .pdt-section6 .product-block {
        position: relative;
        overflow: hidden;
        background-color: #fff;
        padding: 0 0 1rem 0;
        text-align: left;
        transition: all 0.4s;
        margin-bottom: 1rem;
        border-radius: 10px;
    }

    .pdt-section6 .product-details {
        background: #fff;
        padding-top: 0.5rem;
        padding-bottom: 1rem;
        padding-left: 15px;
    }

    .pdt-section6 .pdt-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        transition: all 0.4s ease 0s;
    }

    .pdt-section6 .product-title {
        font-size: 16px;
        line-height: 20px;
        font-weight: 700;
        text-transform: capitalize;
        padding: 1rem 0 0;
        color: #363636;
    }

    .pdt-section6 .prod_price6 {
        font-size: 16px;
        line-height: 16px;
        font-weight: 500;
    }

    .prod_desc6 {
        font-size: 0.95rem;
        color: #777;
        margin: 0;
    }

    .fs6 {
        background-color: #f5f5f5;
    }

    .box-section6 {
        min-height: 350px;
        background-color: #fff;
        display: flex;
        align-items: center;
    }

    .box-section6 .box-col-wrap {
        margin-bottom: 30px;
        position: relative;
        background-color: #434e6e;
        border-radius: 10px;
        padding: 30px 15px 30px 60px;
        margin-left: 45px;
        z-index: 1;
    }

    .box-section6 i {
        display: inline-block;
        width: 90px;
        height: 90px;
        text-align: center;
        line-height: 70px;
        font-size: 30px;
        color: #fff;
        background-color: #434e6e;
        border: 10px solid #fff;
        border-radius: 50%;
        position: absolute;
        top: 30px;
        left: -45px;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    .box-section6 .box-col-wrap:hover i {
        border: 10px solid #434e6e;
        color: #434e6e;
        background-color: #fff;
    }

    .box-section6 h3 {
        font-size: 20px;
        line-height: 1.2;
        font-weight: 700;
        color: #fff;
    }

    .box-section6 p {
        font-size: 16px;
        line-height: 1.7;
        font-weight: 400;
        color: #fff;
    }

    .box-section6 img {
        position: absolute;
        right: 10px;
        bottom: 0;
        max-width: 125px;
        z-index: -1;
    }

    footer.footer6 {
        padding-bottom: 0;
        font-size: 1rem;
        background-color: #0e0e0e;
    }

    .footer6 .copyright p {
        margin: 0;
    }

    .footer6 .quick-links li {
        padding: 0.25rem 0;
        float: left;
        width: 44%;
        margin-right: 5%;
        position: relative;
        margin-bottom: 0.8rem;
    }

    .footer6 h5 {
        padding-bottom: 0.75rem;
        max-width: 300px;
        position: relative;
    }

    footer.footer6 .spacer {
        height: 2px;
        width: 80%;
        background-color: #ff7902;
        margin-bottom: 2rem;
        position: relative;
        margin-top: 1rem;
    }

    footer.footer6 .spacer:before {
        height: 10px;
        width: 10px;
        background-color: #ff7902;
        border-radius: 50%;
        position: absolute;
        left: 0;
        top: -4px;
        content: "";
    }

    /* -------------------------------------------------------------------------- */

    /* Website: 7
/* ---------------------------------------------*---------------------------- */

    /* -------------------------------------------------------------------------- */

    /* 7. Header
/* ---------------------------------------------*---------------------------- */
    /* ====================================== */
    /* ============= Nav Bar 1 ============== */
    /* ====================================== */

    .navbar-section7 a:hover {
        color: inherit !important;
    }

    .navbar-section7 .navbar {
        height: 88px;
        background-color: #fff;
        color: black;
        padding: 0;
        position: relative;
        z-index: 100;
    }

    .navbar-section7 .navbar>div {
        height: 100%;
        padding: 0;
        display: flex;
        align-items: center;
    }

    .navbar-section7 .brand-name-box {
        min-width: 300px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .navbar-section7 .brand-name-box.brand-name {
        background-color: #7F5283;
        color: #fff;
    }

    .navbar-section7 .brand-name-box.contact {
        background-color: #3a23d7;
        color: #fff;
    }

    .navbar-section7 .navbar-nav a {
        color: #4a4c59;
    }

    .navbar-section7 .brand-name-box a {
        color: #fff;
    }

    .navbar-section7 .nav-menu {
        height: 100%;
        font-size: 1.2rem;
        font-weight: 500;
        line-height: 2.7rem;
        background-color: #7F5283;
    }

    .navbar-section7 .brand-name-box.cart {
        min-width: 150px;
        background-color: #7F5283;
        color: #fff;
    }

    .navbar-section7 .cart_amt {
        margin: 0 15px;
    }

    .minicart_buttons .btn-continue,
    .minicart_buttons .btn-continue:hover {
        color: #333 !important;
    }

    /* Menu */

    .navbar-section7 .navbar-nav .nav-link {
        padding-right: 4rem;
    }

    .navbar-section7 .nav-link.active {
        color: var(--about-bg);
    }

    .navbar-section7 #navbarSupportedContent .navbar-nav {
        background: #7F5283;
        text-align: center;
    }

    .navbar-section7 .cart ul {
        list-style: none;
        margin: auto;
        text-align: center;
    }

    .navbar-section7 .cart a {
        text-decoration: none;
    }

    /* ---------------------------------------------*---------------------------- */
    /* 7 Hero Banner
/* ---------------------------------------------*---------------------------- */

    /* ====================================== */
    /* ========= Banner Section 7 =========== */
    /* ====================================== */

    .banner-section7 .banner {
        overflow: hidden;
        background-repeat: repeat;
        color: #fff;
        background-color: #000;
        background-image: var(--hero-bg);
        position: relative;
        padding: 8rem 0;
        background-size: cover;
    }

    .banner-section7 .banner .head-title {
        max-width: 800px;
        position: relative;
        z-index: 9;
        text-transform: uppercase;
    }

    .banner-section7 .banner .head-title h1 {
        font-size: 4rem !important;
        font-weight: 700 !important;
        line-height: 1.1 !important;
        margin: 0 !important;
    }

    .banner-section7 .banner .head-title h1 small {
        font-size: 2rem !important;
        letter-spacing: 0.6rem !important;
        display: block !important;
    }

    .banner-section7 .banner .head-title p {
        padding: 1rem 7rem 1rem 0;
        font-size: 1.5rem;
    }

    .banner-section7 .banner .btn.btn-primary {
        padding: 1rem 3rem;
        font-size: 1.25rem;
        text-transform: uppercase;
        background-color: #a21a28;
        border: 0;
        font-weight: 700;
        box-shadow: none;
        transition: 0.3s all ease-in;
    }

    .banner-section7 .banner .banner-pic {
        margin-right: -2rem;
    }

    .banner-section7 .btn.btn-primary:hover {
        background-color: #b02937;
    }

    .banner-section7 .prod-img-wrapper img {
        border-radius: 100%;
        z-index: 1;
        position: relative;
    }

    /* ====================================== */
    /* ========== About Section 7 =========== */
    /* ====================================== */

    .about-section7 .left {
        background-color: var(--about-bg);
        height: 80vh;
    }

    .about-section7 .right {
        background-color: #f4f7f4;
    }

    .about-section7 .about-row .data-right {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .about-section7 .about-row .data-left img {
        width: 636px;
        height: 636px;
        object-fit: cover;
    }

    .about-section7 .data-container {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .about-section7 .about-title {
        font-weight: 800;
        font-size: 3rem;
        margin-bottom: 2rem;
        margin-top: 2rem;
    }

    .about-section7 .about-text {
        font-weight: 200;
        font-size: 1.2rem;
        margin-bottom: 2rem;
    }

    .about-section7 .about-button {
        padding: 1rem 3rem;
        font-size: 1.25rem;
        text-transform: uppercase;
        background-color: #FFB3B3;
        border: 0;
        border-radius: 5px;
        font-weight: 700;
        box-shadow: none;
        width: fit-content;
        text-align: center;
        transition: 0.3s all ease-in;
    }

    .about-section7 .about-button a {
        color: #fff;
        text-decoration: none;
    }

    @media (max-width: 576px) {
        .about-section7 .left {
            height: 100vh;
        }

        .about-section7 .about-title {
            color: #fff !important;
        }

        .about-section7 .about-text {
            color: #fff !important;
        }

        .about-section7 .about-button {
            background-color: #fff !important;
        }

        .about-section7 .about-button a {
            color: var(--about-bg) !important;
        }

        .about-section7 .about-row .data-left img {
            width: 300px;
            height: 300px;
        }
    }

    /* ====================================== */
    /* ========= Product Section 7 ========== */
    /* ====================================== */

    .pdt-section7 {
        margin: unset;
        padding: unset;
        margin-top: 6rem;
        margin-bottom: 4rem;
    }

    .pdt-section7 .product-block {
        position: relative;
        overflow: hidden;
        background-color: #fff;
        margin-bottom: 3rem;
        text-align: left;
        transition: all 0.4s;
        text-align: center;
        background-color: #f1f1f1;
        box-shadow: 0px 0px 50px -38px rgb(0, 0, 0);
        border: unset;
    }

    .pdt-section7 .product-block:hover {
        box-shadow: 0px 20px 40px rgb(126 141 162 / 60%);
    }

    .pdt-section7 .product-details {
        padding: 2rem;
        text-align: center;
        background-color: #fff;
        border: 1px solid #00000014;
    }

    .pdt-section7 .prod_category7 {
        color: var(--about-bg);
        font-size: 17px;
        line-height: 26px;
        font-weight: 400;
        margin: 0;
        padding: 0;
        margin-bottom: 3px;
    }

    .pdt-section7 .product-title {
        color: #000;
        font-size: 22px;
        line-height: 30px;
        font-weight: 700;
        margin: 0;
        padding: 0;
        margin-bottom: 5px;
        text-transform: capitalize;
    }

    .pdt-section7 .prod_price7 {
        color: var(--about-bg);
        font-size: 20px;
        line-height: 26px;
        font-weight: 500;
        margin: 0;
        padding: 0;
        margin-bottom: 1.3rem;
    }

    .pdt-section7 .btn-shop {
        font-size: 20px;
        letter-spacing: 0.2px;
        font-weight: 400;
        padding: 0.875rem 2rem;
        border: unset;
    }

    /* ====================================== */
    /* ========= Contact Section 1 ========== */
    /* ====================================== */

    .contact-section7 {
        min-height: 200px;
        background-color: #f9f9f9;
        display: flex;
        align-items: center;
    }

    .contact-section7 .contact-heading {
        font-weight: 700;
        color: var(--about-bg);
        margin-bottom: 1rem;
    }

    .contact-section7 .contact-text {
        font-weight: 400;
        font-size: 17px;
        line-height: 26px;
        color: #222;
    }

    .contact-section7 .contact-email {
        font-weight: 700;
    }

    /* ====================================== */
    /* ======== Featured Section 7 ========== */
    /* ====================================== */

    .featured-section7 #related_prods {
        border-top: unset;
        margin-bottom: 4rem;
        padding-top: 4rem;
    }

    .featured-section7 .feature-heading {
        font-weight: 700;
        color: var(--about-bg);
        margin-bottom: 0.5;
    }

    .featured-section7 .feature-text {
        font-weight: 400;
        font-size: 17px;
        line-height: 26px;
        color: #222;
        margin-bottom: 3rem;
    }

    .featured-section7 .product-block {
        box-shadow: 0px 0px 50px -38px rgb(0, 0, 0);
    }

    .featured-section7 .product-block:hover {
        box-shadow: 0px 20px 40px rgb(126 141 162 / 60%);
    }

    .featured-section7 .product-info {
        background-color: #f2f2f2;
        text-align: center;
    }

    .featured-section7 .prod_category {
        color: var(--about-bg);
        font-size: 17px;
        line-height: 26px;
        font-weight: 400;
        margin: auto;
        margin-bottom: 0px;
        margin-top: -7%;
        padding: 1rem;
        width: fit-content;
        background-color: #f2f2f2;
        margin-bottom: 3px;
        position: relative;
        z-index: 100;
        border-radius: 5px;
    }

    .featured-section7 .product-title {
        color: #000;
        font-size: 22px;
        line-height: 30px;
        font-weight: 700;
        margin: 0;
        margin-bottom: 0px;
        padding: 0;
        margin-bottom: 5px;
        text-transform: capitalize;
        margin-bottom: 1.1rem;
    }

    .featured-section7 .btn-shop {
        font-size: 20px;
        font-weight: 400;
        padding: 0.5rem 2rem;
        border: unset;
        background-color: #FABEA7 !important;
        color: #fff !important;
        margin-bottom: 1.5rem;
        border-radius: 5px;
    }

    footer.footer7 {
        padding-bottom: 0;
        font-size: 1rem;
        background-color: #0e0e0e;
    }

    .footer7 .copyright p {
        margin: 0;
    }

    .footer7 h5 {
        padding-bottom: 0.75rem;
        position: relative;
    }

    .footer7 .quick-links ul li {
        position: relative;
        padding-left: 25px;
        padding-top: 0;
        margin-bottom: 1rem;
    }

    .footer7 .quick-links ul li:before {
        position: absolute;
        content: "";
        left: 0;
        top: 7px;
        border: solid white;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }

    /* -------------------------------------------------------------------------- */

    /* 8 Website
/* ---------------------------------------------*---------------------------- */

    .navbar-section8 .header-top-bar {
        height: 65px;
        font-size: 14px;
        line-height: 21px;
        font-weight: 400;
        display: flex !important;
        align-items: center !important;
    }

    .navbar-section8 .header-top-bar .topbar-box {
        display: flex;
        background: transparent;
        color: #c3c3c3;
        width: fit-content;
        padding: 7px 15px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 600;
    }

    .navbar-section8 header .logo {
        position: absolute;
        top: -5rem;
    }

    .navbar-section8 header a.navbar-brand {
        font-size: 1.75rem;
        font-weight: 700;
        color: #dd3751;
    }

    .navbar-section8 header a.navbar-brand span {
        color: #222222;
    }

    .navbar-section8 header .navbar {
        padding: 1.25rem 0;
    }

    .navbar-section8 header .logo-icon {
        font-size: 1.563rem;
        width: 3.438rem;
        height: 3.438rem;
        padding: 0.5rem 0 0 0;
        margin: -0.675rem 0.875rem 0 0;
        display: block;
        color: #fff;
        text-align: center;
        -webkit-border-radius: 99%;
        -moz-border-radius: 99%;
        -o-border-radius: 99%;
        border-radius: 99%;
        position: relative;
        top: 4px;
    }

    .navbar-section8 header .header-content .header-icon {
        padding: 0.625rem 1.25rem;
    }

    .navbar-section8 header .header-content .header-icon strong {
        font-weight: 500;
        font-size: 0.85rem;
    }

    .navbar-section8 header .header-content .header-icon p {
        line-height: 1;
        font-size: 15px;
    }

    .navbar-section8 .primary-navigation .navbar {
        position: relative;
        background: #0e5dae;
    }

    .navbar-section8 .primary-navigation .navbar-nav .nav-item {
        border-right: solid 1px rgba(255, 255, 255, 0.2);
    }

    .navbar-section8 .primary-navigation .navbar-nav .nav-link.active,
    .navbar-section8 .primary-navigation .navbar-nav .nav-link {
        color: #fff;
        padding: 1.25rem 2rem;
        font-size: 1rem;
        text-transform: uppercase;
        font-weight: 700;
    }

    .navbar-section8 .primary-navigation .navbar-nav.ms-auto .nav-link:last-child {
        padding-right: 0;
    }

    .navbar-section8 .primary-navigation .navbar-nav.ms-auto .nav-link {
        text-transform: none;
        font-weight: 400;
        font-size: 14px;
    }

    .navbar-section8 .nav-icon {
        display: none;
    }

    .navbar-section8 .primary-navigation {
        position: relative;
        z-index: 9;
    }

    .navbar-section8 .header-icon i {
        color: #dd3751;
        position: relative;
        top: 1px;
    }

    .navbar-section8 .navbar .header-icon .far {
        color: #dd3751;
    }

    .navbar-section8 h5 {
        margin: 0;
        font-weight: 400;
        font-size: 12px;
    }

    .navbar-section8 .cwp-contact-info-title {
        font-size: 20px;
        line-height: 32px;
        font-weight: 600;
    }

    .navbar-section8 .btn-primary,
    .about-section8 .btn-primary {
        color: #fff;
        font-size: 1rem;
        -webkit-border-radius: 1.875rem;
        -moz-border-radius: 1.875rem;
        -o-border-radius: 1.875rem;
        border-radius: 1.875rem;
        padding: 0.875rem 2rem;
        display: inline-table;
        border: 2px solid transparent;
        line-height: 1;
        height: max-content;
        background-color: #c0a11e;
    }

    .navbar-section8 .cart_link {
        font-weight: 700;
        position: relative;
    }

    .navbar-section8 .cart_link .btn.btn-update {
        color: #fff;
        background-color: #dd3751;
        border: 0;
    }

    .navbar-section8 .cart-nav {
        padding: 1.25rem;
        text-align: center;
    }

    .navbar-section8 .cart_amt {
        margin-right: 0;
    }

    .navbar-section8 .cart_bag {
        top: 38px;
    }

    .about-section8 .banner {
        background-position: center 50%;
        background-repeat: repeat-x;
        overflow: hidden;
        padding: 2rem 0 4rem 0;
        background-size: cover;
        min-height: 700px;
        height: calc(100vh - 190px);
        background-image: var(--hero-bg);
    }

    .about-section8 .banner .head-title {
        color: #fff;
    }

    .about-section8 .banner .head-title h1 {
        font-size: 4.5rem;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1.1;
        margin: 0;
        color: #fff;
    }

    .about-section8 .banner .head-title h1 small {
        font-size: 1.5rem;
        letter-spacing: 0.6rem;
        display: block;
    }

    .about-section8 .banner .head-title p {
        padding: 1rem 0rem 1rem 0;
        font-size: 1.5rem;
        font-weight: 400;
    }

    .about-section8 .banner .btn.btn-primary {
        padding-left: 3rem;
        padding-right: 3rem;
    }

    .about-section8 .prod-img-wrapper img {
        z-index: 10000;
        position: relative;
    }

    .about-section8 .about-section {
        padding: 5rem 0 6rem 0;
        text-align: center;
    }

    .about-section8 .about-section h2 {
        font-size: 2.5rem;
        font-weight: 700;
        padding-bottom: 3rem;
        margin: 0;
    }

    .about-section8 .about-section h3 {
        padding: 3.5rem 0 0.5rem 0;
        font-size: 1.7rem;
        font-weight: 700;
    }

    .about-section8 .about-section h5.title {
        position: relative;
        display: inline-block;
    }

    .about-section8 .about-section h5.title span {
        background-color: #fff;
        position: relative;
        z-index: 9;
        padding-left: 10px;
        padding-right: 10px;
    }

    .about-section8 .about-section h5.title:before {
        position: absolute;
        left: 50%;
        height: 2px;
        width: 300px;
        background-color: #fb302e;
        content: "";
        top: 50%;
        margin-bottom: 2rem;
        margin-left: -150px;
    }

    .about-section8 .about-section .block {
        padding: 2rem;
        margin: 0 auto;
        box-shadow: 2px 0px 17px 10px rgba(0, 20, 10, 0.05);
        margin-top: 4rem;
    }

    .about-section8 .about-section .block .circle-icon {
        padding: 1rem;
        background-color: #a71928;
        width: 100px;
        height: 100px;
        margin: 0 auto;
        transform: rotate(-45deg);
        border-radius: 6px;
        margin-top: -5.2rem;
    }

    .about-section8 .about-section .block .circle-icon img {
        transform: rotate(45deg);
        margin: 0 auto;
    }

    .pdt-section8 .btn-shop {
        padding: 1rem 1rem;
        font-size: 14px;
        text-transform: uppercase;
        background-color: #dd3751;
        border: 0;
        font-weight: 600;
        box-shadow: none;
        border-radius: 0;
        width: 100%;
    }

    .about-section8 .about-section {
        background-color: #e9e9e9;
        padding: 5rem 0;
    }

    .about-section8 .about-section .abin {
        position: relative;
    }

    .about-section8 .about-section .block {
        position: relative;
        background-color: #fff;
        max-width: 74%;
        margin: 0 auto;
    }

    .about-section8 .about-section .block .info {
        padding: 0 2rem;
        font-size: 1.5rem;
    }

    .about-section8 .about-section h3 {
        padding-bottom: 0;
        font-size: 2.5rem;
    }

    .about-section8 .border-right {
        border-right: 1px solid #e5e5e5;
    }

    .banner-section8 .banner {
        background-image: var(--hero-bg);
        background-position: center 50%;
        background-repeat: repeat-x;
        overflow: hidden;
        padding: 0 0 4rem 0;
        background-size: cover;
        min-height: 700px;
    }

    .banner-section8 .banner .head-title {
        color: #fff;
    }

    .banner-section8 .banner .head-title h1 {
        font-size: 48px;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1.1;
        margin: 0;
        color: #fff;
        letter-spacing: 3px;
    }

    .banner-section8 .banner .head-title h1 small {
        font-size: 1.5rem;
        letter-spacing: 0.6rem;
        display: block;
    }

    .banner-section8 .banner .head-title p {
        padding: 1rem 0rem 1rem 0;
        font-size: 36px;
        font-weight: 300;
        letter-spacing: 2px;
    }

    .banner-section8 .banner .btn.btn-primary {
        padding: 1.5rem 5rem;
        font-size: 14px;
        text-transform: uppercase;
        background-color: #dd3751;
        border: 0;
        font-weight: 700;
        box-shadow: none;
        border-radius: 4px;
    }

    .pdt-section8 {
        background-color: transparent;
    }

    .pdt-section8 .section8-heading {
        padding: 0 24px;
        margin-bottom: 26px;
        width: fit-content;
        border-bottom: 3px solid #e84c3d;
    }

    .pdt-section8 .section8-heading h1 {
        font-size: 14px;
        font-weight: 600;
        color: #444;
        text-transform: uppercase;
    }

    .pdt-section8 .product-block {
        position: relative;
        overflow: hidden;
        background-color: #fff;
        border: solid 1px #eee;
        /* box-shadow: 20px 20px 5px rgb(126 141 162 / 10%); */
        transition: 0.2s all ease;
    }

    /* .pdt-section8 .product-block:hover {
  border: solid 1px #0e5dae;
  position: relative;
  z-index: 9;
} */
    .pdt-section8 .product-details {
        padding: 15px;
        text-align: left;
    }

    .pdt-section8 .product-name8 {
        font-size: 18px;
        font-weight: 600;
        text-transform: capitalize;
    }

    .pdt-section8 .prod_price8 {
        font-size: 16px;
        font-weight: 600;
        color: #222;
        text-align: right;
    }

    .prod_category8 {
        color: #a2a2a2;
        margin-bottom: 0;
        text-transform: capitalize;
        font-size: 14px;
        margin-bottom: 4px;
        font-weight: 300;
    }

    .prod_desc8 {
        color: #222;
    }

    /* Featured Section 8  */

    .featured-section8 {
        background-color: transparent;
        margin-top: 100px;
    }

    .featured-section8 .section8-heading {
        padding: 0 24px;
        margin-bottom: 26px;
        width: fit-content;
        border-bottom: 3px solid #e84c3d;
    }

    .featured-section8 .section8-heading h1 {
        font-size: 14px;
        font-weight: 600;
        color: #444;
        text-transform: uppercase;
    }

    .featured-section8 .product-block {
        position: relative;
        overflow: hidden;
        background-color: #fff;
        border: solid 1px #eee;
        box-shadow: 20px 20px 5px rgb(126 141 162 / 10%);
        transition: 0.2s all ease;
    }

    .featured-section8 .product-block:hover {
        border: solid 1px #0e5dae;
        position: relative;
        z-index: 9;
    }

    .featured-section8 .product-details {
        padding: 15px;
        text-align: left;
    }

    .featured-section8 .product-name8 {
        font-size: 18px;
        font-weight: 600;
        text-transform: capitalize;
    }

    .featured-section8 .prod_price8 {
        font-size: 16px;
        font-weight: 600;
        color: #222;
    }

    .prod_category8 {
        color: #a2a2a2;
        margin-bottom: 0;
        text-transform: capitalize;
        font-size: 14px;
        margin-bottom: 4px;
        font-weight: 300;
    }

    .prod_desc8 {
        color: #222;
    }

    .featured-section8 .btn-shop {
        padding: 1rem 1rem;
        font-size: 14px;
        text-transform: uppercase;
        background-color: #dd3751;
        border: 0;
        font-weight: 600;
        box-shadow: none;
        border-radius: 0;
        width: 100%;
    }

    footer.footer8 .fblock {
        background-color: rgba(0, 0, 0, 0.2);
        padding: 2rem 2rem;
        border-radius: 2rem;
    }

    footer.footer8 {
        padding-bottom: 0;
        font-size: 1rem;
    }

    .footer8 .copyright p {
        margin: 0;
    }

    .footer8 .quick-links li {
        padding: 0.25rem 0;
        float: left;
        width: 44%;
        margin-right: 5%;
        position: relative;
        margin-bottom: 0.8rem;
    }

    .footer8 h5 {
        border-bottom: solid 1px #fff;
        padding-bottom: 0.75rem;
        position: relative;
        margin-bottom: 1.5rem;
    }

    .footer8 h5:before {
        position: absolute;
        bottom: -2px;
        width: 100px;
        height: 3px;
        content: "";
        background-color: #dd3751;
    }

    .footer8 .quick-links li {
        background-color: rgba(255, 255, 255, 0.5);
        padding: 0.2rem 1rem;
        border-radius: 0.25rem;
    }

    .copy-section {
        background-color: rgba(0, 0, 0, 0.5);
    }

    #right-pic {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 555px;
    }

    @media (max-width: 1200px) {
        /* -------------------------------------------------------------------------- */

        /* 1. Header
/* ---------------------------------------------*---------------------------- */
        header .header-content .header-icon {
            display: none;
        }

        header .header-top-bar ul.top-bar-right li {
            font-size: 0.85rem;
        }

        footer .contact-widget .info {
            width: 265px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    }

    @media (max-width: 992px) {
        .banner {
            padding: 3rem 0;
        }

        .primary-navigation {
            margin: 0;
        }

        .primary-navigation {
            margin-left: -1rem;
            margin-right: -1rem;
        }

        .container {
            max-width: 100%;
        }

        /* -------------------------------------------------------------------------- */

        /* 1. Header
/* ---------------------------------------------*---------------------------- */
        header .logo {
            top: 0;
            position: relative;
            left: 1rem;
        }

        header .logo-icon {
            font-size: 20px;
            width: 50px;
            height: 50px;
            padding: 13px 0 0 0;
        }

        header a.navbar-brand {
            font-size: 2rem;
            align-items: center;
        }

        #toggle {
            width: 1.75rem;
            height: 1.75rem;
            padding: 0.15rem 0 0;
            background: no-repeat;
            box-shadow: none;
            outline: inherit;
        }

        .primary-navigation .navbar {
            margin: 0 auto;
        }

        #toggle div {
            width: 100%;
            height: 0.125rem;
            background: #000;
            margin: 0.313rem auto;
            border-radius: 5px;
            transition: all 0.3s;
            backface-visibility: hidden;
        }

        #toggle.on .one {
            transform: rotate(45deg) translate(2px, 2px);
        }

        #toggle.on .two {
            opacity: 0;
        }

        #toggle.on .three {
            transform: rotate(-45deg) translate(0.438rem, -0.5rem);
        }

        header a.navbar-brand {
            width: 280px;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 1.1rem !important;
            font-weight: 700;
        }

        h3.title:before {
            display: none;
        }

        .about-section-block {
            margin-top: 5rem;
        }

        .banner-pic {
            padding-bottom: 2rem;
        }

        .about-section .block {
            padding-bottom: 2rem;
            border-top: solid 1px #e9e9e9;
            padding-top: 2rem;
        }

        .banner .head-title h1 {
            font-size: 3rem;
        }

        .banner {
            min-height: 500px;
        }

        .navbar-toggler {
            display: block;
        }

        .primary-navigation .navbar-nav.me-auto .nav-link:first-child {
            padding-left: 2rem;
        }

        .about-section2 .about-section {
            padding-bottom: 0;
        }

        #related_prods h2 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .navbar-section3 header .navbar .navbar-nav .nav-item {
            padding-left: 0;
        }
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .ml-4 {
        margin-left: 1.5rem !important;
    }

    label {
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    @media (max-width: 1200px) {
        .navbar-toggler:focus {
            box-shadow: none !important;
        }

        .menu-icon {
            width: 24px;
            position: relative;
            height: 18px;
            top: 2px;
            display: block;
        }

        .menu-icon span {
            background-color: #000;
            height: 2px;
            display: block;
            position: absolute;
            width: 100%;
            top: 50%;
            margin-top: -1px;
            left: 0;
        }

        .menu-icon:before {
            position: absolute;
            height: 2px;
            background-color: #000;
            content: "";
            left: 0;
            top: 0px;
            width: 100%;
        }

        .menu-icon:after {
            position: absolute;
            height: 2px;
            background-color: #000;
            content: "";
            left: 0;
            bottom: 0px;
            width: 100%;
        }
    }

    @media (max-width: 1200px) {
        .navbar-nav1 {
            padding-left: 1rem;
            font-size: 1rem;
        }

        .cart_bag:before {
            position: absolute;
            content: "";
            width: 0;
            height: 0;
            border-bottom: 10px solid #ffffff;
            border-top: 10px solid transparent;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            right: 45px;
            top: -20px;
            left: auto;
        }

        .navbar-section1 .cart_bag {
            right: 0;
            top: 80px;
        }
    }

    @media (max-width: 991px) {
        .about-section2 .banner .head-title h1 {
            font-size: 2.5rem;
            text-transform: uppercase;
            font-weight: 700;
            line-height: 1.1;
            margin: 0;
            color: #fff;
        }

        .navbar-nav2 .cart-nav {
            padding: 1rem 0;
            width: 100%;
            text-align: center;
        }

        .cart_bag:before {
            right: 50%;
            margin-left: -10px;
        }

        .about-section2 .banner {
            min-height: 450px;
        }

        .about-section2 .about-section-block {
            padding: 0rem 2rem 0 2rem;
        }

        .about-section2 .about-section h3 {
            font-size: 1rem;
        }

        .about-section8 .about-section .block .info {
            padding: 2rem;
        }

        .banner-section4 .banner {
            margin-top: 0;
        }

        .banner-section1 .banner .head-title h1,
        .banner-section2 .banner .head-title h1,
        .banner-section3 .banner .head-title h1,
        .banner-section4 .banner .head-title h1,
        .banner-section5 .banner .head-title h1,
        .banner-section6 .banner .head-title h1,
        .banner-section7 .banner .head-title h1,
        .banner-section8 .banner .head-title h1 {
            font-size: 2rem;
        }

        .banner-section1 .banner .head-title {
            padding: 2rem 0;
            text-align: center;
        }

        .banner-section1 .banner .head-title p {
            padding: 0.5rem 1rem 1rem 1rem;
            font-size: 1rem;
        }

        .banner-section3 .header-bottom {
            text-align: center;
            padding: 1rem 0;
        }

        .banner-section3 .header-bottom p {
            padding: 5px;
        }

        .banner-section3 .banner {
            margin: 0;
        }

        .banner-section3 .header-bottom {
            margin-bottom: 0;
        }

        .banner-section3 .banner .head-title {
            padding-left: 1rem;
        }

        .pdt-section3 .product-details {
            padding: 1rem;
        }

        .navbar-section3 header .navbar .navbar-nav .nav-link {
            padding: 1rem;
        }

        .banner-section3 .banner {
            min-height: 400px;
        }
    }

    .fsecton1 h5 {
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .fsecton1 p {
        font-size: 0.85rem;
        margin: 0;
        color: #777;
    }

    .pdt-section1 h3 {
        font-size: 25px;
    }

    .call-us .call-txt {
        line-height: 1.1;
    }

    .call-us .ct {
        color: #0088cc;
        padding-bottom: 0.1rem;
        display: inline-block;
    }

    .call-us .pht {
        color: #444;
        font-weight: 700;
        font-size: 1.25rem;
    }

    .call-us .pht a {
        color: #444;
        transition: all 0.3s ease;
    }

    .call-us .pht a:hover {
        color: #0088cc;
    }

    @media (max-width: 1599px) {
        .banner-section3 .banner {
            margin-left: 60px;
            margin-right: 60px;
        }

        .banner-section3 .banner .head-title {
            padding-left: 4rem;
        }
    }

    @media (max-width: 1399px) {
        .pdt-section1 .prod_img1 {
            width: 204px;
        }
    }

    @media (max-width: 1200px) {
        .pdt-section1 .prod_img1 {
            width: 168px;
        }
    }

    @media (max-width: 991px) {
        .pdt-section1 .prod_img1 {
            width: auto;
        }

        .banner-section1 .banner .head-title {
            max-width: none;
            float: none;
        }

        .banner-section1 .banner {
            height: auto;
        }

        #right-pic {
            min-height: 100px;
        }

        .banner-section3 .banner {
            margin-left: 0;
            margin-right: 0;
        }
    }

    /* Template 6 Responsiveness */
    @media (max-width: 991px) {
        .banner-section6 .head-title {
            text-align: center;
        }

        .banner-section6 .head-title h1 {
            font-size: 18px !important;
        }

        .banner-section6 .head-title p {
            font-size: 14px !important;
        }

        .about-section6 .height-auto {
            height: auto !important;
            text-align: center;
        }

        .about-section6 h2 {
            font-size: 18px;
        }

        .about-section6 p {
            font-size: 14px;
        }

        .about-section6 .about-data {
            padding: 50px 30px !important;
        }

        .about-section6 .about-animation-img img {
            width: 30%;
        }

        .about-section6 .left-col {
            height: 200px !important;
        }

        .box-section6 h3 {
            font-size: 18px;
        }

        .box-section6 p {
            font-size: 14px;
        }

        .navbar-section6 .header-top-bar .top-left {
            display: none !important;
        }

        .navbar-section6 .top-head {
            display: none !important;
        }
    }

    @media (min-width: 991px) {
        .navbar-section6 .alooo {
            display: none !important;
        }

        .navbar-section6 .alooo2 {
            width: 100% !important;
        }
    }

    /* -------------------------------------------------------------------------- */
    /* -------------------------------------------------------------------------- */
    /* ***************** Website 9 **********************************************
/* ---------------------------------------------*---------------------------- */
    /* ---------------------------------------------*---------------------------- */

    /* ===================================== */
    /*             Nav Bar Section 9         */
    /* ===================================== */

    .navbar-section9 {
        box-shadow: 0 0 12px 1px rgba(0, 0, 0, 0.2);
    }

    .navbar-section9 .header-top-bar {
        height: 45px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 12px;
        font-weight: 400;
        display: flex !important;
        align-items: center !important;
    }

    .navbar-section9 .top-head {
        height: 135px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .navbar-section9 .max-wid {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        height: 60px;
        display: flex;
        align-items: center;
    }

    .navbar-section9 .primary-navigation .navbar-nav a.nav-link:before {
        position: absolute;
        content: "";
        width: 0;
        height: 1px;
        left: 0;
        right: 0;
        margin: auto;
        bottom: -2px;
        background-color: #fff;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    .navbar-section9 .primary-navigation .navbar-nav a.nav-link.nav-active-color:before {
        width: 35px;
    }

    .navbar-section9 .primary-navigation .navbar-nav a.nav-link:hover:before {
        width: 35px;
    }

    .navbar-section9 .header-top-bar ul.top-bar-right li {
        position: relative;
    }

    .navbar-section9 header a.navbar-brand {
        font-size: 36px !important;
        line-height: 36px;
        font-weight: 500;
        padding: 0;
        margin: 0;
    }

    .navbar-section9 .primary-navigation .navbar-nav .nav-link {
        padding: 0;
        font-size: 14px;
        line-height: 24px;
        font-weight: 600;
        transition: all 0.3s;
        text-transform: uppercase;
        margin: 0 0.25rem;
        position: relative;
    }

    .navbar-section9 .primary-navigation {
        position: relative;
        z-index: 9;
    }

    .navbar-section9 .cart_link {
        padding: 10px;
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 3px;
    }

    .navbar-section9 .cart_link i.bucket {
        border-right: 1px solid rgba(255, 255, 255, 0.1);
        padding-right: 12px;
        margin-right: 12px;
    }

    .navbar-section9 .cart_link i.arrow {
        padding: 0 8px;
    }

    .navbar-section9 .cart_amt {
        font-size: 14px;
        line-height: 21px;
        font-weight: 500;
    }

    .navbar-section9 .cart_link .btn.btn-update {
        color: #fff;
        background-color: var(--about-bg);
        border: 0;
    }

    @media (max-width: 991px) {
        .navbar-section9 .alooo2 {
            justify-content: end !important;
        }

        .navbar-section9 #toggle div {
            background-color: #fff !important;
        }

        .navbar-section9 .mob-men {
            width: 100%;
            position: absolute;
            background: var(--about-bg);
            left: 0;
            right: 0;
            top: 22%;
            z-index: 100;
            padding: 30px 10px;
        }

        .navbar-section9 .nav-item {
            padding: 10px 0 !important;
        }

        .navbar-section9 .nav-link {
            padding: 0 !important;
        }

        .navbar-section9 #toggle[aria-expanded="false"]+.mob-men {
            display: none;
        }
    }

    /* ===================================== */
    /*              Banner Section 9         */
    /* ===================================== */

    .banner-section9 .banner {
        overflow: hidden;
        background-repeat: repeat;
        background-color: #999;
        background-image: var(--hero-bg);
        position: relative;
        padding: 0;
        height: 530px;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
    }

    .banner-section9 .banner .head-title {
        max-width: 800px;
        float: left;
        position: relative;
        z-index: 9;
    }

    .banner-section9 .banner .head-title h1 {
        font-size: 4rem;
        font-weight: 700;
        line-height: 1.1;
        margin: 0;
    }

    .banner-section9 .banner .head-title p {
        padding: 0 7rem 0 0;
        font-size: 18px;
        font-weight: 400;
        color: #666;
        margin-top: 11px;
    }

    .banner-section9 .banner .btn.btn-primary {
        font-size: 13px;
        font-weight: 500;
        text-transform: uppercase;
        border-radius: 3px !important;
        padding: 12px 35px;
        box-shadow: none;
        border: solid 2px #333333;
        transition: 0.3s all ease-in;
    }

    .banner-section9 #right-pic2 {
        position: relative;
    }

    .banner-section9 .rimg {
        width: 577px;
        height: 430px;
        object-fit: cover;
    }

    .banner-section9 .images img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    @media (max-width: 991px) {
        .banner-section9 .rimg {
            margin-top: 30px;
            width: 100%;
            height: auto;
        }

        .banner-section9 .banner .head-title h1 {
            font-size: 2rem;
        }
    }

    /* ===================================== */
    /*              Product Section 9          */
    /* ===================================== */

    .pdt-section9 {
        margin-top: 60px;
    }

    .pdt-section9 .heading-wrapper {
        text-align: center;
        display: flex;
        justify-content: center;
        margin-bottom: 60px;
        position: relative;
        z-index: 1;
    }

    .pdt-section9 .heading-container {
        background-color: #fff;
        padding: 0 20px;
    }

    .pdt-section9 .heading-wrapper:before {
        border-bottom: 1px solid #ebebeb;
        content: "";
        top: 50%;
        left: 0;
        right: 0;
        position: absolute;
        z-index: -1;
    }

    .pdt-section9 h3 {
        font-size: 18px;
        font-weight: 500;
        line-height: 46px;
        width: fit-content;
        padding: 0 34px !important;
        color: #242424 !important;
        border: 2px solid #ebebeb !important;
        border-radius: 3px !important;
    }

    .pdt-section9 .product-details {
        padding: 15px;
        text-align: center;
        background: #fff;
        width: 100%;
        position: absolute;
        z-index: 10;
        transition: all 0.4s ease-out;
        -webkit-transition: all 0.4s ease-out;
        -moz-transition: all 0.4s ease-out;
        -ms-transition: all 0.4s ease-out;
        -o-transition: all 0.4s ease-out;
    }

    .pdt-section9 .product-block:hover .product-details {
        box-shadow: 0 18px 26px rgba(0, 0, 0, 0.28);
    }

    .pdt-section9 .prod_category9 {
        font-size: 12px;
        font-weight: 400;
        line-height: 18px;
        color: #a4a4a4;
        margin-bottom: 10px;
    }

    .pdt-section9 .product-name9 {
        margin-bottom: 10px;
        font-size: 14px;
        line-height: 19px;
        font-weight: 400;
        text-transform: capitalize;
        color: #000;
    }

    .pdt-section9 .prod_price9 {
        font-size: 14px;
        line-height: 22px;
        font-weight: 400;
        color: #a4a4a4;
    }

    .pdt-section9 .product-block {
        transition: all 0.4s ease-out;
        -webkit-transition: all 0.4s ease-out;
        -moz-transition: all 0.4s ease-out;
        -ms-transition: all 0.4s ease-out;
        -o-transition: all 0.4s ease-out;
        background: #fff;
        position: relative;
        z-index: 1;
        margin-bottom: 150px;
    }

    .pdt-section9 .product-block:hover {
        box-shadow: 0 18px 26px rgba(0, 0, 0, 0.28);
        z-index: 100;
    }

    .pdt-section9 .btn-wrapper a {
        font-size: 12px;
        font-weight: 500;
        line-height: 35px;
        text-shadow: none;
        text-transform: uppercase;
        text-align: center;
        height: 35px;
        border: 0;
        border-radius: 3px;
        box-shadow: none;
        color: #363f4d;
        display: inline-block;
        padding: 0 20px;
        -webkit-transition: all 0.4s ease-out;
        -moz-transition: all 0.4s ease-out;
        -ms-transition: all 0.4s ease-out;
        -o-transition: all 0.4s ease-out;
    }

    .pdt-section9 .shop-btn {
        padding: 15px 10px;
        margin: -70px -15px -15px;
        height: 70px;
        opacity: 0;
        -webkit-opacity: 0;
        -moz-opacity: 0;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
    }

    .pdt-section9 .product-block:hover .shop-btn {
        margin: -15px;
        opacity: 1;
        -webkit-opacity: 1;
        -moz-opacity: 1;
    }

    /* ===================================== */
    /*              About Section 9          */
    /* ===================================== */

    .about-section9 {
        background-image: url(../../img/about.png);
        background-size: cover;
        background-position: center;
        height: 500px;
        display: flex;
        align-items: center;
        position: relative;
        z-index: 1;
    }

    .about-section9::before {
        position: absolute;
        content: "";
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .about-section9 h2 {
        font-size: 48px;
        line-height: 1;
        font-weight: 300;
        text-transform: capitalize;
        margin-bottom: 30px;
    }

    .about-section9 p {
        max-width: 600px;
        font-size: 18px;
        line-height: 24px;
        font-weight: 300;
        margin-bottom: 16px;
    }

    .about-section9 .btn-primary {
        font-size: 18px;
        line-height: 50px;
        font-weight: 500;
        height: 50px;
        padding: 0 30px;
        text-transform: uppercase;
    }

    @media (min-width: 768px) {
        .w-md-100 {
            width: 100% !important;
        }
    }

    /* -------------------------------------------------------------------------- */
    /* -------------------------------------------------------------------------- */
    /* ***************** Website 10 **********************************************
/* ---------------------------------------------*---------------------------- */
    /* ---------------------------------------------*---------------------------- */

    /* ===================================== */
    /*            Nav Bar Section 10         */
    /* ===================================== */

    .navbar-section10 header {
        box-shadow: 0 0 5px 5px rgb(0 0 0 / 10%);
        position: relative;
    }

    /* Top Bar */
    .navbar-section10 .topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 42.5px;
        text-transform: capitalize;
        font-size: 14px;
        line-height: 19px;
        font-weight: 400;
        border-top: 3px solid var(--about-bg);
    }

    .navbar-section10 .list-inline-item {
        height: 100%;
        padding: 10px 25px;
        transition: all 0.3s ease-out;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
    }

    .navbar-section10 .list-inline-item:hover {
        background-color: #A47E3B !important;
    }

    .navbar-section10 .list-inline-item:hover a {
        color: #fff !important;
    }

    .navbar-section10 .topbar-cart {
        background-color: #A47E3B;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 10px 20px;
    }

    .navbar-section10 .cart_amt {
        margin-left: 5px;
        margin-right: 0;
        position: relative;
        font-weight: 400;
    }

    .navbar-section10 .btn.btn-update {
        background-color: var(--about-bg) !important;
        color: #fff !important;
        border: unset !important;
    }

    /* Main Nav */
    .navbar-section10 nav.navbar {
        height: 129px;
        display: flex;
        align-items: center;
    }

    .navbar-section10 a.navbar-brand {
        padding: 1rem 0;
        display: inline-block;
        color: #111;
        font-weight: 700;
    }

    .navbar-section10 header .navbar .navbar-nav .nav-link {
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.3px;
        line-height: auto;
        text-transform: uppercase;
        position: relative;
        padding: 28px;
        transition: all 0.3s ease;
    }

    @media (max-width: 768px) {
        .navbar-section10 .list-inline-item {
            padding: 10px !important;
        }

        .navbar-section10 .contact-head {
            padding: 0px !important;
        }

        .navbar-section10 nav.navbar {
            height: 100px;
        }

        .navbar-section10 #navbarsExample03 {
            background: var(--about-bg);
            position: absolute;
            width: 100%;
            text-align: center;
            left: 0;
            right: 0;
            margin: auto;
            top: 100px;
            z-index: 99999999;
        }

        .navbar-section10 .nav-text-color {
            color: #fff !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.039);
        }
    }

    /* ===================================== */
    /*             Banner Section 10         */
    /* ===================================== */

    .banner-section10 {
        min-height: 80vh;
    }

    .banner-section10 .bg-slider {
        z-index: 777;
        position: relative;
        width: 100%;
        min-height: 80vh;
    }

    .banner-section10 .bg-slider .swiper-slide {
        position: relative;
        width: 100%;
        height: 80vh;
    }

    .banner-section10 .bg-slider .swiper-slide::before {
        position: absolute;
        content: "";
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.158);
    }

    .banner-section10 .bg-slider .swiper-slide img {
        width: 100%;
        height: 80vh;
        object-fit: cover;
        background-position: center;
        background-size: cover;
        pointer-events: none;
    }

    .banner-section10 .swiper-slide .text-content {
        position: absolute;
        top: 25%;
        right: 30%;
        transition: 0.3s ease;
    }

    .banner-section10 .title {
        font-size: 65px;
        line-height: 68px;
        font-weight: 700;
        margin-bottom: 44px;
        transform: translateY(-50px);
        opacity: 0;
        text-transform: uppercase;
    }

    .banner-section10 .swiper-slide-active .text-content .title {
        transform: translateY(0);
        opacity: 1;
        transition: 1s ease;
        transition-delay: 0.3s;
        transition-property: transform, opacity;
    }

    .banner-section10 p.slogan {
        font-size: 27px;
        letter-spacing: 0.81px;
        font-weight: 400;
        transform: translateX(-80px);
        opacity: 0;
        margin-bottom: 26px;
    }

    .banner-section10 p.tagline {
        font-size: 16px;
        line-height: 16px;
        letter-spacing: 1.6px;
        font-weight: 400;
        transform: translateX(-80px);
        opacity: 0;
    }

    .banner-section10 .swiper-slide-active .text-content p {
        transform: translateX(0);
        opacity: 1;
        transition: 1s ease;
        transition-delay: 0.3s;
        transition-property: transform, opacity;
    }

    .banner-section10 .btn-group div {
        padding: 13px 30px;
        margin-top: 39px;
        font-size: 12px;
        line-height: 1;
        letter-spacing: 0.96px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .banner-section10 .btn1 {
        border: 2px solid #141a23;
        background-color: #253344;
        opacity: 0;
        transform: translateY(80px);
    }

    .banner-section10 .btn2 {
        border: 2px solid #fff;
        background-color: transparent;
        margin-left: 16px;
        opacity: 0;
        transform: translateY(80px);
    }

    .banner-section10 .btn-group a {
        color: #fff;
    }

    .banner-section10 .swiper-slide-active .btn1 {
        transform: translateY(0);
        opacity: 1;
        transition: 1s ease;
        transition-delay: 0.3s;
        transition-property: transform, opacity;
    }

    .banner-section10 .swiper-slide-active .btn2 {
        transform: translateY(0);
        opacity: 1;
        transition: 1s ease;
        transition-delay: 0.5s;
        transition-property: transform, opacity;
    }

    .banner-section10 .dark-layer:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 80vh;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.1);
    }

    .banner-section10 .bg-slider-thumbs {
        z-index: 777;
        position: absolute;
        bottom: 7em;
        left: 50%;
        transform: translateX(-50%);
        transition: 0.3s ease;
    }

    .banner-section10 .thumbs-container {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        padding: 10px 3px;
        border-radius: 10px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        border-right: 1px solid rgba(255, 255, 255, 0.1);
    }

    .banner-section10 .thumbs-container img {
        width: 50px;
        height: 35px;
        margin: 0 5px;
        border-radius: 5px;
        cursor: pointer;
    }

    .banner-section10 .navigation-btn {
        border: 2px solid #fff;
        padding: 12px 24px;
        color: #fff;
        transition: all 0.3s ease;
    }

    .banner-section10 .navigation-btn::after {
        font-size: 10px;
        font-weight: 900;
        line-height: 1;
        padding: 0;
        margin: 0;
    }

    .banner-section10 .navigation-btn:hover {
        background-color: var(--about-bg);
        border-color: var(--about-bg);
    }

    /*======= Media queries (max-width: 1100px) =======*/
    @media screen and (max-width: 1100px) {
        .banner-section10 .bg-slider-thumbs {
            bottom: 3em;
        }
    }

    /*======= Media queries (max-width: 785px) =======*/
    @media screen and (max-width: 785px) {
        .banner-section10 .swiper-slide .text-content {
            right: 0;
            margin: 0 30px;
        }

        .banner-section10 .swiper-slide .text-content .title {
            font-size: 18px;
            line-height: 1.2;
            margin-bottom: 15px;
        }

        .banner-section10 .swiper-slide .text-content p.slogan {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .banner-section10 .swiper-slide .text-content p.tagline {
            font-size: 12px;
        }

        .banner-section10 .btn-group div {
            margin-top: 100px;
            padding: 8px 15px;
        }

        .banner-section10 .navigation-btn {
            padding: 8px 15px;
        }

        .banner-section10 .navigation-btn::after {
            font-size: 7px;
        }
    }

    /* ===================================== */
    /*              About Section 10         */
    /* ===================================== */

    .about-section10 {
        margin-top: 70px;
    }

    .about-section10 .about-wrapper {
        border: 3px solid #e0e0e0;
        padding: 40px 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        flex-direction: column;
    }

    .about-section10 .about-heading {
        font-size: 30px;
        line-height: 1.2;
        font-weight: 700;
        color: #fff;
        background-color: var(--about-bg);
        padding: 8px 21px;
    }

    .about-section10 .about-text {
        font-size: 18px;
        font-weight: 400;
        color: #333538;
        max-width: 900px;
    }

    /* ===================================== */
    /*            Service Section 10         */
    /* ===================================== */

    .service-section10 {
        margin-top: 70px;
    }

    .service-section10 .row>div {
        padding: 15px;
    }

    .service-section10 .card-wrapper {
        background-color: #f7f8f8;
        padding: 15px 30px;
        height: 100%;
    }

    .service-section10 .icon-wrap {
        border-radius: 100%;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 60px;
        height: 60px;
        margin-bottom: 7px;
    }

    .service-section10 i {
        font-size: 25px;
        color: var(--about-bg);
    }

    .service-section10 h3 {
        font-size: 20px;
        letter-spacing: 0.4px;
        font-weight: 400;
        color: #333333;
        margin-left: 15px;
    }

    .service-section10 p {
        font-size: 14px;
        line-height: 19px;
        letter-spacing: 0.35px;
        font-weight: 400;
        color: #777777;
        font-style: italic;
        margin-top: 10px;
        margin-left: 15px;
    }

    /* ===================================== */
    /*            Product Section 10         */
    /* ===================================== */
    html {
        scroll-behavior: smooth;
    }

    .pdt-section10 {
        margin-top: 70px;
        padding: 0;
    }

    .pdt-section10 h3 {
        font-size: 23px;
        line-height: normal;
        font-weight: 400;
        letter-spacing: 1.15px;
        color: #3c3c3c;
        margin-bottom: 8px !important;
    }

    .pdt-section10 h3:before {
        margin-right: 2.1rem;
        content: "/";
        color: #e1e1e1;
        font-weight: 300;
    }

    .pdt-section10 h3:after {
        margin-left: 2.1rem;
        content: "/";
        color: #e1e1e1;
        font-weight: 300;
    }

    .pdt-section10 .product-block {
        position: relative;
        overflow: hidden;
        background-color: #fff;
        padding: 0 0 1rem 0;
        text-align: left;
        transition: all 0.4s;
        margin-bottom: 1rem;
    }

    .pdt-section10 .product-details {
        background: #fff;
        padding-top: 24px;
    }

    .pdt-section10 .pdt-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        transition: all 0.4s ease 0s;
    }

    .pdt-section10 .prod_img10 {
        transition: all 0.4s ease 0s;
    }

    .pdt-section10 .pdtImageWrapper:hover .pdt-overlay {
        background-color: unset !important;
    }

    .pdt-section10 .btn_shop10 {
        z-index: 11;
        bottom: 20px;
        top: 0;
        margin: auto;
        margin-left: 10px;
        width: 36px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        visibility: hidden;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.4s ease;
    }

    .pdt-section10 .product-block:hover .btn_shop10 {
        opacity: 1;
        visibility: visible;
        margin-left: 20px;
    }

    .pdt-section10 .btn_shop10 i {
        font-size: 15px;
    }

    .pdt-section10 .prod_category10 {
        font-size: 12px;
        line-height: normal;
        text-transform: uppercase;
        color: #acacac;
        letter-spacing: 2.052px;
        font-weight: 700;
        margin: 0;
        padding: 0;
        margin-bottom: 12px;
    }

    .pdt-section10 .product-title {
        font-size: 14px;
        line-height: 18px;
        font-weight: 400;
        letter-spacing: normal;
        text-transform: capitalize;
        color: #444;
        margin: 0;
        padding: 0;
        margin-bottom: 9px;
    }

    .pdt-section10 .prod_price10 {
        font-size: 14px;
        line-height: normal;
        letter-spacing: normal;
        font-weight: 700;
        color: var(--about-bg);
    }

    /* ===================================== */
    /*           Featured Section 10         */
    /* ===================================== */
    .featured-section10 {
        height: 600px;
    }

    .featured-section10 .product-block {
        border: 1px solid #ececec;
        padding: 15px !important;
    }

    .featured-section10 .btn_shop10 {
        z-index: unset;
        bottom: unset;
        top: unset;
        margin: unset;
        margin-left: unset;
        margin-left: unset;
        width: unset;
        height: unset;
        display: unset;
        justify-content: unset;
        align-items: unset;
        position: unset;
        visibility: unset;
        opacity: unset;
        transform: unset;
        transition: unset;
    }

    .featured-section10 .featured-btn-grp span {
        padding: 0 5px;
        border: 2px solid #263446;
        text-align: center;
        flex: 0 0 47.845%;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .featured-section10 .featured-btn-grp a {
        font-size: 12px;
        line-height: 12px;
        letter-spacing: 0.96px;
        font-weight: 700;
        color: #263446;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .featured-section10 .ft-btn1 {
        background-color: var(--about-bg) !important;
        border-color: var(--about-bg) !important;
    }

    .featured-section10 .ft-btn1 a {
        color: #fff !important;
        background-color: transparent !important;
    }

    .featured-section10 .product-block:hover .btn_shop10 {
        margin: 0 !important;
    }

    .featured-section10 .ft-btn2:hover {
        background-color: var(--about-bg) !important;
        border-color: var(--about-bg) !important;
    }

    .featured-section10 .ft-btn2:hover a {
        color: #fff !important;
        background-color: transparent !important;
    }

    .featured-section10 .product-block,
    .featured-section10 .product-block .product-details {
        transition: all 0.3s ease;
    }

    .featured-section10 .product-block:hover,
    .featured-section10 .product-block:hover .product-details {
        background-color: #f7f7f7;
    }

    .featured-section10 .product-block:hover {
        box-shadow: 0 0 0.6rem rgba(0, 0, 0, 0.1);
    }

    .featured-section10 .featured-btn-grp {
        position: relative;
        max-height: 0;
        transition: max-height 0.3s, opacity 0.3s;
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        will-change: transform;
    }

    .featured-section10 .product-block:hover .featured-btn-grp {
        max-height: 100%;
        opacity: 1;
        visibility: visible;
        transition: all 0.35s;
    }

    .featured-section10 .ft-nav {
        border: 2px solid #e6e6e6;
        margin: 0;
        padding: 2px 12px;
        color: #999999;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 16px;
        font-weight: 500;
        margin-top: 10px;
    }

    .featured-section10 .ft-button-next {
        margin-left: -2px;
    }

    .featured-section10 .ft-nav:hover {
        border-color: var(--about-bg);
        color: #fff;
        background-color: var(--about-bg);
    }

    @media (max-width: 768px) {
        .pdt-section10 h3 {
            font-size: 18px;
        }

        .pdt-section10 h3::before {
            margin-right: 5px;
        }

        .pdt-section10 h3::after {
            margin-left: 5px;
        }
    }

    input.error,
    .error {
        box-shadow: 0 0 0.125rem 0 red;
        border: 0.0625rem solid red !important;
    }

    .material-icons {
        font-family: 'Material Icons';
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        line-height: 1;
        letter-spacing: normal;
        text-transform: none;
        display: inline-block;
        white-space: nowrap;
        word-wrap: normal;
        direction: ltr;
        -webkit-font-feature-settings: 'liga';
        -webkit-font-smoothing: antialiased;
    }




    .btn-cart {
        background-color: #007bff;
        border-color: #007bff;
        padding: 15px;
        width: 100%;
        max-width: 225px;
        border-radius: 0;
        font-weight: bold;
        font-size: 18px;
        text-transform: uppercase;
        border: 0;
        margin-top: 1rem
    }



    .pdt-image img {
        border: 1px solid #e9e9e9;
        padding: 10px;
    }


    .breadcrumb-col p {
        color: #666666;
        text-transform: uppercase;
        font-size: 14px;
    }

    .breadcrumb-col p a {
        color: #666666;
        text-transform: uppercase;
        font-size: 14px;
        text-decoration: none;
    }

    .title-col h2 {
        font-size: 32px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 20px;
        line-height: 1;
    }

    .price-col p {
        font-size: 32px;
        font-weight: bold;
        line-height: 1;
    }

    .qty-col {
        max-width: 200px;
        background: #ffffff;
        display: flex;
        margin: auto;
        padding: 0;
    }


    .span_counter {
        background: #f9f9f9;
        height: 35px;
        font-size: 20px;
        line-height: 1.6;
        font-weight: bold;
        padding: 0 15px;
        cursor: pointer;
        border: 1px solid #e1e1e1;
    }

    .selectbox,
    .selectbox:hover,
    .selectbox:active {
        border: 1px solid #e1e1e1;
        border-radius: 0;
        height: 50px;
        text-align: center;
        max-width: 100%;
        font-size: 16px;
        font-weight: 100;
        outline: none;
        box-shadow: none;
    }

    input.qty {
        border: 1px solid #e1e1e1;
        border-radius: 0;
        height: 35px;
        text-align: center;
        max-width: 100px;
        font-size: 20px;
        font-weight: bold;
    }

    .wishlist-col p a {
        color: #000;
        text-transform: uppercase;
        text-decoration: none;
    }

    .category-col p span {
        font-weight: bold;
    }

    .category-col p a {
        color: #000;
        text-decoration: none;
        font-style: italic;
    }


    .nav_tabs li {
        padding: 10px 40px;
        border-top: 3px solid #d9d9d9;
        margin-top: -3px;

    }

    .nav_tabs li.active {
        border-top: 3px solid #007bff;
        margin-top: -3px;
    }

    .nav_tabs li a {
        color: #000;
        text-decoration: none;
    }

    .nav-tabs {
        border-top: 1px solid #dee2e6;
        border-bottom: none !important;
    }

    .tab-content {
        padding: 30px;
    }


    .products_desc {
        margin-bottom: 50px;
    }

    .pdt-col h2 {
        font-size: 25px;
        font-weight: bold;
    }

    .table-cart {
        width: 100%;
        max-width: 100%;
    }

    .cart-add input.qty {
        border: 1px solid #e1e1e1;
        border-radius: 0;
        height: 35px;
        text-align: center;
        max-width: 70px;
        font-size: 15px;
        font-weight: 100;
    }

    .cart-add .span_counter {
        background: #f9f9f9;
        height: 35px;
        font-size: 21px;
        line-height: 1.6;
        font-weight: bold;
        padding: 0 5px;
        cursor: pointer;
        border: 1px solid #e1e1e1;
    }

    .table-cart p {
        margin-bottom: 0;
    }

    .table-cart thead tr td p {
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
    }

    .table td,
    .table th {
        text-align: center;
        vertical-align: middle;
        border-top: none !important;
        border-bottom: 1px solid #dee2e6;
    }

    .table-cart thead {
        border-top: 1px solid #dee2e6;
    }

    .cart-pdt-image {
        max-width: 60px;
        border: 1px solid #e9e9e9;
    }

    .close_button {
        border: 1px solid #999;
        border-radius: 100px;
        font-size: 15px;
        padding: 5px;
        color: #444;
        margin-top: 10px;
        cursor: pointer;
    }

    .cart_empty {
        text-align: center;
        font-size: 16px;
    }

    .btn.btn-continue {
        background-color: transparent;
        border: 2px solid #007bff;
        margin: 10px auto;
        padding: 15px;
        width: 100%;
        max-width: 225px;
        font-weight: bold;
        font-size: 13px;
        text-transform: uppercase;
        color: #007bff;
        margin-right: 20px;
    }

    .btn.btn-update {
        background-color: #007bff;
        border-color: #007bff;
        margin: 10px auto;
        padding: 15px;
        width: 100%;
        max-width: 225px;
        font-weight: bold;
        font-size: 13px;
        text-transform: uppercase;
        color: #fff;
    }

    .btn.btn-checkout {
        background-color: #007bff;
        border-color: #007bff;
        margin: 10px auto;
        padding: 15px;
        width: 100%;
        max-width: 100%;
        border-radius: 0;
        font-weight: bold;
        font-size: 13px;
        text-transform: uppercase;
        color: #fff;
    }

    .cart-button {
        text-align: right;
    }

    .pdt-section {
        padding: 60px 0;
    }

    .sidebar-title-column h2 {
        font-size: 20px;
        text-transform: uppercase;
        font-weight: bold;
        margin-top: 0;
        border-top: 1px solid #e9e9e9;
        padding: 10px 0;
        border-bottom: 1px solid #e9e9e9;
    }

    .sidebar-details-column {
        background: #fff;
    }

    .sidebar-details-column p {
        border-bottom: 1px solid #e9e9e9;
    }

    .sidebar-details-column p:last-child {
        border-bottom: none;
        margin-bottom: 40px;
    }

    .sidebar-details-column p {
        border-bottom: 1px solid #f1f1f1;
        padding: 10px 10px;
        background: #fff;
        margin-bottom: 0;
        clear: both;
        overflow: hidden;
    }

    .TextLeft {
        float: left;
    }

    .TextRight {
        float: right;
    }

    .discount-col {
        color: #f00;
    }

    .total-col {
        font-weight: bold;
    }

    .sidebar-details-column .form-control {
        height: 50px;
        border-radius: 0;
    }

    .cart_link {
        color: #000;
        position: relative
    }

    .cart_amt {
        margin-left: 5px;

    }

    .bag_icon {
        display: inline-block;
        vertical-align: top;
        font-size: 50px;
        position: relative;
    }

    .bag_icon.active {
        color: #f00;
    }

    .cart_link:hover .cart_bag {
        opacity: 1;
        transition: 0.4s ease-in-out;
        z-index: 99;
        visibility: visible;
    }

    .cart_bag {
        background: #fff;
        width: 280px;
        position: absolute;
        height: auto;
        z-index: 99;
        box-shadow: 1px 1px 5px rgb(0 0 0 / 10%);
        border-radius: 5px;
        opacity: 0;
        visibility: hidden;
        transition: 0.4s ease-in-out;
        right: 0px;

    }

    .cart_bag:before {
        position: absolute;
        content: "";
        width: 0;
        height: 0;
        border-bottom: 10px solid #ffffff;
        border-top: 10px solid transparent;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        /* transform: rotate(
-90deg
) translateY(1px); */
        right: 35px;
        top: -20px;
    }

    .minicart_inner {
        padding: 20px;
        height: auto;
    }

    .minicart_inner p {
        color: #000;
        margin-bottom: 0;
        font-size: 12px;
        text-align: left;
    }

    .active .bag_count {
        color: #fff !important;
    }

    .bag_count {
        color: #000;
        font-size: 15px !important;
        opacity: 1;
        position: absolute;
        left: 0;
        right: 0;
        z-index: 999;
        font-family: 'Arimo', sans-serif !important;
        margin: 0 auto;
        text-align: center;
        top: 50%;
        transform: translateY(-50%);
        margin-top: 9px;
    }

    .empty_cart {
        text-align: center;
        font-style: italic;
    }

    .empty_bag .minicart_inner {
        height: auto !important;
    }

    .mini-pdt-image {
        width: 100px;
        border: 1px solid #e9e9e9;
    }

    .minicart_details tr td {
        border-bottom: 1px solid #dee2e6;
        border-top: none !important;
    }

    .minicart_details tr:last-child td {
        border-bottom: none !important;
        border-top: none !important;
    }

    .subtotal_column {
        border-top: 1px solid #d9d9d9;
        border-bottom: 1px solid #d9d9d9;
        padding: 15px 0;
        text-align: center;
    }

    .subtotal_column p {
        font-weight: bold;
        font-size: 17px
    }

    .empty_bag .minicart_table {
        height: auto;
    }

    /*.minicart_table{
  height: 200px;
}
*/
    .minicart_table::-webkit-scrollbar {
        margin-top: 10px;
        width: 2px;
        opacity: 0.2;
    }

    .minicart_table::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px #fff;
    }

    .minicart_table::-webkit-scrollbar-thumb {
        background-color: #fff;
    }

    .cart_bag:before {
        border-bottom: 10px solid #000000;
    }

    .minicart_buttons .btn-continue,
    .minicart_buttons .btn-continue:hover {
        width: 100%;
        max-width: 100%;
        padding: 10px;
        color: #000;
        line-height: 2;
        font-size: 14px !important;
        border: solid 1px #000;
    }

    .minicart_buttons .btn-update,
    .minicart_buttons .btn-update:hover {
        width: 100%;
        max-width: 100%;
        padding: 10px;
        color: #fff;
        line-height: 2;
        font-size: 14px !important;
    }

    #loading-indicator {
        background-color: rgba(0, 0, 0, .5);
        bottom: 0;
        box-sizing: border-box;
        font-size: 1px;
        height: 100%;
        left: 0;
        margin: 0 !important;
        padding: 0 !important;
        position: fixed;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 2147483646;
    }

    #loading-indicator::before {
        background: url(../images/loading.gif) center center no-repeat rgba(0, 0, 0, 0);
        content: "";
        height: 70px;
        margin-left: -35px;
        margin-top: -70px;
        width: 70px;
        z-index: 2;
    }

    #loading-indicator::after {
        background: #fff;
        border-radius: 5px;
        color: #000;
        content: "Processing, one moment please... ";
        font-family: arial;
        font-size: 17px;
        height: 110px;
        line-height: 98px;
        margin-left: -150px;
        margin-top: -75px;
        padding-top: 35px;
        text-align: center;
        width: 300px;
        z-index: 1;
    }

    #loading-indicator::after,
    #loading-indicator::before {
        box-sizing: border-box;
        left: 50%;
        position: absolute;
        top: 50%;
    }

    .popup-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        top: 0;
        z-index: 99;
    }

    .popup-inner {
        position: relative;
        background: #ffffff;
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
        top: 50%;
        transform: translateY(-50%);
        min-height: auto;
        border: 10px solid #fff;
        padding: 20px;
        text-align: center;
    }

    .popup-inner img {
        margin: 0 auto 30px;
    }

    .popup-close {
        font-size: 17px;
        background: #fff;
        padding: 2px 9px;
        color: #000;
        border-radius: 100%;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-weight: 900;
        position: absolute;
        top: -25px;
        right: -25px;
        cursor: pointer;
    }

    .qty-select select.select-qty {
        width: 225px;
        max-width: 100%;
        height: 38px;
        padding: 0 5px;
        font-size: 18px;
        background-color: #f8f7f7;
        border: 1px solid #d4d4d4;
        border-radius: 0px;
        color: #292929;
    }

    select {
        background: url(../images/select-bg-new.png) right center no-repeat #fff;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .product-block>img {
        max-height: 400px;
    }

    @media screen and (max-width:767px) {

        .popup-inner {
            width: 90%;
        }
    }

    img {
        max-width: 100%
    }

    #loading-indicator {
        background-color: rgba(0, 0, 0, .5);
        bottom: 0;
        box-sizing: border-box;
        font-size: 1px;
        height: 100%;
        left: 0;
        margin: 0 !important;
        padding: 0 !important;
        position: fixed;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 2147483646;
    }

    #loading-indicator::before {
        background: rgba(0, 0, 0, 0) url(../images/loading.gif) no-repeat scroll center center;
        box-sizing: border-box;
        content: "";
        height: 70px;
        left: 50%;
        margin-left: -35px;
        margin-top: -70px;
        position: absolute;
        top: 50%;
        width: 70px;
        z-index: 2;
    }

    #error_handler_overlay .error_handler_body ul li {
        list-style: none;
    }

    #loading-indicator::after {
        background: #ffffff none repeat scroll 0 0;
        border-radius: 5px;
        box-sizing: border-box;
        color: #000000;
        content: "Processing...";
        font-family: arial;
        font-size: 17px;
        height: 150px;
        left: 50%;
        line-height: 22px;
        margin-left: -143px;
        margin-top: -75px;
        padding-top: 88px;
        position: absolute;
        text-align: center;
        top: 50%;
        width: 290px;
        z-index: 1;
    }

    a,
    input[type="submit"],
    a:hover,
    input[type="submit"]:hover {
        -webkit-transition: all .2s ease;
        -moz-transition: all .2s ease;
        -ms-transition: all .2s ease;
        -o-transition: all .2s ease;
        transition: all .2s ease;
    }

    a:focus {
        outline: none;
        outline-offset: 0;
    }

    a:hover,
    input[type="submit"]:hover {
        color: #666;
        text-decoration: none;
    }

    :focus {
        outline: none;
    }

    .cartAlart {
        background-color: #10834d;
    }

    .rounded-2 {
        border-radius: 4px;
    }

    .border-left-darkGreen {
        border-left: 8px solid #006636;
    }

    .cartAlart a,
    .cartAlart a:hover {
        padding: 0 10px;
        border-left: 1px solid #fff;
        text-decoration: none;
    }

    .cartAlart a i.fa {
        padding-left: 5px;
        font-size: 14px;
    }

    .addSelectedCart a {
        background-color: #eeeeee;
        padding: 10px 20px;
        text-decoration: none;
        color: #333333;
        font-weight: bold;
    }

    .addSelectedCart a:hover {
        text-decoration: none;
        background-color: #333333;
        color: #eeeeee;
    }

    img.imgThumb {
        width: auto;
        height: auto;
        max-width: 100px;
        max-height: 80px;
        display: block;
        margin: 0;
    }

    th[align="right"],
    td[align="right"] {
        text-align: right;
    }

    .table thead th {
        border-bottom: 2px solid #9f9f9f;
    }

    .dataTable thead,
    .dataTable tfoot,
    .dataTable tbody {
        background-color: #f8f8f8;
        border-top: none;
    }

    .dataTable td,
    .dataTable th {
        padding: 10px 10px;
        border: none;
        vertical-align: middle;
    }

    .delete i {
        color: red;
    }

    .dataTable td:first-child,
    .dataTable th:first-child {
        padding-left: 15px;
    }

    .dataTable td:last-child,
    .dataTable th:last-child {
        padding-right: 15px;
    }

    .quentity {
        max-width: 55px;
        padding: 3px 3px;
        box-sizing: border-box;
        text-align: center;
        background-color: #f1f1f1;
        border: 1px solid #dedede;
    }

    .product-instock {
        color: #218c59;
        font-weight: bold;
    }

    .product-name {
        color: #96588a;
        font-weight: 600;
    }

    .product-price {
        color: #5c5c5c;
    }

    .product-review i.fa {
        color: #cfcfcf;
    }

    .product-review.active i.fa {
        color: #96588a;
    }

    .addTOCart {
        background-color: #333333;
        padding: 5px 15px;
        text-decoration: none;
        color: #eeeeee;
        font-weight: bold;
        margin-right: 5px;
    }

    .addTOCart:hover {
        text-decoration: none;
        background-color: #989898;
        color: #fff;
    }

    .dataTable td select {
        padding: 3px;
        border-radius: 3px;
    }

    table.dataTable {
        border-bottom: 2px solid #9f9f9f;
    }

    textarea {
        width: 100%;
        max-width: 100%;
        height: 80px;
        min-height: 80px;
        max-height: 150px;
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .order-heading {
        background-color: #3d9cd2;
        border-left: 5px solid #3385b3;
    }

    .form-heading {
        font-weight: 400;
        color: #464646;
    }

    .order-form {}

    .order-form select,
    .order-form textarea,
    .order-form input.form-control,
    .order-form input.qun {
        background-color: #f2f2f2;
        border: 0;
        box-shadow: inset 0px 1px 5px #e6e6e6;
        border-radius: 0;
        height: 50px;
    }

    .order-form sup {
        color: #ff0000;
        font-size: 25px;
        top: 00em;
        /*border-bottom: 1px dotted #ff0000;*/
    }

    .order-form input.qun {
        width: 70px;
        text-align: center;
        padding: 2px;
    }

    .order-form table.table {}

    .order-form table.table td,
    .order-form table.table th {
        border-top: none;
    }

    .order-form table.table thead th {
        border-bottom: none;
    }

    .order-form table.table thead,
    .order-form table.table th {
        background-color: #f8f8f8;
    }

    .order-form table.table tbody td {
        background-color: #fdfdfd;
    }

    .order-form table.table tfoot td:last-child {
        background-color: #f8f8f8;
    }

    #final_price {
        background-color: #f8f8f8;
    }

    .remove-icon i.fa,
    .remove-icon i.fa:hover {
        color: #ff0000;
    }

    .payment-header {
        background-color: #f5f5f5;
        border-radius: 5px 5px 0px 0px;
    }

    .payment-header img {
        max-width: 50px;
    }

    .payment-form {
        background-color: #fafafa;
    }

    /*.form-btn {
    background-color: #fafafa;
}*/

    .form-btn input[type="submit"] {
        background-color: #007bff;
        padding: 15px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        margin-right: 5px;
        width: 100%;
        border: none;
        font-size: 20px;
        text-transform: uppercase;
    }

    .form-btn input[type="submit"]:hover {
        background-color: #989898;
        color: #fff;
    }

    @media (max-width: 1200px) {
        .dt-table {
            overflow-x: auto;
        }

        .dt-table table.table {
            min-width: 1170px;
        }
    }

    @media (max-width: 992px) {
        .dt-table {
            overflow-x: auto;
        }

        .dt-table table.table {
            min-width: 992px;
        }
    }

    .disabled {
        pointer-events: none;
        cursor: default;
        background-color: #989898;
    }

    label.agree {
        font-size: 12px;
        text-align: justify;
    }

    .form-btn input[type="submit"],
    .btn-order {
        background-color: #007bff;
        padding: 15px;
        text-decoration: none;
        color: #fff !important;
        font-weight: bold;
        margin-right: 5px;
        width: 100%;
        border: none;
        font-size: 20px;
        text-transform: uppercase;
    }
</style>