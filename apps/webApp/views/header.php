<?php
/**
 *
 * @2017
 * ************ T E A M ************
 * Şevki KOCADAĞ -> bekirsevki@gmail.com
 *
 *
 */


include_once("sessions.php");
if($username==""){
    //headerLocation("login");
    redirect("login","refresh");

}
else {

    ?>
    <!DOCTYPE HTML>
    <html lang="tr">
    <head>
        <title>Uygulama | NöbetSis</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Eye Exercise"/>
        <script type="application/x-javascript"> addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            } </script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php assetsUrl("css/bootstrap.min.css") ?>" rel='stylesheet' type='text/css'/>
        <!-- Custom CSS -->
        <link href="<?php assetsUrl("css/style.css") ?>" rel='stylesheet' type='text/css'/>

        <!-- Graph CSS -->
        <link href="<?php assetsUrl("css/font-awesome.css") ?>" rel="stylesheet">
        <!-- jQuery -->
        <!-- lined-icons -->
        <link rel="stylesheet" href="<?php assetsUrl("css/icon-font.min.css") ?>" type='text/css'/>
        <!-- //lined-icons -->
        <!--animate-->
        <link href="<?php assetsUrl("css/animate.css") ?>" rel="stylesheet" type="text/css" media="all">

        <link href="<?php assetsUrl("css/bootstrap-select.css") ?>" rel="stylesheet" type="text/css" media="all">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php assetsUrl("images/icons/apple-icon-57x57.png")?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php assetsUrl("images/icons/apple-icon-60x60.png")?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php assetsUrl("images/icons/apple-icon-72x72.png")?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php assetsUrl("images/icons/apple-icon-76x76.png")?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php assetsUrl("images/icons/apple-icon-114x114.png")?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php assetsUrl("images/icons/apple-icon-120x120.png")?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php assetsUrl("images/icons/apple-icon-144x144.png")?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php assetsUrl("images/icons/apple-icon-152x152.png")?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php assetsUrl("images/icons/apple-icon-180x180.png")?>">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php assetsUrl("images/icons/android-icon-192x192.png")?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php assetsUrl("images/icons/favicon-32x32.png")?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php assetsUrl("images/icons/favicon-96x96.png")?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php assetsUrl("images/icons/favicon-16x16.png")?>">
        <link rel="manifest" href="<?php assetsUrl("images/icons/manifest.json")?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php assetsUrl("images/icons/ms-icon-144x144.png")?>">
        <meta name="theme-color" content="#ffffff">
        <!--//end-animate-->
        <!----webfonts--->
        <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic'
              rel='stylesheet' type='text/css'>
        <!---//webfonts--->
        <!-- Meters graphs -->

        <!-- Placed js at the end of the document so the pages load faster -->

    </head>

<body class="sticky-header left-side-collapsed">
<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <h1><a href="<?php baseUrl(); ?>"><span>MENÜ</span></a></h1>
        </div>
        <div class="logo-icon text-center">
            <a href="<?php baseUrl(); ?>"><i class="lnr lnr-home"></i> </a>
        </div>

        <!--logo and iconic logo end-->
        <div class="left-side-inner">

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">




                <li><a href="<?php baseUrl(1,"watchExchange") ?>"><i class="lnr lnr-store"></i><span>Nöbet Borsası<span></a></li>
                <li><a href="<?php baseUrl(1,"termWatchOperations") ?>"><i class="lnr lnr-calendar-full"></i><span>Dönem Nöbetleri<span></a></li>
                <li><a href="<?php baseUrl(1,"quitWatch") ?>"><i class="lnr lnr-cross-circle"></i><span>Nöbet Bırakma<span></a></li>
                <?php
                if($userTypes["degree"] == 2 || $userTypes["degree"] == 3 ) {
                    ?>
                    <li class="menu-list">
                        <a href="#"><i class="lnr lnr-cog"></i>
                            <span>Sorumlu İşlemleri</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="<?php baseUrl(1, "moderator/assignWatchOperations") ?>">Nöbet Atama
                                    İşlemleri</a></li>
                            <li><a href="<?php baseUrl(1, "moderator/punishmentOperations") ?>">Ceza İşlemleri</a></li>
                        </ul>
                    </li>
                    <?php
                }
                if($userTypes["degree"] == 3){
                ?>
                    <li class="menu-list">
                        <a href="#"><i class="lnr lnr-cog"></i>
                            <span>Yönetici İşlemleri</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="<?php baseUrl(1,"admin/labWatchSettingsOperations") ?>">Salon Ayarları</a></li>
                            <li><a href="<?php baseUrl(1,"admin/announcementOperations") ?>">Duyuru Ayarları</a></li>
                            <li><a href="<?php baseUrl(1,"admin/userOperations") ?>">Kullanıcı İşlemleri </a></li>
                        </ul>
                    </li>

                <?php
                }
                ?>


            </ul>
            <!--sidebar nav end-->
        </div>
    </div>
    <!-- left side end-->

    <?php
}
    ?>