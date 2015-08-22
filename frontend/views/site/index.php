<?php
$this->title = 'Welcome To Sahid Montana Hotel';

use common\models\Article;
?>
<section id=slider>
    <ul class=bxslider> 
        <li> 
            <div class=items style='width:1920px; height:400px;'> 
                <img src="<?php echo Yii::$app->params['sliderImg'] ?>Sliders_1.jpg" alt=2> 
                <div class=caption-box>
                    <h4> <b>Relax</b> in Comfortable Environment</h4> 
                </div> 
            </div>
        </li> 
        <li> 
          <div class=items style='width:1920px; height:400px;'> 
                <img src="<?php echo Yii::$app->params['sliderImg'] ?>Sliders_2.jpg" alt=3> 
               
                <div class=caption-box>
                    <h4> Be <b>Happy</b> in Our Luxury Rooms</h4> 
<!--                    <h4> <b>Enjoy</b> the Sea &amp; Sky
                    </h4>-->
                </div> 
            </div>
        </li> 
        <li> 
            <div class=items style='width:1920px; height:400px;'> 
                <img src="<?php echo Yii::$app->params['sliderImg'] ?>Sliders_3.jpg" alt=4> 
                <div class=caption-box>
                    <h4> Choose your <b>travel partner</b> wisely</h4> 
                </div> 
            </div>
        </li>
    </ul> 
</section>
<section id=main-booking-form> 
    <div id=main-booking-form-container>
        <div class=search-row> 
            <form class="search-form horizontal container" action="http://sahidhotels.com/home/search_hotel" method="post" target="_blank">
                <input type="hidden" name="hotel_id" value="17">
                <div class="search-fields col-xs-6 col-md-3"> 
                    <input placeholder="Arrival" class="datepicker-fields check-in" type=text name="arrival_date">
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="search-fields col-xs-6 col-md-3"> 
                    <input placeholder="Departure" class="datepicker-fields check-out" type=text name="depart_date">
                    <i class="fa fa-calendar"></i> 
                </div>
                <div class="search-fields col-xs-6 col-md-2">
                    <select id=search-field2 name="room"> 
                        <option value>Room</option>
                        <option value=1>1</option> 
                        <option value=2>2</option> 
                        <option value=3>3</option> 
                    </select>
                </div> 
                <div class="search-fields col-xs-6 col-md-2"> 
                    <select id=search-field3 name="adult"> 
                        <option value>Adult</option>
                        <option value=1>1</option> 
                        <option value=2>2</option>
                    </select> 
                </div> 
                <div class="search-fields col-xs-6 col-md-2"> 
                    <select id=search-field3 name="child"> 
                        <option value>Child</option>
                        <option value=0>0</option> 
                        <option value=1>1</option> 
                        <option value=2>2</option>
                    </select> 
                </div>
                <div class=search-button-container> 
                    <input value="Book Now" type=submit>
                </div> 
            </form> 
        </div>
    </div> 
</section>
<div class="background">
<section id=welcome> 
    <h3><span>
            <b>Welcome</b> to Sahid Montana Hotel</span>
    </h3>
    <div class=container> 
        <div class="col-md-4 col-xs-12">
            <center><img style="max-width: 300px;" src="<?= Yii::$app->homeUrl ?>img/topeng.png"></center>
        </div> 
        <div class="service-boxes welcome-text col-md-8 col-xs-12" data-animation=fadeInUp style="color: #000;">
            <?php
            $welcome = Article::find()->where(['id' => '54'])->one();
            echo $welcome->content;
            ?>
        </div> 
    </div> 
