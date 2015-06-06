<?php
$this->title = 'Welcome To Sahid Montana Hotel';

use common\models\Article;
?>
<section id=slider>
    <ul class=bxslider> 
        <li> 
            <div class=items> 
                <img width="1920px" height="400px" src="<?php echo Yii::$app->params['urlImg'] ?>/slider/2.jpg" alt=2> 
                <div class=caption-box>
                    <h4> Be <b>Happy</b> in Our Luxury Rooms</h4> 
                </div> 
            </div>
        </li> 
        <li> 
            <div class=items> 
                <img width="1920px" height="400px" src="<?php echo Yii::$app->params['urlImg'] ?>/slider/3.jpg" alt=3> 
                <div class=caption-box><h4> <b>Enjoy</b> the Sea &amp; Sky
                    </h4>
                </div> 
            </div>
        </li> 
        <li> <div class=items> 
                <img width="1920px" height="400px" src="<?php echo Yii::$app->params['urlImg'] ?>/slider/4.jpg" alt=4> 
                <div class=caption-box>
                    <h4> <b>Relax</b> in Comfortable Environment</h4> 
                </div> 
            </div>
        </li>
    </ul> 
</section>
<section id=main-booking-form> 
    <div id=main-booking-form-container>
        <div class=search-row> 
            <form class="search-form horizontal container" action=#>
                <div class="search-fields col-xs-6 col-md-3"> 
                    <input placeholder=Check-in class="datepicker-fields check-in" type=text>
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="search-fields col-xs-6 col-md-3"> 
                    <input placeholder=Check-Out class="datepicker-fields check-out" type=text>
                    <i class="fa fa-calendar"></i> 
                </div>
                <div class="search-fields col-xs-6 col-md-3">
                    <select name=room-type id=search-field2> 
                        <option value>Room Type</option>
                        <option value=1>Single Room</option> 
                        <option value=2>Double Room</option> 
                        <option value=3>Deluxe One-bedroom Suite</option> 
                        <option value=4>Deluxe Two-bedroom Suite</option>
                        <option value=5>Royal Suite</option> 
                        <option value=6>King Suite</option> 
                    </select>
                </div> 
                <div class="search-fields col-xs-6 col-md-3"> 
                    <select name=guest id=search-field3> 
                        <option value=1>Guests</option>
                        <option value=2>1</option> 
                        <option value=3>2</option>
                        <option value=4>3</option> 
                        <option value=5>4</option> 
                        <option value=6>5</option> 
                        <option value=7>+6</option> 
                    </select> </div> 
                <div class=search-button-container> 
                    <input value="Book Now" type=submit>
                </div> 
            </form> 
        </div>
    </div> 
</section>
<section id=welcome> 
    <h3><span>
            <b>Welcome</b> to Sahid Montana Hotel</span>
    </h3>
    <div class=container> 
        <div class="service-boxes welcome-text col-md-7 col-xs-12" data-animation=fadeInUp style="color: #000;">
            <?php
            $welcome = Article::find()->where(['article_category_id' => '2'])->one();
            echo $welcome->content;
            ?>
        </div> 
        <div class="service-boxes welcome-gallery col-md-5 col-xs-12" data-animation=fadeInUp> <!-- Welcome Slider --> 
            <ul class=bxslider-welcome> 
                <li> 
                    <div class=items>
                        <img src="<?php echo Yii::$app->params['urlImg'] ?>/service/1.jpg" alt=1>
                    </div>
                </li> 
                <li> 
                    <div class=items>
                        <img src="<?php echo Yii::$app->params['urlImg'] ?>/service/2.jpg" alt=2>
                    </div> 
                </li> 
                <li> 
                    <div class=items>
                        <img src="<?php echo Yii::$app->params['urlImg'] ?>/service/3.jpg" alt=3>
                    </div> 
                </li> 
                <li> 
                    <div class=items>
                        <img src="<?php echo Yii::$app->params['urlImg'] ?>/service/4.jpg" alt=4>
                    </div> 
                </li> 
                <li> 
                    <div class=items>
                        <img src="<?php echo Yii::$app->params['urlImg'] ?>/service/5.jpg" alt=5>
                    </div> 
                </li> 
            </ul> 
        </div> 
    </div> 
</section> 
<section id=rooms class=luxury> 
    <h3>
        <span><b>MEETINGS & BANQUET</b></span>
    </h3> 
    <div id=roomLoader class=container>
        <div class=loader></div>
        <div class=close-icon></div>
        <div id=roomLoader-container></div>

    </div>
    <ul class="property-container container"> 
        <?php
        $meet = Article::find()->where(['article_category_id' => '4'])->orderBy('rand()')->limit(3)->all();
        foreach ($meet as $val) {
            echo '<li class="property-boxes col-xs-6 col-md-4" data-animation=fadeInLeft data-animation-delay=.2> 
                        <div class=prp-img>
                            <img src="' . $val->imgMedium . '" alt="' . $val->title . '">

                        </div> 
                        <div class=prp-detail> 
                            <div class=title>
                                ' . $val->title . '
                            </div>
                            <div class=description style="color:#000">
                                ' . substr($val->content, 0, 100) . '...
                            </div> 
                            <a href=pages/room-detail.html data-room-id=4 class="more-detail btn colored">
                                Details
                            </a>
                        </div>
                    </li>';
        }
        ?>
    </ul> 
