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