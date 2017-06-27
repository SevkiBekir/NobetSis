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

            <h2 class="text-center">Salon Nöbet Ayarları</h2>
            <form method="post" action="<?php baseUrl(1,"moderator/assignWatchOperations/save"); ?>">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none;"/>
                <?php
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
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_mo_1\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["monday"][0]) == "string") && ($allAssigns[$i]["monday"][0] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["monday"][0]) == "array") && $allAssigns[$i]["monday"][0]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>

                                <td class="text-center <?php if ($row["tuesday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["tuesday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["tuesday"][0] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_tu_1\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["tuesday"][0]) == "string") && ($allAssigns[$i]["tuesday"][0] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["tuesday"][0]) == "array") && $allAssigns[$i]["tuesday"][0]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["wednesday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["wednesday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["wednesday"][0] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_we_1\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["wednesday"][0]) == "string") && ($allAssigns[$i]["wednesday"][0] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["wednesday"][0]) == "array") && $allAssigns[$i]["wednesday"][0]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["thursday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["thursday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["thursday"][0] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_th_1\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["thursday"][0]) == "string") && ($allAssigns[$i]["thursday"][0] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["thursday"][0]) == "array") && $allAssigns[$i]["thursday"][0]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["friday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["friday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["friday"][0] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_fr_1\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["friday"][0]) == "string") && ($allAssigns[$i]["friday"][0] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["friday"][0]) == "array") && $allAssigns[$i]["friday"][0]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["saturday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["saturday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["saturday"][0] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_sa_1\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["saturday"][0]) == "string") && ($allAssigns[$i]["saturday"][0] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["saturday"][0]) == "array") && $allAssigns[$i]["saturday"][0]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["sunday"][0] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["sunday"][0] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php
                                    if ($row["sunday"][0] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_su_1\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["sunday"][0]) == "string") && ($allAssigns[$i]["sunday"][0] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["sunday"][0]) == "array") && $allAssigns[$i]["sunday"][0]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
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
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_mo_2\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["monday"][1]) == "string") && ($allAssigns[$i]["monday"][1] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["monday"][1]) == "array") && $allAssigns[$i]["monday"][1]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>

                                <td class="text-center <?php if ($row["tuesday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["tuesday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["tuesday"][1] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_tu_2\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["tuesday"][1]) == "string") && ($allAssigns[$i]["tuesday"][1] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["tuesday"][1]) == "array") && $allAssigns[$i]["tuesday"][1]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["wednesday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["wednesday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["wednesday"][1] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_we_2\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["wednesday"][1]) == "string") && ($allAssigns[$i]["wednesday"][1] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["wednesday"][1]) == "array") && $allAssigns[$i]["wednesday"][1]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["thursday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["thursday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["thursday"][1] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_th_2\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["thursday"][1]) == "string") && ($allAssigns[$i]["thursday"][1] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["thursday"][1]) == "array") && $allAssigns[$i]["thursday"][1]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["friday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["friday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["friday"][1] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_fr_2\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["friday"][1]) == "string") && ($allAssigns[$i]["friday"][1] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["friday"][1]) == "array") && $allAssigns[$i]["friday"][1]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["saturday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["saturday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["saturday"][1] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_sa_2\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["saturday"][1]) == "string") && ($allAssigns[$i]["saturday"][1] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["saturday"][1]) == "array") && $allAssigns[$i]["saturday"][1]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["sunday"][1] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["sunday"][1] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["sunday"][1] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_su_2\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["sunday"][1]) == "string") && ($allAssigns[$i]["sunday"][1] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["sunday"][1]) == "array") && $allAssigns[$i]["sunday"][1]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
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
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_mo_3\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["monday"][2]) == "string") && ($allAssigns[$i]["monday"][2] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["monday"][2]) == "array") && $allAssigns[$i]["monday"][2]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>

                                <td class="text-center <?php if ($row["tuesday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["tuesday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["tuesday"][2] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_tu_3\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["tuesday"][2]) == "string") && ($allAssigns[$i]["tuesday"][2] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["tuesday"][2]) == "array") && $allAssigns[$i]["tuesday"][2]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["wednesday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["wednesday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["wednesday"][2] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_we_3\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["wednesday"][2]) == "string") && ($allAssigns[$i]["wednesday"][2] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["wednesday"][2]) == "array") && $allAssigns[$i]["wednesday"][2]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["thursday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["thursday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["thursday"][2] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_th_3\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["thursday"][2]) == "string") && ($allAssigns[$i]["thursday"][2] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["thursday"][2]) == "array") && $allAssigns[$i]["thursday"][2]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["friday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["friday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["friday"][2] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_fr_3\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["friday"][2]) == "string") && ($allAssigns[$i]["friday"][2] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["friday"][2]) == "array") && $allAssigns[$i]["friday"][2]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["saturday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["saturday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["saturday"][2] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_sa_3\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["saturday"][2]) == "string") && ($allAssigns[$i]["saturday"][2] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["saturday"][2]) == "array") && $allAssigns[$i]["saturday"][2]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["sunday"][2] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["sunday"][2] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["sunday"][2] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_su_3\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["sunday"][2]) == "string") && ($allAssigns[$i]["sunday"][2] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["sunday"][2]) == "array") && $allAssigns[$i]["sunday"][2]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
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
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_mo_4\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["monday"][3]) == "string") && ($allAssigns[$i]["monday"][3] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["monday"][3]) == "array") && $allAssigns[$i]["monday"][3]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>

                                <td class="text-center <?php if ($row["tuesday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["tuesday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["tuesday"][3] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_tu_4\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["tuesday"][3]) == "string") && ($allAssigns[$i]["tuesday"][3] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["tuesday"][3]) == "array") && $allAssigns[$i]["tuesday"][3]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["wednesday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["wednesday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["wednesday"][3] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_we_4\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["wednesday"][3]) == "string") && ($allAssigns[$i]["wednesday"][3] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["wednesday"][3]) == "array") && $allAssigns[$i]["wednesday"][3]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["thursday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["thursday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["thursday"][3] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_th_4\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["thursday"][3]) == "string") && ($allAssigns[$i]["thursday"][3] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["thursday"][3]) == "array") && $allAssigns[$i]["thursday"][3]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["friday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["friday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["friday"][3] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_fr_4\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["friday"][3]) == "string") && ($allAssigns[$i]["friday"][3] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["friday"][3]) == "array") && $allAssigns[$i]["friday"][3]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["saturday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["saturday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["saturday"][3] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_sa_4\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["saturday"][3]) == "string") && ($allAssigns[$i]["saturday"][3] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["saturday"][3]) == "array") && $allAssigns[$i]["saturday"][3]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["sunday"][3] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["sunday"][3] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["sunday"][3] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_su_4\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["sunday"][3]) == "string") && ($allAssigns[$i]["sunday"][3] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["sunday"][3]) == "array") && $allAssigns[$i]["sunday"][3]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
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
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_mo_5\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["monday"][4]) == "string") && ($allAssigns[$i]["monday"][4] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["monday"][4]) == "array") && $allAssigns[$i]["monday"][4]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>

                                <td class="text-center <?php if ($row["tuesday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["tuesday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["tuesday"][4] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_tu_5\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["tuesday"][4]) == "string") && ($allAssigns[$i]["tuesday"][4] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["tuesday"][4]) == "array") && $allAssigns[$i]["tuesday"][4]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["wednesday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["wednesday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["wednesday"][4] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_we_5\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["wednesday"][4]) == "string") && ($allAssigns[$i]["wednesday"][4] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["wednesday"][4]) == "array") && $allAssigns[$i]["wednesday"][4]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["thursday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["thursday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["thursday"][4] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_th_5\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["thursday"][4]) == "string") && ($allAssigns[$i]["thursday"][4] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["thursday"][4]) == "array") && $allAssigns[$i]["thursday"][4]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["friday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["friday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["friday"][4] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_fr_5\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["friday"][4]) == "string") && ($allAssigns[$i]["friday"][4] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["friday"][4]) == "array") && $allAssigns[$i]["friday"][4]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["saturday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["saturday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php

                                    if ($row["saturday"][4] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_sa_5\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["saturday"][4]) == "string") && ($allAssigns[$i]["saturday"][4] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["saturday"][4]) == "array") && $allAssigns[$i]["saturday"][4]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center <?php if ($row["sunday"][4] == 0) echo  "badge-danger";else echo ($allAssigns[$i]["sunday"][4] == "0") ? "bg-info":"bg-green" ?>">
                                    <?php


                                    if ($row["sunday"][4] == 1){
                                        echo "<select id=\"lunch\" class=\"selectpicker\" data-live-search=\"true\" title=\"Seçiniz.\" data-width=\"100%\" name=\"".$prepName."_su_5\">";
                                        echo "<option ";
                                        echo ((gettype($allAssigns[$i]["sunday"][4]) == "string") && ($allAssigns[$i]["sunday"][4] == "0")) ? "selected ":"";
                                        echo "value=\"0\">Seçiniz</option>";
                                        foreach ($operators as $oper){
                                            echo "<option ";
                                            echo ((gettype($allAssigns[$i]["sunday"][4]) == "array") && $allAssigns[$i]["sunday"][4]["username"] == $oper["username"]) ? "selected ":"";
                                            echo "value='".$oper["username"]."'>".$oper["firstname"]." ".$oper["lastname"]."</option>";
                                        }

                                        echo "</select>";
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


                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <a href="<?php baseUrl(1,"moderator/assignWatchOperations"); ?>" class="btn btn-lg btn-block btn-danger "> VAZGEÇ<a/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">

                                <input type="submit" value="KAYDET" class="btn btn-primary btn-lg btn-block"/>

                            </div>
                        </div>
                    </div>
                </div>

            </form>
            <!-- end graphs -->
        </div>
    </div>