</section> 
<section id=testimonials data-background=parallax> 
    <div id=testimonials-container> <h3>
            <span><b>Other</b> Visitor's Experiences</span></h3> 
        <div id=testimonials-content class=container data-animation=fadeInUp> 
            <div id=testimonials-slider class="owl-carousel owl-theme"> 
                <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/citra.jpg width="100px" height="100px" alt="Paul Bell"> 
                    </div> 
                    <cite>Citra I.</cite>
                    <blockquote> 
                    Sangat menyenangkan karena staff nya sangat membantu dan letaknya strategis. Hotel nya tidak terlalu mahal, rapi dan bagus.
                    </blockquote>

                </div>
                <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/edi.jpg width="100px" height="100px" alt="Paul Bell"> 
                    </div> 
                    <cite>Eddy R.</cite> 
                    <blockquote> 
                    Berlibur dengan 4 keluarga besar di Montana saat lebaran tahun ini, merupakan suatu yang luar biasa. Apalagi kami berasal dari berbagai kota dan bertemu di Malang. Sungguh hal yang indah.
                    </blockquote> 
                </div> <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/nur.jpg width="100px" height="100px" alt="Lili Kids"> 
                    </div> <cite>Nur I.</cite> 
                    <blockquote>
                    Dekat dengan stasiun kereta & bandara abdul rachman saleh,kamar bersih,tapi pintu kamar mandi agak rusak,makanan cukup enak,dekat dengan Batu, harga kamar terjangkau, suasana hotel nyaman.
                    </blockquote> 
                </div> 
                <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/erwin.jpg width="100px" height="100px" alt="Brad Lopez">
                    </div>
                    <cite>Erwin H.</cite> 
                    <blockquote> 
                    Secara menyeluruh, hotel ini baik.  Kelebihan lain adalah hotel ini sangat artistik pada bagian front office, cafe dengan life musik yang cukup baik.
                    </blockquote> 
                </div> 
                <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/diddy.jpg  width="100px" height="100px" alt="Ryan Oswald"> 
                    </div> 
                    <cite>Diddy B</cite> 
                    <blockquote> 
                    hotel yang tenang , nyaman dan hening sehingga kita bisa lebih relax dan menikmati suasana kota malang yang sejuk dan nyaman untuk menjalankan aktivitas studi.  
                    </blockquote> 
                </div> <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/heru.jpg width="100px" height="100px" alt="John Barry"> 
                    </div> <cite>Heru B</cite> 
                    <blockquote> 
                    Pengalaman menginap di hotel ini rasanya cukup mengesankan, karena sambutan karyawan dan kebersihan serta tata letak ruangan cukup "apik". Dan enak dipandang mata
                    </blockquote> 
                </div> 
                <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/ririn.jpg width="100px" height="100px"  alt="Kim Boyer"> 
                    </div> <cite>Ririn S</cite> 
                    <blockquote> 
                    saya menginap di Hotel Sahid Montana selama 3Hari 2Malam, Tempatnya sangat strategis karena dekat dengan pasar burung dan pasar bunga, di parkiran belakang banyak kuliner yang dapat kita tetemukan
                    </blockquote> 
                </div> 
               
            </div> 
        </div> 
    </div> 
</section> 
<section id=events class=container> 
    <h3><span><b>Sahid</b> Events</span></h3> 
    <ul class="nav nav-tabs nav-justified" id=tab-type-1>
        <?php
        $event = Article::find()->where('article_category_id = 32')->orderBy('created DESC')->limit(4)->all();
        $delay = 2;
        foreach ($event as $val) {
            echo '<li data-animation=flipInY data-animation-delay=.'.$delay.'>
                        <a href=#event-' . $val->id . ' data-toggle=tab> 
                            <span class=number>
                                <img src="'.$val->imgSmall.'" alt="' . $val->title . '" style="height: 155px;">
                            </span>
                            <span class=title>' . $val->title . '</span>
                        </a> 
                    </li>';
            $delay += 2;
        }
        ?>
    </ul>
    <div id=event-tab-contents class=tab-content data-animation=fadeInUp>
        <?php
        $no = 1;
        foreach ($event as $val) {
            if($no == 1){
                $class = "tab-pane fade in active";
            }else{
                $class = "tab-pane fade";
            }
            echo '<div class="'.$class.'" id=event-' . $val->id . '> 
                    <div class=event-boxes> 
                        <div class="event-box clearfix">
                            <div class="event-pic col-xs-4 col-md-3"> 
                                <img src="'.$val->imgMedium.'" alt="'.$val->title.'">
                            </div>
                            <div class="event-right col-xs-8 col-md-9" style="padding-top:10px;">
                                <div class=name>'.$val->title.'</div>
                                <div class=date></div> 
                                <div class=description> 
                                    ' . strip_tags(substr($val->content, 0, 200)) . '...
                                </div> 
                                <div align="right">
                                <a href="'.Yii::$app->urlManager->createUrl('article/'.$val->alias).'" class="read-more btn colored">More Details</a>
                                </div>
                            </div> 
                        </div> 
                    </div> 
                </div>';
            $no++;
        }
        ?>
    </div> 
</section>