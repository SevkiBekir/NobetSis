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

            <h2 class="text-center">DUYURU İŞLEMLERİ</h2>

            <div class="modal fade" id="duyuruSil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Duyuruyu Sil</h4>
                        </div>
                        <div class="modal-body">
                            Duyuruyu silmek istiyor musunuz?
                        </div>
                        <div class="modal-footer">
                            <form>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Hayır</button>

                                <button type="submit" class="btn btn-primary">Evet</button></form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="activity_box" style="min-height:250px">
                <h3>DUYURU EKLE</h3>
                <div class="activity-row activity-row1">
                    <div class="single-bottom" style="margin-top: 2%">
                        <form method="get">
                            <div class="form-group">
                                <label for="txbDuyuruEkle">Duyuru Ekle</label>
                                <textarea class="form-control" id="txbDuyuruEkle" rows="3"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <input class="btn btn-primary" name="btnKaydet" value="EKLE" type="submit"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="activity_box activity_box1" style="margin-top: 1%">
                <h3>GÜNCEL DUYURULAR</h3>
                <div class="activity-row activity-row1">
                    <div class="single-bottom">
                        <div class="container">
                            <table class="table table-striped table-condensed" style="margin-top: 1%">
                                <thead>
                                <tr class="warning">
                                    <th>Duyurular</th>
                                    <th>Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Deneme bir duyuru
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target="#duyuruSil">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Deneme bir duyuru daha yazdım hadi bakalım. SBK
                                    </td>
                                    <td>
                                        <a href="#">
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