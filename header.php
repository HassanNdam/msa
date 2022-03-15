<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?php echo get_bloginfo('name'); ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo(get_template_directory_uri() . '/assets/img/msa_fav_icone.png') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php
    include("listes.php");
     wp_head();
    ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type = "text/javascript">
        $(function () {

            $('#scrollToTop').bind("click", function () {
                $('html, body').animate({ scrollTop: 0 }, 800);
                return false;
            });
        });
</script>
</head>

<body>

<header>
    <!-- Debut Header -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2" >
                        <!-- Logo -->
                        <div class="logo">
                            <a href="<?php echo get_site_url();?>"><img src="<?php echo (get_template_directory_uri(). '/assets/img/logo_msa.png');?>" alt="recrutement Msa"></a>
                        </div>  
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Menu Principal -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="https://recrutement.msa.fr/pourquoi-nous-rejoindre/" target="_blank">Pourquoi<span><br>nous rejoindre ?</span></a></li>
                                        <li><a href="https://recrutement.msa.fr/pourquoi-nous-rejoindre/" target="_blank">Je teste<span><br>ma MSA compatibilité</span></a></li>
                                        <li><a href="https://recrutement.msa.fr/temoignages-de-collaborateurs/" target="_blank">Témoignages <span><br>des collaborateurs </span></a></li>
                                    </ul>
                                </nav>
                            </div>          
                            <!-- Bouton Header -->
                            <div class="header-btn d-none f-right d-lg-block">
                                <a style="background-color:white" href="https://jobaffinity.fr/apply/94ok6l3f9t3ozch4ad" target="_blanc"><button class="btn"><i class="fa fa-user"></i> Je rejoins la MSA</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- Bouton Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                         <!-- Apres Header --->

        <div class="header-offre2"> 
        </div>
        <div class="header-offre"> 
            <h3>OFFRE D'EMPLOI</h3> 
        </div>



   