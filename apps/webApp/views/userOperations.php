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

            <h2 class="text-center">KULLANICI İŞLEMLERİ</h2>

            <div class="clearfix"></div>
            <div class="activity_box activity_box1" style="margin-top: 1%">
                <h3>BÜTÜN KULLANICILAR</h3>
                <div class="activity-row activity-row1">
                    <div class="single-bottom">
                        <div class="container">
                            <table class="table table-striped table-condensed" style="margin-top: 1%">
                                <thead>
                                <tr class="warning">
                                    <th>Kullanıcılar</th>
                                    <th>Kullanıcı Türü</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($users as $row){

                                ?>
                                <tr>
                                    <td>
                                        <a href="<?php baseUrl(1,"admin/userOperations/show/".$row['username']); ?>"> <?php echo $row["firstname"]." ".$row["lastname"]?></a>
                                    </td>
                                    <td>
                                        <?=$row["userTypeName"]?>
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
