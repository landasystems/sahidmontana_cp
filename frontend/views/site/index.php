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
                            <img src="' . $val->imgMedium . '" alt="'.$val->title.'">

                        </div> 
                        <div class=prp-detail> 
                            <div class=title>
                                '.$val->title.'
                            </div>
                            <div class=description style="color:#000">
                                '.  substr($val->content, 0, 100).'...
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
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/1.jpg alt="Paul Bell"> 
                    </div> 
                    <cite>Eva Lambert</cite>
                    <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet assumenda consequatur consequuntur cum dicta impedit minima natus necessitatibus nihil, nisi nobis officiis perferendis quo reiciendis rem sed totam, voluptatibus! </blockquote>

                </div>
                <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/2.jpg alt="Paul Bell"> 
                    </div> 
                    <cite>Paul Bell</cite> 
                    <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ad adipisci asperiores commodi dicta earum eligendi fugit maxime modi molestias nihil nisi numquam odit perspiciatis quam quas quos veritatis. Reprehenderit? </blockquote> 
                </div> <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/3.jpg alt="Lili Kids"> 
                    </div> <cite>Lili Kids</cite> 
                    <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, nam ullam. Aperiam consequuntur dignissimos ex exercitationem hic iure. Aliquam architecto asperiores blanditiis cupiditate dolorem eligendi omnis quam qui sed tempora! </blockquote> 
                </div> 
                <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/4.jpg alt="Brad Lopez">
                    </div>
                    <cite>Brad Lopez</cite> 
                    <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, nam ullam. Aperiam consequuntur dignissimos ex exercitationem hic iure. Aliquam architecto asperiores blanditiis cupiditate dolorem eligendi omnis quam qui sed tempora! </blockquote> 
                </div> 
                <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/5.jpg alt="Ryan Oswald"> 
                    </div> 
                    <cite>Ryan Oswald</cite> 
                    <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore minus optio quibusdam saepe ullam! Consectetur eos explicabo facere, fugit in inventore ipsam optio perferendis praesentium ratione reiciendis sint tenetur unde. </blockquote> 
                </div> <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/6.jpg alt="John Barry"> 
                    </div> <cite>John Barry</cite> 
                    <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut expedita inventore itaque laborum molestiae nulla odit, pariatur quaerat totam, veritatis voluptate. Commodi doloremque dolorum exercitationem explicabo natus, nemo praesentium. </blockquote> 
                </div> 
                <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/7.jpg alt="Kim Boyer"> 
                    </div> <cite>Kim Boyer</cite> 
                    <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eveniet ex ipsum magni natus omnis saepe veniam. Consectetur iure maiores odio odit vel! Consequuntur exercitationem iure perspiciatis possimus praesentium quam. </blockquote> 
                </div> 
                <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/8.jpg alt="Leon River"> 
                    </div> 
                    <cite>Leon River</cite> 
                    <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nobis provident? Accusamus aperiam debitis dignissimos enim esse ex fugiat harum incidunt itaque, minima nihil optio quas quidem, rem sapiente temporibus? </blockquote> 
                </div> <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/9.jpg alt="Zoe Pierre">
                    </div> 
                    <cite>Zoe Pierre</cite> 
                    <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aperiam asperiores blanditiis consequatur eligendi eveniet ipsam laboriosam maiores officiis omnis possimus, quod saepe, similique sunt vel vero! Amet, distinctio? </blockquote> 
                </div> <div class=item> 
                    <div class=client-pic> 
                        <img src=<?= Yii::$app->homeUrl ?>img/clients/10.jpg alt="Taylor Williams"> 
                    </div>
                    <cite>Taylor Williams</cite> 
                    <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab ad amet, aspernatur cupiditate deleniti dolorem doloribus ducimus error, ex ipsam laboriosam nemo perspiciatis quo repellendus veniam veritatis voluptate, voluptatem. </blockquote> 
                </div>
            </div> 
        </div> 
    </div> 
