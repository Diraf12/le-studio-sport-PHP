<?php $title = "présentation"; ?>
 <?php require_once './header.php'; ?> 

    <!-- barnav -->
    <img class="img-back" src="../images/visuel/header-functional.jpg" alt="#">
    <nav
        class="navbar navbar-expand-lg navbar-light fixed-top   d-flex justify-content-start align-items-center nav-fixed">
        <a class="navbar-brand" href="index.php"><img class="logo-top " src="../images/logo_2.png" alt="#"></a>
        <button class="burger">
            <span class="bar"></span>
        </button>
        <div class="menu d-flex justify-content-around align-items-center w-100">
            <ul class="navbar-nav text-center">
                <li class="nav-item d-inline-block active">
                    <a class="nav-link text-white " href="./404.html">L'ÉQUIPE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./presentation.php">LES ACTIVITÉS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./404.html">NOS OFFRES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./404.html">PLANING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./404.html">LE BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./contact.php">CONTACT</a>
                </li>
            </ul>

            <div class="">
                <a class="nav-link text-white" href="./contact.html"> <i style="font-size:24px "
                        class="fa fa-mobile text-white"> 05 59 47 84 18</i></a>
            </div>

            <ul class="reseau list-unstyled">
                <li class="d-inline-block"><a href="https://www.google.com"> <i class="iconify"
                            data-icon="dashicons:facebook"></i></a></li>
                <li class="d-inline-block pl-3"><a href="https://www.google.com"> <i class="iconify"
                            data-icon="akar-icons:instagram-fill"></i></a></li>
                <li class="d-inline-block pl-3"><a href="https://www.google.com"> <i class="iconify"
                            data-icon="la:tripadvisor"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- fin barnav -->

    <!-- section texte + btn avec slider -->
    <div class="container activ">

        <h1 class="titre-activ text-center mt-5">LE TRAINING FONCTIONNEL</h1>

        <div class="row sport mt-4">
            <div class="activ col">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta,
                    voluptatem consequuntur qui et tempora distinctio consectetur quasi <br><br>
                    possimus totam natus quidem minima magnam doloremque neque, adipisci sed? Quaerat, fugit quasi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta,
                    voluptatem consequuntur qui et tempora distinctio consectetur quasi <br><br>
                    possimus totam natus quidem minima magnam doloremque neque, adipisci sed? Quaerat, fugit quasi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta,
                    voluptatem consequuntur qui et tempora distinctio consectetur quasi
                    possimus totam natus quidem minima magnam doloremque neque, adipisci sed? Quaerat, fugit quasi!
                </p>
                <div class="btn-or d-flex justify-content-around">
                    <a href="./html/404.html" class="btn-activ p-3">VOIR NOS OFFRES ET FORMULES</a>
                    <a href="./html/404.html" class="btn-activ p-3">CONTACT ET RÉSERVATION</a>
                </div>
            </div>



            <div id="carouselExampleIndicators" class="carousel slide col" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./images/img1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/img2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block"> </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/img3.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin -->
    </header>
    <!-- section avec les 4 card -->
    <h1 class="titre text-center p-1">LES ATELIERS PRÉSENTS DANS LE TRAINING FONCTIONNEL</h1>
    <div class="container present p-4">
        <div class="card-deck">

            <div class="card border-0">
                <img src="./images/photo1.jpeg" class="card-img-top" alt="#">
                <div class="card-body">
                    <h6>TRX CORE</h6>
                    <p class="card-text">Ce cours a pour but d'améliorer votre
                        force fonctionalle ainci sue votro
                        mobilité à l'aide de sangles er
                        cucnoncion
                        l'accent est mis sur le CORE (centre
                        corps) afin d'obtenir un gainage, une sangle abdominale résistante à toute épreuve et un
                        renforcement musculaire.
                        En complement, des automassages el
                        des exercices de mobilité et
                        d'étirements sont egalement presents
                        dans ce cours.</p>
                    <p><strong>Durée</strong> : 45 minutes</p>

                </div>
            </div>

            <div class="card border-0">
                <img src="./images/photo2.jpeg" class="card-img-top" alt="#">
                <div class="card-body">
                    <h6>BOXE</h6>
                    <p class="card-text">Ici un seu mot d'ordre : se défouler !
                        Mélange de karaté , de boxe , de kick
                        boxing et de MMA. le cours se déroule
                        face a un sac de frappe , gants aux
                        poings
                        et accompagné de petits
                        matériels : corde à sauter , slam ball..
                        l'obiertifici est d'améliorer vos qualités
                        de résistance à l'effort. de vitesse. de
                        coordination et d'agilité.
                    </p>
                    <p><strong>Durée</strong> : 30 minutes</p>
                </div>
            </div>

            <div class="card border-0">
                <img src="./images/photo3.jpeg" class="card-img-top" alt="#">
                <div class="card-body">
                    <h6>HIIT</h6>
                    <p class="card-text">Le HIIT est l'acronvme de High Intensitv
                        Interval training en anglais
                        Cet entrainement à haute intensité
                        réalisé avec le poids du corps , alterne
                        periodes d'efforts courts et intenses et période de
                        récupération active , dans le but de bruler un maximum de calories.</p>
                    <p><strong>Durée</strong> : 30 minutes</p>
                </div>
            </div>

            <div class="card border-0">
                <img src="./images/photo4.jpeg" class="card-img-top" alt="#">
                <div class="card-body">
                    <h6>TRX FUSION</h6>
                    <p class="card-text">Un excellent programme pour travailler
                        l'ensemble du corps et transpirer à Grosse goutte. Grâce a des exercices d'une intensité
                        allant
                        de modérer à
                        forte, vous allez sculpter et tonifier votre corps tout en perdant du poids. Un bon
                        compromis
                        entre renforcement
                        musculaire et cardio. Dans cette atelier, vous utiliserez des sangles TRX et des accessoires
                        comme le quatre le Kettlrbell, le Slamball ou le
                        ViPR. Votre mental et votre systéme car-dio-vasculaire seront mis à rudes épreuves !</p>
                    <p><strong>Durée</strong> : 30 minutes</p>
                </div>
            </div>
        </div>
    </div>
    <!-- fin des 4 card -->

    <?php require_once './footer.php'; ?>

<!-- WC3 OK -->