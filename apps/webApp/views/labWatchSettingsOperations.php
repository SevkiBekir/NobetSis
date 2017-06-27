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
            <form method="post" action="<?php baseUrl(1,"admin/labWatchSettingsOperations/save"); ?>">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none;"/>
                <?php
                foreach ($labWatchSettings as $row){
                    $prepName=prepareNameLink($row["dormitoryName"]);
                    $prepName = url_title($prepName,"_");



                ?>
                <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                    <div class="panel-heading">
                        <h2><?=$row["dormitoryName"]?></h2>
                        <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
                    </div>
                    <div class="panel-body no-padding" style="display: block;">


                        <table class="table table-striped table-bordered table-condensed" style="margin-top: 1%">
                            <thead>
                            <tr class="warning">
                                <th class="text-center">Saat</th>
                                <th class="text-center">
                                    Pazartesi<br/>
                                    <a class="btn" id="<?=$prepName?>_mo_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_mo_notAllSelect">Hepsi Pasif</a>
                                </th>
                                <th class="text-center">
                                    Salı<br/>
                                    <a class="btn" id="<?=$prepName?>_tu_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_tu_notAllSelect">Hepsi Pasif</a>
                                </th>
                                <th class="text-center">
                                    Çarşamba<br/>
                                    <a class="btn" id="<?=$prepName?>_we_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_we_notAllSelect">Hepsi Pasif</a>
                                </th>
                                <th class="text-center">
                                    Perşembe<br/>
                                    <a class="btn" id="<?=$prepName?>_th_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_th_notAllSelect">Hepsi Pasif</a>
                                </th>
                                <th class="text-center">
                                    Cuma<br/>
                                    <a class="btn" id="<?=$prepName?>_fr_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_fr_notAllSelect">Hepsi Pasif</a>
                                </th>
                                <th class="text-center">
                                    Cumartesi<br/>
                                    <a class="btn" id="<?=$prepName?>_sa_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_sa_notAllSelect">Hepsi Pasif</a>                            </th>
                                <th class="text-center">
                                    Pazar<br/>
                                    <a class="btn" id="<?=$prepName?>_su_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_su_notAllSelect">Hepsi Pasif</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    09:00 - 13:00<br/>
                                    <a class="btn" id="<?=$prepName?>_1_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_1_notAllSelect">Hepsi Pasif</a>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_mo_1" value="1" name="<?=$prepName?>_mo_1" <?php echo ($row["monday"][0] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_tu_1" value="1" name="<?=$prepName?>_tu_1" <?php echo ($row["tuesday"][0] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_we_1" value="1" name="<?=$prepName?>_we_1" <?php echo ($row["wednesday"][0] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_th_1" value="1" name="<?=$prepName?>_th_1" <?php echo ($row["thursday"][0] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_fr_1" value="1" name="<?=$prepName?>_fr_1" <?php echo ($row["friday"][0] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_sa_1" value="1" name="<?=$prepName?>_sa_1" <?php echo ($row["saturday"][0] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_su_1" value="1" name="<?=$prepName?>_su_1" <?php echo ($row["sunday"][0] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>

                            </tr>
                            <tr>
                                <td>13:00 - 17:00<br/>
                                    <a class="btn" id="<?=$prepName?>_2_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_2_notAllSelect">Hepsi Pasif</a>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_mo_2" value="1" name="<?=$prepName?>_mo_2" <?php echo ($row["monday"][1] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_tu_2" value="1" name="<?=$prepName?>_tu_2" <?php echo ($row["tuesday"][1] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_we_2" value="1" name="<?=$prepName?>_we_2" <?php echo ($row["wednesday"][1] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_th_2" value="1" name="<?=$prepName?>_th_2" <?php echo ($row["thursday"][1] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_fr_2" value="1" name="<?=$prepName?>_fr_2" <?php echo ($row["friday"][1] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_sa_2" value="1" name="<?=$prepName?>_sa_2" <?php echo ($row["saturday"][1] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_su_2" value="1" name="<?=$prepName?>_su_2" <?php echo ($row["sunday"][1] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>

                            </tr>
                            <tr>
                                <td>17:00 - 21:00<br/>
                                    <a class="btn" id="<?=$prepName?>_3_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_3_notAllSelect">Hepsi Pasif</a>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_mo_3" value="1" name="<?=$prepName?>_mo_3" <?php echo ($row["monday"][2] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_tu_3" value="1" name="<?=$prepName?>_tu_3" <?php echo ($row["tuesday"][2] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_we_3" value="1" name="<?=$prepName?>_we_3" <?php echo ($row["wednesday"][2] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_th_3" value="1" name="<?=$prepName?>_th_3" <?php echo ($row["thursday"][2] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_fr_3" value="1" name="<?=$prepName?>_fr_3" <?php echo ($row["friday"][2] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_sa_3" value="1" name="<?=$prepName?>_sa_3" <?php echo ($row["saturday"][2] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_su_3" value="1" name="<?=$prepName?>_su_3" <?php echo ($row["sunday"][2] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>

                            </tr>
                            <tr>
                                <td>21:00 - 01:00<br/>
                                    <a class="btn" id="<?=$prepName?>_4_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_4_notAllSelect">Hepsi Pasif</a>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_mo_4" value="1" name="<?=$prepName?>_mo_4" <?php echo ($row["monday"][3] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_tu_4" value="1" name="<?=$prepName?>_tu_4" <?php echo ($row["tuesday"][3] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_we_4" value="1" name="<?=$prepName?>_we_4" <?php echo ($row["wednesday"][3] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_th_4" value="1" name="<?=$prepName?>_th_4" <?php echo ($row["thursday"][3] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_fr_4" value="1" name="<?=$prepName?>_fr_4" <?php echo ($row["friday"][3] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_sa_4" value="1" name="<?=$prepName?>_sa_4" <?php echo ($row["saturday"][3] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_su_4" value="1" name="<?=$prepName?>_su_4" <?php echo ($row["sunday"][3] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>01:00 - 06:00<br/>
                                    <a class="btn" id="<?=$prepName?>_5_allSelect">Hepsi Aktif</a>
                                    <a class="btn" id="<?=$prepName?>_5_notAllSelect">Hepsi Pasif</a>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_mo_5" value="1" name="<?=$prepName?>_mo_5" <?php echo ($row["monday"][4] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_tu_5" value="1" name="<?=$prepName?>_tu_5" <?php echo ($row["tuesday"][4] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_we_5" value="1" name="<?=$prepName?>_we_5" <?php echo ($row["wednesday"][4] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_th_5" value="1" name="<?=$prepName?>_th_5" <?php echo ($row["thursday"][4] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_fr_5" value="1" name="<?=$prepName?>_fr_5" <?php echo ($row["friday"][4] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_sa_5" value="1" name="<?=$prepName?>_sa_5" <?php echo ($row["saturday"][4] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="<?=$prepName?>_su_5" value="1" name="<?=$prepName?>_su_5" <?php echo ($row["sunday"][4] == 1) ?  "checked":"" ?>> Aktif
                                    </label>
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
                                <a href="<?php baseUrl(1,"admin/labWatchSettingsOperations"); ?>" class="btn btn-lg btn-block btn-danger "> VAZGEÇ<a/>
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

