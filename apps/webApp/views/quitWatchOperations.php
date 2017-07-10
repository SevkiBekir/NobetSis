<?php
/**
 *
 * @2017
 * ************ T E A M ************
 * Şevki KOCADAĞ -> bekirsevki@gmail.com
 *
 *
 */


include_once("header.php");
?>
<!-- main content start-->
<div class="main-content main-content2 main-content2copy">
    <!-- header-starts -->
    <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--notification menu start -->
        <?php include_once("navbar.php") ?>
        <!--notification menu end -->
    </div>
    <!-- //header-ends -->
    <div id="page-wrapper">
        <div class="graphs">

            <h2 class="text-center">NÖBET BIRAKMA İŞLEMLERİ</h2>

            <?php
            //new dBug($operatorLabs);


            foreach ($operatorLabs as $row) {
                $keys = array_keys($row);
                foreach($keys as $x){
                    if($x != "dormitoryName" && $x != "dormitoryId"){
                        foreach ($row[$x] as $y){

                            //new dBug($y);
                            $date = $y[1];
                            $hour = $y[0];
                            $formattedDate = replaceIt($date,array("/"),array("-"));

                            $formattedHour = url_title($hour,"_");



                ?>
                <div class="modal fade" id="temp_<?= $row["dormitoryId"]."_".$formattedDate."_".$formattedHour ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Nöbeti Sil</h4>
                            </div>
                            <div class="modal-body">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?=$row["dormitoryName"]." ".$date." ".$hour?>
                                    </div>
                                </div>
                                Nöbetini bırakmak istiyor musunuz?
                            </div>
                            <div class="modal-footer">
                                <form method="post" action="<?php baseUrl(1,"quitWatchOperations/delete"); ?>">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Hayır</button>
                                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none;"/>
                                    <input type="hidden" id="temp" name="temp" value="temp_<?= $row["dormitoryId"]."_".$formattedDate."_".$formattedHour ?>">
                                    <button type="submit" class="btn btn-primary">Evet</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                }

            }
            ?>



            <div class="clearfix"></div>
            <div class="activity_box activity_box1" style="margin-top: 1%">
                <h3>HAFTALIK NÖBETLER</h3>
                <div class="activity-row activity-row1">
                    <div class="single-bottom">
                        <div class="container">
                            <table class="table table-striped table-condensed" style="margin-top: 1%">
                                <thead>
                                <tr class="warning">
                                    <th>Nöbet Yeri</th>
                                    <th>Nöbet Tarihi</th>
                                    <th>Nöbet Saati</th>
                                    <th>Nöbeti Bırak</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                foreach ($operatorLabs as $row){
                                    if(isset($row["monday"])){
                                        foreach ($row["monday"] as $temp){
                                            $formattedDate = replaceIt($temp[1],array("/"),array("-"));
                                            $formattedHour = url_title($temp[0],"_");

                                            echo "<tr>";
                                            echo "<td>".$row["dormitoryName"]."</td>";
                                            echo "<td>".$temp[1]."</td>";
                                            echo "<td>".$temp[0]."</td>";
                                            echo "<td>
                                                        <a data-toggle=\"modal\" data-target=\"#temp_".$row["dormitoryId"]."_".$formattedDate."_".$formattedHour."\">
                                                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                                        </a>
                                                    </td>";
                                            echo "</tr>";

                                        }
                                    }
                                    if(isset($row["tuesday"])){
                                        foreach ($row["tuesday"] as $temp){
                                            $formattedDate = replaceIt($temp[1],array("/"),array("-"));
                                            $formattedHour = url_title($temp[0],"_");

                                            echo "<tr>";
                                            echo "<td>".$row["dormitoryName"]."</td>";
                                            echo "<td>".$temp[1]."</td>";
                                            echo "<td>".$temp[0]."</td>";
                                            echo "<td>
                                                        <a data-toggle=\"modal\" data-target=\"#temp_".$row["dormitoryId"]."_".$formattedDate."_".$formattedHour."\">
                                                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                                        </a>
                                                    </td>";
                                            echo "</tr>";

                                        }
                                    }
                                    if(isset($row["wednesday"])){
                                        foreach ($row["wednesday"] as $temp){
                                            $formattedDate = replaceIt($temp[1],array("/"),array("-"));
                                            $formattedHour = url_title($temp[0],"_");

                                            echo "<tr>";
                                            echo "<td>".$row["dormitoryName"]."</td>";
                                            echo "<td>".$temp[1]."</td>";
                                            echo "<td>".$temp[0]."</td>";
                                            echo "<td>
                                                        <a data-toggle=\"modal\" data-target=\"#temp_".$row["dormitoryId"]."_".$formattedDate."_".$formattedHour."\">
                                                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                                        </a>
                                                    </td>";
                                            echo "</tr>";

                                        }
                                    }
                                    if(isset($row["thursday"])){
                                        foreach ($row["thursday"] as $temp){
                                            $formattedDate = replaceIt($temp[1],array("/"),array("-"));
                                            $formattedHour = url_title($temp[0],"_");

                                            echo "<tr>";
                                            echo "<td>".$row["dormitoryName"]."</td>";
                                            echo "<td>".$temp[1]."</td>";
                                            echo "<td>".$temp[0]."</td>";
                                            echo "<td>
                                                        <a data-toggle=\"modal\" data-target=\"#temp_".$row["dormitoryId"]."_".$formattedDate."_".$formattedHour."\">
                                                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                                        </a>
                                                    </td>";
                                            echo "</tr>";

                                        }
                                    }
                                    if(isset($row["friday"])){
                                        foreach ($row["friday"] as $temp){
                                            $formattedDate = replaceIt($temp[1],array("/"),array("-"));
                                            $formattedHour = url_title($temp[0],"_");

                                            echo "<tr>";
                                            echo "<td>".$row["dormitoryName"]."</td>";
                                            echo "<td>".$temp[1]."</td>";
                                            echo "<td>".$temp[0]."</td>";
                                            echo "<td>
                                                        <a data-toggle=\"modal\" data-target=\"#temp_".$row["dormitoryId"]."_".$formattedDate."_".$formattedHour."\">
                                                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                                        </a>
                                                    </td>";
                                            echo "</tr>";

                                        }
                                    }
                                    if(isset($row["saturday"])){
                                        foreach ($row["saturday"] as $temp){
                                            $formattedDate = replaceIt($temp[1],array("/"),array("-"));
                                            $formattedHour = url_title($temp[0],"_");

                                            echo "<tr>";
                                            echo "<td>".$row["dormitoryName"]."</td>";
                                            echo "<td>".$temp[1]."</td>";
                                            echo "<td>".$temp[0]."</td>";
                                                echo "<td>
                                                        <a data-toggle=\"modal\" data-target=\"#temp_".$row["dormitoryId"]."_".$formattedDate."_".$formattedHour."\">
                                                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                                        </a>
                                                    </td>";
                                            echo "</tr>";

                                        }
                                    }
                                    if(isset($row["sunday"])){
                                        foreach ($row["sunday"] as $temp){
                                            $formattedDate = replaceIt($temp[1],array("/"),array("-"));
                                            $formattedHour = url_title($temp[0],"_");

                                            echo "<tr>";
                                            echo "<td>".$row["dormitoryName"]."</td>";
                                            echo "<td>".$temp[1]."</td>";
                                            echo "<td>".$temp[0]."</td>";
                                            echo "<td>
                                                        <a data-toggle=\"modal\" data-target=\"#temp_".$row["dormitoryId"]."_".$formattedDate."_".$formattedHour."\">
                                                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                                                        </a>
                                                    </td>";
                                            echo "</tr>";

                                        }
                                    }



                                }

                                ?>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>