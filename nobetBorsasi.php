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
            <h2 class="text-center">NÖBET BORSASI</h2>



            <!-- Modal -->
            <div class="modal fade" id="nobetOnayModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Nöbet Onayı</h4>
                        </div>
                        <div class="modal-body">
                            Nöbeti Almak İstiyor musun?
                        </div>
                        <div class="modal-footer">
                            <form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Hayır</button>

                            <button type="submit" class="btn btn-primary">Evet</button></form>
                        </div>
                    </div>
                </div>
            </div>

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

                    <table class="table table-striped table-bordered text-center" style="margin-top: 1%">
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
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>


                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01:00 - 06:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-heading">
                    <h2>2. Yurt I. PC Salonu </h2>
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

                    <table class="table table-striped table-bordered text-center" style="margin-top: 1%">
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
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                        </tr>
                        <tr>
                            <td>01:00 - 06:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
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

                    <table class="table table-striped table-bordered text-center" style="margin-top: 1%">
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
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                        </tr>
                        <tr>
                            <td>01:00 - 06:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>

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

                    <table class="table table-striped table-bordered text-center" style="margin-top: 1%">
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
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td>
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

                    <table class="table table-striped table-bordered text-center" style="margin-top: 1%">
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
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
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

                    <table class="table table-striped table-bordered text-center" style="margin-top: 1%">
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
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
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

                    <table class="table table-striped table-bordered text-center" style="margin-top: 1%">
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
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>13:00 - 17:00</td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="badge-danger"></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">
                                <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">
                                    Nöbeti Al :)
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 21:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                        </tr>
                        <tr>
                            <td>21:00 - 01:00</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-green">Şevki Kocadağ</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Ahmet Yurdakul</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
                            <td class="bg-green">Yasin Mısır</td>
                            <td class="bg-info">                                 <a class="btn btn-default" data-toggle="modal" data-target="#nobetOnayModal">                                     Nöbeti Al :)                                 </a>                             </td></td>
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


        <!-- end graphs -->
        </div>
    </div>

<?php
include_once ("footer.php");
?>