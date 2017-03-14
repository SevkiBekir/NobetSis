<?php
include_once ("header.php");
?>
<!-- main content start-->
<div class="main-content main-content2 main-content2copy">
    <!-- header-starts -->
    <?php include_once("navbar.php") ?>
    <!-- //header-ends -->
    <div id="page-wrapper">
        <div class="graphs">
            <h2 class="text-center">NÖBET ATAMA İŞLEMLERİ</h2>

            <form method="get">


            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-heading">
                    <h2>1. Yurt PC Salonu</h2>
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
                            <th>Saat</th>
                            <th>Pazartesi</th>
                            <th>Salı</th>
                            <th>Çarşamba</th>
                            <th>Perşembe</th>
                            <th>Cuma</th>
                            <th>Cumartesi</th>
                            <th>Pazar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>09:00 - 13:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%" name="deneme">
                                        <option value="SBK">Ahmet Yurdakul</option>
                                        <option value="SBK">Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01:00 - 06:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>


            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-heading">
                    <h2>2. Yurt I. PC Salonu</h2>
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
                            <th>Saat</th>
                            <th>Pazartesi</th>
                            <th>Salı</th>
                            <th>Çarşamba</th>
                            <th>Perşembe</th>
                            <th>Cuma</th>
                            <th>Cumartesi</th>
                            <th>Pazar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>09:00 - 13:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01:00 - 06:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-heading">
                    <h2>2. Yurt II. PC Salonu </h2>
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
                            <th>Saat</th>
                            <th>Pazartesi</th>
                            <th>Salı</th>
                            <th>Çarşamba</th>
                            <th>Perşembe</th>
                            <th>Cuma</th>
                            <th>Cumartesi</th>
                            <th>Pazar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>09:00 - 13:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01:00 - 06:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-heading">
                    <h2>İsa Demiray Yurdu PC Salonu</h2>
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
                            <th>Saat</th>
                            <th>Pazartesi</th>
                            <th>Salı</th>
                            <th>Çarşamba</th>
                            <th>Perşembe</th>
                            <th>Cuma</th>
                            <th>Cumartesi</th>
                            <th>Pazar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>09:00 - 13:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01:00 - 06:00</td>

                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-heading">
                    <h2>Faika Aksoy Yurdu PC Salonu</h2>
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
                            <th>Saat</th>
                            <th>Pazartesi</th>
                            <th>Salı</th>
                            <th>Çarşamba</th>
                            <th>Perşembe</th>
                            <th>Cuma</th>
                            <th>Cumartesi</th>
                            <th>Pazar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>09:00 - 13:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01:00 - 06:00</td>

                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-heading">
                    <h2>19. Yurt PC Salonu</h2>
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
                            <th>Saat</th>
                            <th>Pazartesi</th>
                            <th>Salı</th>
                            <th>Çarşamba</th>
                            <th>Perşembe</th>
                            <th>Cuma</th>
                            <th>Cumartesi</th>
                            <th>Pazar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>09:00 - 13:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01:00 - 06:00</td>

                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-heading">
                    <h2>Refika Aksoy Yurdu PC Salonu</h2>
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
                            <th>Saat</th>
                            <th>Pazartesi</th>
                            <th>Salı</th>
                            <th>Çarşamba</th>
                            <th>Perşembe</th>
                            <th>Cuma</th>
                            <th>Cumartesi</th>
                            <th>Pazar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>09:00 - 13:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option selected>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option selected>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-green">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option selected>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                            <td class="bg-info">
                                <div class="form-group">
                                    <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%">
                                        <option>Ahmet Yurdakul</option>
                                        <option>Şevki Kocadağ</option>
                                        <option>Yasin Mısır</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01:00 - 06:00</td>

                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="button" value="VAZGEÇ" class="btn btn-warng1 btn-lg btn-block"/>
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

<?php
include_once ("footer.php");
?>