</section> 
<section id=rooms class=luxury> 
    <h3 style="margin-bottom: 10px;">
        Promotion
    </h3> 
    <div id=roomLoader class=container style="margin-top:0px;">
        <div class=loader></div>
        <div class=close-icon></div>
        <div id=roomLoader-container></div>

    </div>
    <ul class="property-container container"> 
        <?php
        $meet = Article::find()->where(['article_category_id' => '34'])->orderBy('id DESC')->limit(3)->all();
        foreach ($meet as $val) {
            echo '<li class="property-boxes col-xs-6 col-md-4" data-animation=fadeInLeft data-animation-delay=.2> 
                        <div class=prp-img>
                            <img src="' . $val->imgMedium . '" alt="' . $val->title . '" style="height:240px;">
                        </div> 
                        <div class=prp-detail> 
                            <div class=title>
                                ' . $val->title . '
                            </div>
                            <div class=description style="color:#000">
                                ' . substr($val->content, 0, 100) . '...
                            </div> 
                            <a href="' . Yii::$app->urlManager->createUrl('news/' . $val->alias)  . '" data-room-id=4 class="more-detail btn colored">
                                Details
                            </a>
                        </div>
                    </li>';
        }
        ?>
    </ul> 
</section> 
</div>
<section id=testimonials data-background=parallax> 
    <div id=testimonials-container> <h3>
            <span><b>What</b> They Say</span></h3> 
        <div id=testimonials-content class=container data-animation=fadeInUp> 
            <div id=testimonials-slider class="owl-carousel owl-theme"> 
                <div class=item style="height:200px;"> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/citra.jpg width="100px" height="100px" alt="Paul Bell"> 
                    </div> 
                    <cite>Citra I.</cite>
                    <blockquote> 
                        Sangat menyenangkan karena staff nya sangat membantu dan letaknya strategis. Hotel nya tidak terlalu mahal, rapi dan bagus.
                    </blockquote>

                </div>
                <div class=item style="height:200px;"> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/edi.jpg width="100px" height="100px" alt="Paul Bell"> 
                    </div> 
                    <cite>Eddy R.</cite> 
                    <blockquote> 
                        Berlibur dengan 4 keluarga besar di Montana saat lebaran tahun ini, merupakan suatu yang luar biasa. Apalagi kami berasal dari berbagai kota dan bertemu di Malang. Sungguh hal yang indah.
                    </blockquote> 
                </div> <div class=item style="height:200px;"> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/nur.jpg width="100px" height="100px" alt="Lili Kids"> 
                    </div> <cite>Nur I.</cite> 
                    <blockquote>
                        Dekat dengan stasiun kereta & bandara abdul rachman saleh,kamar bersih,tapi pintu kamar mandi agak rusak,makanan cukup enak,dekat dengan Batu, harga kamar terjangkau, suasana hotel nyaman.
                    </blockquote> 
                </div> 
                <div class=item style="height:200px;"> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/erwin.jpg width="100px" height="100px" alt="Brad Lopez">
                    </div>
                    <cite>Erwin H.</cite> 
                    <blockquote> 
                        Secara menyeluruh, hotel ini baik.  Kelebihan lain adalah hotel ini sangat artistik pada bagian front office, cafe dengan life musik yang cukup baik.
                    </blockquote> 
                </div> 
                <div class=item style="height:200px;"> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/diddy.jpg  width="100px" height="100px" alt="Ryan Oswald"> 
                    </div> 
                    <cite>Diddy B</cite> 
                    <blockquote> 
                        hotel yang tenang , nyaman dan hening sehingga kita bisa lebih relax dan menikmati suasana kota malang yang sejuk dan nyaman untuk menjalankan aktivitas studi.  
                    </blockquote> 
                </div> <div class=item style="height:200px;"> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/heru.jpg width="100px" height="100px" alt="John Barry"> 
                    </div> <cite>Heru B</cite> 
                    <blockquote> 
                        Pengalaman menginap di hotel ini rasanya cukup mengesankan, karena sambutan karyawan dan kebersihan serta tata letak ruangan cukup "apik". Dan enak dipandang mata
                    </blockquote> 
                </div> 
                <div class=item style="height:200px;"> 
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
