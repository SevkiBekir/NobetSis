<?php
include_once ("header.php");
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

            <div class="modal fade" id="duyuruSil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Nöbeti Bırak</h4>
                        </div>
                        <div class="modal-body">
                            <div class="alert" role="alert">Nöbeti bırakmak istiyor musunuz?</div>
                            <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-warning-sign"></span> Dikkat bu işlem geri alınamaz!</div>
                        </div>
                        <div class="modal-footer">
                            <form>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Hayır</button>

                                <button type="submit" class="btn btn-primary">Evet</button></form>
                        </div>
                    </div>
                </div>
            </div>

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
                                <tr>
                                    <td>
                                        İsa Demiray Yurdu PC Salonu
                                    </td>
                                    <td>
                                        17/03/2017
                                    </td>
                                    <td>
                                        17:00-21:00
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target="#duyuruSil">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Faika Aksoy Yurdu PC Salonu
                                    </td>
                                    <td>
                                        18/03/2017
                                    </td>
                                    <td>
                                        21:00-01:00
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target="#duyuruSil">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once ("footer.php");
?>