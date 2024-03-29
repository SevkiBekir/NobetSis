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

            <h2 class="text-center">CEZA İŞLEMLERİ</h2>
            <form method="post" action="<?php baseUrl(1,"moderator/punishmentOperations/add"); ?>">
            <div class="modal fade" id="duyuruSil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Ceza Ver</h4>
                        </div>
                        <div class="modal-body">

                            <div class="alert" role="alert">Ceza işlemini gerçekleştirmek istiyor musunuz?</div>
                            <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-warning-sign"></span> Dikkat bu işlem geri alınamaz!</div>

                        </div>
                        <div class="modal-footer">

                                <button type="button" class="btn btn-default" data-dismiss="modal">Hayır</button>
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none;"/>
                            <button type="submit" class="btn btn-primary">Evet</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="activity_box" style="min-height:250px">
                <h3>CEZA VERME İŞLEMİ</h3>
                <div class="activity-row activity-row1">
                    <div class="single-bottom" style="margin-top: 2%">
                        <form method="get">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="selectOperators">Operatörler</label>
                                            <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%" name="chbOperators">
                                                <?php
                                                foreach ($operators as $row){
                                                    echo "<option value='".$row['username']."'>".$row['firstname']." ".$row['lastname']."</option>";
                                                }
                                                ?>

                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label for="txbDescription">Açıklama</label>
                                            <input style="width: 100%" type="text" class="form-control" id="txbDescription"  name="txbDescription" placeholder="Açıklama" required/>
                                        </div>
                                        <div class="form-group">
                                            <a data-toggle="modal" data-target="#duyuruSil" class="btn btn-primary btn-block">
                                                CEZA VER
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </form>
            <div class="clearfix"></div>
            <div class="activity_box activity_box1" style="margin-top: 1%">
                <h3>GÜNCEL CEZA TABLOSU</h3>
                <div class="activity-row activity-row1">
                    <div class="single-bottom">
                        <div class="container">
                            <table class="table table-striped table-condensed table-hover" style="margin-top: 1%">
                                <thead>
                                <tr class="warning">
                                    <th>Operatörler</th>
                                    <th>Ceza Puanı</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($punishments as $row){

                                ?>
                                <tr>
                                    <td>
                                        <?=$row["firstname"]." ".$row["lastname"]?>
                                    </td>
                                    <td>
                                        <?=$row["punishCount"]?>
                                    </td>

                                </tr>
                                <?php
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
