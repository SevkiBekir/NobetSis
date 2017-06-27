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

            <h2 class="text-center">KULLANICI İŞLEMLERİ - <?php echo $user["firstname"]." ".$user["lastname"]; ?></h2>

            <div class="clearfix"></div>
            <div class="activity_box activity_box1" style="margin-top: 1%">
                <h3>Bilgiler</h3>
                <div class="activity-row activity-row1">
                    <div class="single-bottom">
                        <div class="container">
                            <form method="post" action="<?php baseUrl(1,"admin/userOperations/change"); ?>">
                                <table class="table table-condensed" style="margin-top: 1%">
                                    <thead>
                                    <tr class="success">
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Kullanıcı:</td>
                                        <td><?php echo $user["firstname"]." ".$user["lastname"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kullanıcı Türü:</td>
                                        <td>
                                            <select id="lunch" class="selectpicker" data-live-search="true" title="Seçiniz." data-width="100%" name="chbUserTypes">
                                                <?php
                                                foreach ($allUserTypes as $row){
                                                    echo "<option value='".$row['link']."' ";
                                                    echo ($row['link']==$user["userTypeLink"] ? "selected" : "");
                                                    echo ">".$row['name']."</option>";
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="btn btn-danger  btn-block" href="<?php baseUrl(1,"admin/userOperations"); ?>">VAZGEÇ</a>
                                        </td>
                                        <td>
                                            <input type="submit" value="KAYDET" class="btn btn-primary btn-lg btn-block"/>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none;"/>
                                <input type="hidden" name="username" value="<?=$user['username']?>" style="display: none;"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