</section> 
<section id=events class=container> 
    <h3><span><b>Upcoming</b> Events</span></h3> 
    <ul class="nav nav-tabs nav-justified" id=tab-type-1>
        <li data-animation=flipInY data-animation-delay=.2 class=active>
            <a href=#event-1 data-toggle=tab> 
                <span class=number>
                    <img src=<?= Yii::$app->homeUrl ?>img/events/2.jpg alt="Event 1">
                </span>
                <span class=title>Jewelery Fair</span>
            </a> 
        </li> 
        <li data-animation=flipInY data-animation-delay=.4> 
            <a href=#event-2 data-toggle=tab> 
                <span class=number>
                    <img src=<?= Yii::$app->homeUrl ?>img/events/4.jpg alt="Event 1">
                </span>
                <span class=title>Conference</span> 
            </a> 
        </li>
        <li data-animation=flipInY data-animation-delay=.6>
            <a href=#event-3 data-toggle=tab> 
                <span class=number>
                    <img src=<?= Yii::$app->homeUrl ?>img/events/3.jpg alt="Event 1">
                </span>
                <span class=title>Music Concert</span> 
            </a> 
        </li> 
        <li data-animation=flipInY data-animation-delay=.8> 
            <a href=#event-4 data-toggle=tab> 
                <span class=number>
                    <img src=<?= Yii::$app->homeUrl ?>img/events/1.jpg alt="Event 1">
                </span>
                <span class=title>Fashion Show</span>
            </a> 
        </li> 
    </ul>
    <div id=event-tab-contents class=tab-content data-animation=fadeInUp>
        <div class="tab-pane fade in active" id=event-1> 
            <div class=event-boxes> 
                <div class="event-box clearfix">
                    <div class="event-pic col-xs-4 col-md-3"> 
                        <img src=<?= Yii::$app->homeUrl ?>img/events/2.jpg alt=Director>
                    </div>
                    <div class="event-right col-xs-8 col-md-9">
                        <div class=name>Jewelery Fair</div>
                        <div class=date>13 August - 20 August</div> 
                        <div class=description> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci aliquam, commodi corporis, doloremque eius facere ipsa maiores non nostrum quae, quas quod reprehenderit rerum sequi suscipit totam veniam vitae?</p> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, dignissimos enim eum facere inventore sed velit! A assumenda doloremque dolores nesciunt reiciendis, repellat rerum soluta tenetur. Dignissimos hic, tenetur.</p> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque doloribus esse facere ipsam mollitia omnis quae sapiente voluptatibus! Aspernatur cupiditate debitis dolore facere harum ipsa necessitatibus odit rem unde voluptate?</p> </div> 
                        <a href=forms/booking.html class="book-now btn btn-sm colored">Book Now</a>
                    </div> 
                </div> 
            </div> 
        </div> 
        <div class="tab-pane fade" id=event-2> 
            <div class=event-boxes> 
                <div class="event-box clearfix">
                    <div class="event-pic col-xs-4 col-md-3"> 
                        <img src=<?= Yii::$app->homeUrl ?>img/events/4.jpg alt=Director>
                    </div> 
                    <div class="event-right col-xs-8 col-md-9"> 
                        <div class=name>Conference</div>
                        <div class=date>13 August - 20 August</div>
                        <div class=description>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium laborum maxime optio vel? Autem beatae dolore eum eveniet, expedita magni modi molestiae molestias neque porro quae qui vitae voluptates.</p> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, hic, provident? Harum impedit libero rerum ut vero. Consequatur dolores exercitationem illo minus nihil pariatur quae reiciendis. Consequatur rem sequi sint?</p> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto deleniti et ipsam itaque molestias necessitatibus neque similique voluptatem voluptatibus. At blanditiis ex expedita nostrum nulla quisquam rerum tenetur totam.</p> 
                        </div> 
                        <a href=forms/booking.html class="book-now btn btn-sm colored">Book Now</a><!-- event's Booking button --> 
                    </div> 
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id=event-3> 
            <div class=event-boxes> 
                <div class="event-box clearfix">
                    <div class="event-pic col-xs-4 col-md-3"> 
                        <img src=<?= Yii::$app->homeUrl ?>img/events/3.jpg alt=Director>
                    </div> 
                    <div class="event-right col-xs-8 col-md-9"> 
                        <div class=name>Music Concert</div>
                        <div class=date>13 August - 20 August</div>
                        <div class=description>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur debitis dignissimos eaque, et fugiat id magnam mollitia perspiciatis praesentium quibusdam sint temporibus totam voluptatibus. Aliquid eius numquam sint veritatis voluptatum!</p> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis dolore eos eveniet id ipsa maiores modi molestias odit optio perferendis possimus quasi, quos sunt velit? Autem consequatur enim nostrum?</p> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi, at eius eum incidunt libero maxime minus, nesciunt nostrum officiis omnis quis, quod similique soluta vero. Corporis ea molestias omnis.</p> 
                        </div> 
                        <a href=forms/booking.html class="book-now btn btn-sm colored">Book Now</a>
                    </div>
                </div> 
            </div>
        </div>
        <div class="tab-pane fade" id=event-4> 
            <div class=event-boxes> 
                <div class="event-box clearfix">
                    <div class="event-pic col-xs-4 col-md-3"> 
                        <img src=<?= Yii::$app->homeUrl ?>img/events/1.jpg alt=Director>
                    </div> 
                    <div class="event-right col-xs-8 col-md-9"> 
                        <div class=name>Fashion Show</div>
                        <div class=date>13 August - 20 August</div>
                        <div class=description>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate distinctio dolorum exercitationem facilis illo, impedit magnam magni nesciunt nisi, nobis porro praesentium quisquam quod rerum velit veniam voluptas voluptatem.</p> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci maxime, voluptatibus. A accusantium aliquid aperiam cum dolore, earum esse hic iusto necessitatibus odit officia porro, repellendus sit suscipit ut voluptatum!</p> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem deserunt dicta illo ipsam libero necessitatibus possimus provident quia? Aut blanditiis doloribus et illum minus molestiae provident quibusdam quidem vel.</p> </div>
                        <a href=forms/booking.html class="book-now btn btn-sm colored">Book Now</a><!-- event's Booking button --> </div> 
                </div>
            </div>
        </div> 
    </div> 
</section>