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

            <h2 class="text-center">DUYURU İŞLEMLERİ</h2>
            <?php
            foreach ($announcements as $row) {


                ?>
                <div class="modal fade" id="duyuruSil_<?= $row['hash'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Duyuruyu Sil</h4>
                            </div>
                            <div class="modal-body">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?=$row["name"]; ?>
                                    </div>
                                </div>
                                Duyurusunu silmek istiyor musunuz?
                            </div>
                            <div class="modal-footer">
                                <form method="post" action="<?php baseUrl(1,"admin/announcementOperations/delete"); ?>">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Hayır</button>
                                    <input type="hidden" name="announcement" value="<?= $row['hash'] ?>">
                                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none;"/>
                                    <button type="submit" class="btn btn-primary">Evet</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="activity_box" style="min-height:250px">
                <h3>DUYURU EKLE</h3>
                <div class="activity-row activity-row1">
                    <div class="single-bottom" style="margin-top: 2%">
                        <form method="post" action="<?php baseUrl(1,"admin/announcementOperations/add"); ?>">
                            <?php echo validation_errors();
                            ?>
                            <div class="form-group">
                                <label for="txbDuyuruEkle">Duyuru Ekle</label>
                                <textarea class="form-control" name="txbDuyuruEkle" id="txbDuyuruEkle" rows="3" required><?=set_value('txbDuyuruEkle');?></textarea>
                            </div>
                            <div class="form-group text-center">
                                <input class="btn btn-primary" name="btnKaydet" value="EKLE" type="submit"/>
                            </div>
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none;"/>

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
                                <?php
                                foreach ($announcements as $row){


                                ?>
                                <tr>
                                    <td>
                                        <?=$row["name"]?>
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target="#duyuruSil_<?=$row['hash']?>">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </a>
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
