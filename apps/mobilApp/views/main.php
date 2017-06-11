<?php 
 /**
     * SemTech Co -> E-Learning Project
     * @2016
     * ************ T E A M ************
     * Şevki KOCADAĞ -> bekirsevki@gmail.com
     * Asim Dogan NAMLI -> asim.dogan.namli@gmail.com
     * Okan KAYA -> okankaya93@gmail.com
     * 
     */
include_once("header.php");

if($userId==""){ 

?>
    <section id="sub-header" >
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="subscribe">

                    <h1>Yeni Birşeyler öğrenmek için</h1>
                    <h2 class="hidden-xs">Hadi kayıt olarak veya giriş yaparak öğrenmeye başlayalım!</h2>
                </div>

                <div class="col-md-6 ">
                <div class="subscribe_home">
                    <form method="post" action="login" >
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control style_2" name="lEmail" placeholder="Email" required>
                                    <span class="input-icon"><i class="icon-email"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="password" class="form-control style_2" name="lPassword" placeholder="Şifre" required>
                                    <span class="input-icon"><i class="icon-lock"></i></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                     <input type="submit" name="btnLogin" value="Giriş" class="btn-lg button_fullwidth">
                                </div>
                            <!-- end row -->
                            </div>
                        </div>
                    </form>
                
                <div class="login-or"><hr class="hr-or"><span class="span-or">or</span></div>
                <form method="post" action="register">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control style_2" name="rFirstName" placeholder="İsim" required>
                                <span class="input-icon"><i class="icon-user"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control style_2" name="rLastName" placeholder="Soyisim" required>
                                <span class="input-icon"><i class="icon-user"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="rEmail" class="form-control style_2" placeholder="Email" required>
                                <span class="input-icon"><i class="icon-email"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="password" class="form-control style_2" name="rPassword1" placeholder="Şifre" required>
                                <span class="input-icon"><i class="icon-user"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="password" class="form-control style_2" name="rPassword2" placeholder="Şifre (Yeniden)" required>
                                <span class="input-icon"><i class="icon-user"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" name="btnRegister" value="Kayıt Ol" class="btn-lg button_fullwidth">
                            </div>
                        </div>
                    </div>
                    </form>
                    </div>
                </div>
            </div><!-- End row -->
        </div>
      </section><!-- End sub-header -->
<?php  }
	else if($userId!=""){
?>
        <section id="sub-header" >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Tanıtım Videomuz</h1>
                    <h2>E-Learning</h2>
                    <ul class="list_ok h4">
                        <li>yeni birşeyler <strong>Öğrenmeye</strong> </li>
                        <li>uzman <strong>Olmaya</strong></li>
                        <li>para <strong>Kazanmaya</strong></li>

                    </ul>
                    <h2>yardımcı olur.</h2>
                </div>
                <div class="col-md-6 video">
                    <iframe style="width:550px;height:315px;" src="https://www.youtube.com/embed/vRAgOfvIxlE" frameborder="0" allowfullscreen></iframe>
                </div>
            </div><!-- End row -->
        </div>
      </section><!-- End sub-header -->		
<?php		
	}
