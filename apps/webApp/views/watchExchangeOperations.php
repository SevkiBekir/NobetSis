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

            <h2 class="text-center">Dönem Nöbetleri</h2>

                <?php

                foreach ($allAssigns as $row){
                    $keys = array_keys($row);
                    foreach($keys as $x){
                        if($x != "dormitoryName" && $x != "dormitoryId" && $x != "weekNo" && $x != "year"){
                            $i = -1;
                            foreach ($row[$x] as $y){
                                $i++;
                                if(gettype($y) != "array" && $y == "0"){
                                    // create model

                                    ?>


                                    <div class="modal fade" id="add_<?=$row["dormitoryId"]."_".$x."_".$i."_".$row["weekNo"]."_".$row["year"]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Nöbeti Al</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            Nöbeti Almak İstiyor musun?
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <form method="post" action="<?php baseUrl(1,"watchExchangeOperations/add"); ?>">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Hayır</button>
                                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none;"/>
                                                        <input type="hidden" id="add" name="add" value="add_<?=$row["dormitoryId"]."_".$x."_".$i."_".$row["weekNo"]."_".$row["year"]?>">
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
                }





                $i = -1;
                foreach ($labWatchSettings as $row){
                    $i++;
                    $prepName=prepareNameLink($row["dormitoryName"]);
                    $prepName = url_title($prepName,"_");



                ?>
                <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                    <div class="panel-heading">
                        <h2><?=$row["dormitoryName"]?></h2>
                        <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
                    </div>
                    <div class="panel-body no-padding" style="display: block;">
                        <div class="tableColorInfo">
                            <div class="tableSquareClosed "></div><div style="display:inline-block"><p>KAPALI</p></div>
                        </div>
                        <div class="tableColorInfo">
                            <div class="tableSquareEmpty "></div><div style="display:inline-block"><p>BOŞ</p></div>
                        </div>
                        <div class="tableColorInfo">
                            <div class="tableSquareReserved "></div><div style="display:inline-block"><p>REZERVE</p></div>
                        </div>

                        <table class="table table-striped table-bordered table-condensed" style="margin-top: 1%">
                            <thead>
                            <tr class="warning">
                                <th class="text-center">Saat</th>
                                <th class="text-center">
                                    Pazartesi
                                </th>
                                <th class="text-center">
                                    Salı
                                </th>
                                <th class="text-center">
                                    Çarşamba
                                </th>
                                <th class="text-center">
                                    Perşembe
                                </th>
                                <th class="text-center">
                                    Cuma
                                </th>
                                <th class="text-center">
                                    Cumartes
                                </th>
                                <th class="text-center">
                                    Pazar
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    09:00 - 13:00
                                </td>

                                <td class="text-center <?php if ($row["monday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["monday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["monday"][0] == 1){
                                        if(gettype($allAssigns[$i]["monday"][0]) == "array"){
                                            echo $allAssigns[$i]["monday"][0]["firstname"]." ".$allAssigns[$i]["monday"][0]["lastname"];
                                        }else if ($allAssigns[$i]["monday"][0] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_monday_0"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>

                                <td class="text-center <?php if ($row["tuesday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["tuesday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["tuesday"][0] == 1){
                                        if(gettype($allAssigns[$i]["tuesday"][0]) == "array"){
                                            echo $allAssigns[$i]["tuesday"][0]["firstname"]." ".$allAssigns[$i]["tuesday"][0]["lastname"];
                                        }else if ($allAssigns[$i]["tuesday"][0] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_tuesday_0"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["wednesday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["wednesday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["wednesday"][0] == 1){
                                        if(gettype($allAssigns[$i]["wednesday"][0]) == "array"){
                                            echo $allAssigns[$i]["wednesday"][0]["firstname"]." ".$allAssigns[$i]["wednesday"][0]["lastname"];
                                        }else if ($allAssigns[$i]["wednesday"][0] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_wednesday_0"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["thursday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["thursday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["thursday"][0] == 1){
                                        if(gettype($allAssigns[$i]["thursday"][0]) == "array"){
                                            echo $allAssigns[$i]["thursday"][0]["firstname"]." ".$allAssigns[$i]["thursday"][0]["lastname"];
                                        }else if ($allAssigns[$i]["thursday"][0] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_thursday_0"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["friday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["friday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["friday"][0] == 1){
                                        if(gettype($allAssigns[$i]["friday"][0]) == "array"){
                                            echo $allAssigns[$i]["friday"][0]["firstname"]." ".$allAssigns[$i]["friday"][0]["lastname"];
                                        }else if ($allAssigns[$i]["friday"][0] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_friday_0"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["saturday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["saturday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["saturday"][0] == 1){
                                        if(gettype($allAssigns[$i]["saturday"][0]) == "array"){
                                            echo $allAssigns[$i]["saturday"][0]["firstname"]." ".$allAssigns[$i]["saturday"][0]["lastname"];
                                        }else if ($allAssigns[$i]["saturday"][0] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_saturday_0"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["sunday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["sunday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["sunday"][0] == 1){
                                        if(gettype($allAssigns[$i]["sunday"][0]) == "array"){
                                            echo $allAssigns[$i]["sunday"][0]["firstname"]." ".$allAssigns[$i]["sunday"][0]["lastname"];
                                        }else if ($allAssigns[$i]["sunday"][0] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_sunday_0"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>


                            </tr>
                            <tr>
                                <td>13:00 - 17:00
                                </td>
                                <td class="text-center <?php if ($row["monday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["monday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["monday"][1] == 1){
                                        if(gettype($allAssigns[$i]["monday"][1]) == "array"){
                                            echo $allAssigns[$i]["monday"][1]["firstname"]." ".$allAssigns[$i]["monday"][1]["lastname"];
                                        }else if ($allAssigns[$i]["monday"][1] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_monday_1"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>

                                <td class="text-center <?php if ($row["tuesday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["tuesday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["tuesday"][1] == 1){
                                        if(gettype($allAssigns[$i]["tuesday"][1]) == "array"){
                                            echo $allAssigns[$i]["tuesday"][1]["firstname"]." ".$allAssigns[$i]["tuesday"][1]["lastname"];
                                        }else if ($allAssigns[$i]["tuesday"][1] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_tuesday_1"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["wednesday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["wednesday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["wednesday"][1] == 1){
                                        if(gettype($allAssigns[$i]["wednesday"][1]) == "array"){
                                            echo $allAssigns[$i]["wednesday"][1]["firstname"]." ".$allAssigns[$i]["wednesday"][1]["lastname"];
                                        }else if ($allAssigns[$i]["wednesday"][1] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_wednesday_1"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["thursday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["thursday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["thursday"][1] == 1){
                                        if(gettype($allAssigns[$i]["thursday"][1]) == "array"){
                                            echo $allAssigns[$i]["thursday"][1]["firstname"]." ".$allAssigns[$i]["thursday"][1]["lastname"];
                                        }else if ($allAssigns[$i]["thursday"][1] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_thursday_1"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["friday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["friday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["friday"][1] == 1){
                                        if(gettype($allAssigns[$i]["friday"][1]) == "array"){
                                            echo $allAssigns[$i]["friday"][1]["firstname"]." ".$allAssigns[$i]["friday"][1]["lastname"];
                                        }else if ($allAssigns[$i]["friday"][1] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_friday_1"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["saturday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["saturday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["saturday"][1] == 1){
                                        if(gettype($allAssigns[$i]["saturday"][1]) == "array"){
                                            echo $allAssigns[$i]["saturday"][1]["firstname"]." ".$allAssigns[$i]["saturday"][1]["lastname"];
                                        }else if ($allAssigns[$i]["saturday"][1] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_saturday_1"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["sunday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["sunday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["sunday"][1] == 1){
                                        if(gettype($allAssigns[$i]["sunday"][1]) == "array"){
                                            echo $allAssigns[$i]["sunday"][1]["firstname"]." ".$allAssigns[$i]["sunday"][1]["lastname"];
                                        }else if ($allAssigns[$i]["sunday"][1] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_sunday_1"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <td>17:00 - 21:00
                                </td>
                                <td class="text-center <?php if ($row["monday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["monday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["monday"][2] == 1){
                                        if(gettype($allAssigns[$i]["monday"][2]) == "array"){
                                            echo $allAssigns[$i]["monday"][2]["firstname"]." ".$allAssigns[$i]["monday"][2]["lastname"];
                                        }else if ($allAssigns[$i]["monday"][2] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_monday_2"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>

                                <td class="text-center <?php if ($row["tuesday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["tuesday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["tuesday"][2] == 1){
                                        if(gettype($allAssigns[$i]["tuesday"][2]) == "array"){
                                            echo $allAssigns[$i]["tuesday"][2]["firstname"]." ".$allAssigns[$i]["tuesday"][2]["lastname"];
                                        }else if ($allAssigns[$i]["tuesday"][2] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_tuesday_2"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["wednesday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["wednesday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["wednesday"][2] == 1){
                                        if(gettype($allAssigns[$i]["wednesday"][2]) == "array"){
                                            echo $allAssigns[$i]["wednesday"][2]["firstname"]." ".$allAssigns[$i]["wednesday"][2]["lastname"];
                                        }else if ($allAssigns[$i]["wednesday"][2] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_wednesday_2"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["thursday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["thursday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["thursday"][2] == 1){
                                        if(gettype($allAssigns[$i]["thursday"][2]) == "array"){
                                            echo $allAssigns[$i]["thursday"][2]["firstname"]." ".$allAssigns[$i]["thursday"][2]["lastname"];
                                        }else if ($allAssigns[$i]["thursday"][2] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_thursday_2"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["friday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["friday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["friday"][2] == 1){
                                        if(gettype($allAssigns[$i]["friday"][2]) == "array"){
                                            echo $allAssigns[$i]["friday"][2]["firstname"]." ".$allAssigns[$i]["friday"][2]["lastname"];
                                        }else if ($allAssigns[$i]["friday"][2] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_friday_2"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["saturday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["saturday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["saturday"][2] == 1){
                                        if(gettype($allAssigns[$i]["saturday"][2]) == "array"){
                                            echo $allAssigns[$i]["saturday"][2]["firstname"]." ".$allAssigns[$i]["saturday"][2]["lastname"];
                                        }else if ($allAssigns[$i]["saturday"][2] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_saturday_2"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["sunday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["sunday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["sunday"][2] == 1){
                                        if(gettype($allAssigns[$i]["sunday"][2]) == "array"){
                                            echo $allAssigns[$i]["sunday"][2]["firstname"]." ".$allAssigns[$i]["sunday"][2]["lastname"];
                                        }else if ($allAssigns[$i]["sunday"][2] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_sunday_2"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>21:00 - 01:00
                                </td>
                                <td class="text-center <?php if ($row["monday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["monday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["monday"][3] == 1){
                                        if(gettype($allAssigns[$i]["monday"][3]) == "array"){
                                            echo $allAssigns[$i]["monday"][3]["firstname"]." ".$allAssigns[$i]["monday"][3]["lastname"];
                                        }else if ($allAssigns[$i]["monday"][3] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_monday_3"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>

                                <td class="text-center <?php if ($row["tuesday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["tuesday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["tuesday"][3] == 1){
                                        if(gettype($allAssigns[$i]["tuesday"][3]) == "array"){
                                            echo $allAssigns[$i]["tuesday"][3]["firstname"]." ".$allAssigns[$i]["tuesday"][3]["lastname"];
                                        }else if ($allAssigns[$i]["tuesday"][3] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_tuesday_3"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["wednesday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["wednesday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["wednesday"][3] == 1){
                                        if(gettype($allAssigns[$i]["wednesday"][3]) == "array"){
                                            echo $allAssigns[$i]["wednesday"][3]["firstname"]." ".$allAssigns[$i]["wednesday"][3]["lastname"];
                                        }else if ($allAssigns[$i]["wednesday"][3] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_wednesday_3"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["thursday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["thursday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["thursday"][3] == 1){
                                        if(gettype($allAssigns[$i]["thursday"][3]) == "array"){
                                            echo $allAssigns[$i]["thursday"][3]["firstname"]." ".$allAssigns[$i]["thursday"][3]["lastname"];
                                        }else if ($allAssigns[$i]["thursday"][3] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_thursday_3"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["friday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["friday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["friday"][3] == 1){
                                        if(gettype($allAssigns[$i]["friday"][3]) == "array"){
                                            echo $allAssigns[$i]["friday"][3]["firstname"]." ".$allAssigns[$i]["friday"][3]["lastname"];
                                        }else if ($allAssigns[$i]["friday"][3] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_friday_3"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["saturday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["saturday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["saturday"][3] == 1){
                                        if(gettype($allAssigns[$i]["saturday"][3]) == "array"){
                                            echo $allAssigns[$i]["saturday"][3]["firstname"]." ".$allAssigns[$i]["saturday"][3]["lastname"];
                                        }else if ($allAssigns[$i]["saturday"][3] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_saturday_3"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["sunday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["sunday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["sunday"][3] == 1){
                                        if(gettype($allAssigns[$i]["sunday"][3]) == "array"){
                                            echo $allAssigns[$i]["sunday"][3]["firstname"]." ".$allAssigns[$i]["sunday"][3]["lastname"];
                                        }else if ($allAssigns[$i]["sunday"][3] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_sunday_3"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>01:00 - 06:00
                                </td>
                                <td class="text-center <?php if ($row["monday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["monday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["monday"][4] == 1){
                                        if(gettype($allAssigns[$i]["monday"][4]) == "array"){
                                            echo $allAssigns[$i]["monday"][4]["firstname"]." ".$allAssigns[$i]["monday"][4]["lastname"];
                                        }else if ($allAssigns[$i]["monday"][4] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_monday_4"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>

                                <td class="text-center <?php if ($row["tuesday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["tuesday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["tuesday"][4] == 1){
                                        if(gettype($allAssigns[$i]["tuesday"][4]) == "array"){
                                            echo $allAssigns[$i]["tuesday"][4]["firstname"]." ".$allAssigns[$i]["tuesday"][4]["lastname"];
                                        }else if ($allAssigns[$i]["tuesday"][4] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_tuesday_4"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["wednesday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["wednesday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["wednesday"][4] == 1){
                                        if(gettype($allAssigns[$i]["wednesday"][4]) == "array"){
                                            echo $allAssigns[$i]["wednesday"][4]["firstname"]." ".$allAssigns[$i]["wednesday"][4]["lastname"];
                                        }else if ($allAssigns[$i]["wednesday"][4] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_wednesday_4"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["thursday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["thursday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["thursday"][4] == 1){
                                        if(gettype($allAssigns[$i]["thursday"][4]) == "array"){
                                            echo $allAssigns[$i]["thursday"][4]["firstname"]." ".$allAssigns[$i]["thursday"][4]["lastname"];
                                        }else if ($allAssigns[$i]["thursday"][4] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_thursday_4"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["friday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["friday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["friday"][4] == 1){
                                        if(gettype($allAssigns[$i]["friday"][4]) == "array"){
                                            echo $allAssigns[$i]["friday"][4]["firstname"]." ".$allAssigns[$i]["friday"][4]["lastname"];
                                        }else if ($allAssigns[$i]["friday"][4] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_friday_4"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["saturday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["saturday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["saturday"][4] == 1){
                                        if(gettype($allAssigns[$i]["saturday"][4]) == "array"){
                                            echo $allAssigns[$i]["saturday"][4]["firstname"]." ".$allAssigns[$i]["saturday"][4]["lastname"];
                                        }else if ($allAssigns[$i]["saturday"][4] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_saturday_4"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["sunday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["sunday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["sunday"][4] == 1){
                                        if(gettype($allAssigns[$i]["sunday"][4]) == "array"){
                                            echo $allAssigns[$i]["sunday"][4]["firstname"]." ".$allAssigns[$i]["sunday"][4]["lastname"];
                                        }else if ($allAssigns[$i]["sunday"][4] == "0"){
                                            echo "<a class='btn btn-block btn-default' data-toggle=\"modal\" data-target=\"#add_".$allAssigns[$i]["dormitoryId"]."_sunday_4"."_".$allAssigns[$i]["weekNo"]."_".$allAssigns[$i]["year"]."\">
                                                            NÖBET AL :)
                                                        </a>";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <?php

                }
                ?>

            <!-- end graphs -->
        </div>
    </div>

