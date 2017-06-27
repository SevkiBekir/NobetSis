<?php
/**
 *
 * @2017
 * ************ T E A M ************
 * Şevki KOCADAĞ -> bekirsevki@gmail.com
 *
 *
 */
include_once( "sessions.php");

if($username==''){
	 ?>


    <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
    <!DOCTYPE HTML>
    <html lang="tr">
    <head>
        <title>Giriş | NöbetSis</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php assetsUrl("css/bootstrap.min.css")?>" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="<?php assetsUrl("css/style.css")?>" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="<?php assetsUrl("css/font-awesome.css")?>" rel="stylesheet">
        <!-- jQuery -->
        <!-- lined-icons -->
        <link rel="stylesheet" href="<?php assetsUrl("css/icon-font.min.css")?>" type='text/css' />
        <!-- //lined-icons -->
        <!-- chart -->
        <!-- //chart -->
        <!--animate-->
        <link href="<?php assetsUrl("css/animate.css")?>" rel="stylesheet" type="text/css" media="all">
        <script src="<?php assetsUrl("js/wow.min.js")?>"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
        <!----webfonts--->
        <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
        <!---//webfonts--->
        <!-- Meters graphs -->
        <script src="<?php assetsUrl("js/jquery-1.10.2.min.js")?>"></script>
        <!-- Placed js at the end of the document so the pages load faster -->

    </head>

    <body class="sign-in-up">
    <div class="front-bg">
        <img class="front-image" src="<?php assetsUrl("images/bg7.jpg")?>">
    </div>
    <section>
        <div id="page-wrapper" class="sign-in-wrapper">
            <div class="graphs">
                <div class="sign-in-form">

                    <div class="signin">
                        <div class="sign-in-form-top">
                            <p><span>NöbetSis</span> <a href="#"> Giriş</a></p>
                        </div>
                        <?php echo validation_errors();

                        ?>
                        <form action="login" method="post">
                            <div class="log-input">
                                <div class="log-input-center">
                                    <input type="text" class="user" name="txbUsername" value="<?=set_value('txbUsername');?>" placeholder="Kullanıcı Adı" required/>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="log-input">
                                <div class="log-input-center">
                                    <input type="password" class="lock" name="txbPassword" value="" placeholder="Şifre" required/>
                                </div>

                                <div class="clearfix"> </div>
                            </div>

                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none;"/>
                            <div class="log-input">
                                <div class="log-input-center">
                                    <input class="log-input-button" name="btnLogin" type="submit" value="Giriş Yap" style="width: 100%">
                                    <div class="clearfix"> </div>
                                </div>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--footer section start-->
        <footer>
            <p>&copy 2017 NöbetSis v1.0 | <a href="http://cc.metu.edu.tr">ODTÜ BİDB</a> Tarafından Geliştirilmiştir</p>
        </footer>
        <!--footer section end-->
    </section>

    <script src="<?php assetsUrl("js/jquery.nicescroll.js")?>"></script>
    <script src="<?php assetsUrl("js/scripts.js")?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php assetsUrl("js/bootstrap.min.js")?>"></script>
    </body>
    </html>

<?php

}
else{
	 // Go back to Index
	 headerLocation();
	 
}
	
?>