?>
    
    <section id="main-features">
    <div class="divider_top_black"></div>
    <div class="container">
        <div class="row">
            <div class=" col-md-10 col-md-offset-1 text-center">
                <h2>Neden E-Learning Projesi?</h2>
                <p class="lead">
                	Uzman eğitmenler, güvenilir sertifikasyon, binlerce ders materyalleri... Bunların hepsine bir paket ile E-Learning'e katılarak sahip olabilirsiniz.
                     <br>
                    
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="feature">
                    <i class="icon-trophy"></i>
                    <h3>Uzman Eğitmenler</h3>
                    <p>
                       Türkiye'deki en iyi eğitmenler
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <i class=" icon-ok-4"></i>
                    <h3>Güvenilir Sertifikasyon</h3>
                    <p>
                       Güvenilir sınav merkezlerinde kursunuzun başarısını ispat edin!
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <i class="icon-user"></i>
                    <h3> +1000 Öğrenci</h3>
                    <p>
						Türkiye'de seçkin öğrenciler ile iletişimde bulunun!
                         </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <i class="icon-video"></i>
                    <h3>+1000 Ders Materyali </h3>
                    <p>
                        İster mobil aygıtlarda ister kişisel bilgisayarınızda sınırsız erişim ile binlerde ders materyali E-Learning'de!</p>
                </div>
            </div>
            </div><!-- End row -->
            </div><!-- End container -->
    </section><!-- End main-features -->
    
    <section id="main_content_gray">
    	<div class="container">
        	<div class="row">
                <div class="col-md-12 text-center">
                    <h2>Popüler Kurslar</h2>

                </div>
            </div><!-- End row -->
        
            <div class="row">

                        <?php 	
                            /**
                             * Courses... 
                             */

                            //include_once("connectionDB.php");
                            //$querySearch="select c.id,c.name,cD.summary,c.catagoryId,cD.ImageURL,c.price from courses c inner join courseDetails cD on c.id=cD.courseId";
                            //$runQuery=mysql_query($querySearch);
                            
                        
                            while(false) // $fetchQuery=mysql_fetch_array($runQuery)
                            {
                                $courseName=$fetchQuery["name"];
                                $courseId=$fetchQuery["id"];
                                $courseSummary=$fetchQuery["summary"];
                                $catagoryId=$fetchQuery["catagoryId"];
                                $courseImageURL=$fetchQuery["ImageURL"];
                                $coursePrice=$fetchQuery["price"];



                                $timeDiffQuery="SELECT DATEDIFF(NOW(),c.date) AS days,c.date,c.id from courses c where c.id=$courseId";
                                $runQueryTimeDiff=mysql_query($timeDiffQuery);
                                while($fetchTimeDiffQuery=mysql_fetch_row($runQueryTimeDiff))
                                {
                                    $timeDiff=$fetchTimeDiffQuery[0];
                                }

                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="col-item">

                                    <div class="photo">
                                        <a href="#"><img src="<?php assetsUrl(); ?><?php echo $courseImageURL; ?>" alt="" /></a>
                                        <?php
                                            $query="select * from catagories where id=$catagoryId";
                                            $runQueryNew=mysql_query($query);
                                            while($fetchQueryNew=mysql_fetch_array($runQueryNew))
                                            {
                                                $catagoryName=$fetchQueryNew["name"];
                                            }
                                         ?>
                                        <div class="cat_row"><a href=" <?php assetsUrl(); ?><?php echo "courseList.php?catagoryId=$catagoryId"; ?>"><?php echo  $catagoryName; ?></a><span class="pull-right"><i class=" icon-clock"></i><?php echo $timeDiff. " days ago"; ?></span></div>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="course_info col-md-12 col-sm-12">
                                                <h4> <?php echo  $courseName; ?></h4>
                                                <p > <?php echo  $courseSummary; ?> </p>
                                                <div class="price text-center"><?php echo $coursePrice; ?></div> 
                                            </div>
                                        </div>
                                        <div class="separator clearfix">

                                            <p > <a href=' <?php assetsUrl(); ?><?php echo "course.php?courseId=$courseId" ?>'><i class=" icon-list"></i> Details</a></p>
                                        </div>
                                    </div>
                               </div>
                            </div>

                        <?php

                            }
                        ?>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                     <a href="courseList" class="button_medium_outline pull-right">Bütün Kursları Gör</a>
                </div>
            </div>
        </div>   <!-- End container -->
    </section><!-- End section gray -->

    <section id="testimonials">
        <div class="container">
            <div class="row">
                <div class='col-md-offset-2 col-md-8 text-center'>
                    <h2>What they say</h2>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-offset-2 col-md-8'>
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        </ol>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="<?php assetsUrl(); ?>img/sevki.jpg" alt="">
                                        </div>
                                        <div class="col-sm-9">
                                            <p>
                                               Hayattaki en iyi şey birşeyler öğrenmektir.
                                            </p>
                                            <small>Şevki Bekir Kocadağ</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
       </section><!-- End testimonials -->

