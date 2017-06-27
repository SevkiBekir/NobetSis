<?php
 /**
     *
     * @2017
     * ************ T E A M ************
     * Şevki KOCADAĞ -> bekirsevki@gmail.com
     *
     * 
     */

?>

    <!--footer section start-->
    <footer>
        <p>&copy 2017 NöbetSis v1.0 | <a href="http://cc.metu.edu.tr">ODTÜ BİDB</a> Tarafından Geliştirilmiştir</p>
    </footer>
    <!--footer section end-->
    </section>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php assetsUrl("js/jquery-1.10.2.min.js")?>"></script>
    <script src="<?php assetsUrl("js/bootstrap.min.js")?>"></script>

    <script src="<?php assetsUrl('js/wow.min.js')?>"></script>
    <script>
        new WOW().init();
    </script>

    <script src="<?php assetsUrl('js/jquery.nicescroll.js'); ?>"></script>
    <script src="<?php assetsUrl('js/scripts.js'); ?>"></script>
    <script src="<?php assetsUrl('js/bootstrap-select.js'); ?>"></script>

<script>
    $(document).ready(function () {

    <?php
            if(isset($labSettingsJs)){
                foreach ($labWatchSettings as $row) {
                    $prepName = prepareNameLink($row["dormitoryName"]);
                    $prepName = url_title($prepName, "_");
                    $days = array("mo", "tu", "we", "th", "fr", "sa", "su");


                    for ($i = 0; $i < sizeof($days); $i++) {
                        echo "$(\"#" . $prepName . "_" . $days[$i] . "_notAllSelect\").hide();";

                        echo "$(\"#" . $prepName . "_" . $days[$i] . "_allSelect\").click(function () {";
                        echo "$(\"#" . $prepName . "_" . $days[$i] . "_allSelect\").hide();";
                        echo "$(\"#" . $prepName . "_" . $days[$i] . "_notAllSelect\").show();";
                        for ($j = 1; $j <= 5; $j++) {
                            echo "$(\"#" . $prepName . "_" . $days[$i] . "_" . "$j" . "\").prop(\"checked\",true);";
                        }
                        echo " });";

                        echo "$(\"#" . $prepName . "_" . $days[$i] . "_notAllSelect\").click(function () {";
                        echo "$(\"#" . $prepName . "_" . $days[$i] . "_allSelect\").show();";
                        echo "$(\"#" . $prepName . "_" . $days[$i] . "_notAllSelect\").hide();";
                        for ($j = 1; $j <= 5; $j++) {
                            echo "$(\"#" . $prepName . "_" . $days[$i] . "_" . "$j" . "\").prop(\"checked\",false);";
                        }
                        echo " });";
                    }

                    for ($i = 1; $i <= 5; $i++) {
                        echo "$(\"#" . $prepName . "_" . $i . "_notAllSelect\").hide();";

                        echo "$(\"#" . $prepName . "_" . $i . "_allSelect\").click(function () {";
                        echo "$(\"#" . $prepName . "_" . $i . "_allSelect\").hide();";
                        echo "$(\"#" . $prepName . "_" . $i . "_notAllSelect\").show();";
                        for ($j = 0; $j < sizeof($days); $j++) {
                            echo "$(\"#" . $prepName . "_" . $days[$j] . "_" . "$i" . "\").prop(\"checked\",true);";
                        }
                        echo " });";

                        echo "$(\"#" . $prepName . "_" . $i . "_notAllSelect\").click(function () {";
                        echo "$(\"#" . $prepName . "_" . $i . "_notAllSelect\").hide();";
                        echo "$(\"#" . $prepName . "_" . $i . "_allSelect\").show();";
                        for ($j = 0; $j < sizeof($days); $j++) {
                            echo "$(\"#" . $prepName . "_" . $days[$j] . "_" . "$i" . "\").prop(\"checked\",false);";
                        }
                        echo " });";
                    }
                }

            }

            ?>


});




</script>
    </body>
    </html>
