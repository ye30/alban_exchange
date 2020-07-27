<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Alban Exchange</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/style.css">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- /Preloader -->

<!-- Header Area Start -->
<header class="header-area">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="conferNav">

                <!-- Logo -->
                <a class="nav-brand" style="color : white" href="/">ГЛАВНАЯ</a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">
                            <li class="{{ request()->is('news*') ? 'active' : ''}}"><a href="{{request()->is('news*') ? '#' : '/news'}}">Новости</a></li>
                            <li class="{{ request()->is('rates*') ? 'active' : ''}}"><a href="{{request()->is('rates*') ? '#' : '/rates'}}">Валюта</a></li>
                            <li class="{{ request()->is('reviews*') ? 'active' : ''}}"><a href="{{request()->is('reviews*') ? '#' : '/reviews'}}">Отзывы</a></li>
                            <li class="{{ request()->is('about*') ? 'active' : ''}}"><a href="{{request()->is('about*') ? '#' : '/about'}}">О компании</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>