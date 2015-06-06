<footer id=top-footer> 
    <div id=top-footer-content class=container>
        <div class="widget col-md-3">
            <h4>Find Us</h4>
            <div class="content-box row"> 
                <div class=widget-content>
                    <p> Find us on social media to get more information and update about our service </p>
                    <div class=social-icons> 
                        <a href=# class=facebook></a>
                        <a href=# class=twitter></a>
                        <a href=# class=google-plus></a>
                    </div> 
                </div>
            </div> 
        </div> 
        <div class="widget col-md-3">
            <h4>Recent News</h4>
            <div class="content-box row"> 
                <div class=widget-content>
                    <ul> 
                        <?php
                        foreach ($model as $val) {
                            echo '<li>
                                    <a href="#">
                                        <img src="' . $val->imgSmall . '" alt="' . $val->title . '" class="post-img" height="80"></a>
                                    <a href="#" class="post-title">' . $val->title . '</a> 
                                    <div class=date>' . date("d M Y H:i:s", strtotime($val->created)) . '</div> 
                                </li>';
                        }
                        ?>
                    </ul> 
                </div>
            </div>
        </div> 
        <div class="widget col-md-3">
            <h4>Popular Post</h4>
            <div class="content-box row"> 
                <div class=widget-content>
                    <ul> 
                        <?php
                        foreach ($popular as $val) {
                            echo '<li>
                                    <a href="#">
                                        <img src="' . $val->imgSmall . '" alt="' . $val->title . '" class="post-img" height="80"></a>
                                    <a href="#" class="post-title">' . $val->title . '</a> 
                                    <div class=date>' . date("d M Y H:i:s", strtotime($val->created)) . '</div> 
                                </li>';
                        }
                        ?>
                    </ul> 
                </div>
            </div>
        </div> 
        <div class="widget col-md-3">
            <h4>Sahid Group</h4>
            <div class="content-box row"> 
                <div class=widget-content>
                    <?php
                    foreach ($sahid as $val) {
                        $alias = strtolower(str_replace(" ", "-", $val->name));
                        echo '<a href="' . Yii::$app->urlManager->createUrl('sahid/' . $alias) . '" class="tags btn colored" style="margin: 2px;">' . ucwords(strtolower($val->name)) . '</a>';
                    }
                    ?>
                </div> 
            </div>  
        </div>
    </div> 
</footer> 
<footer id=footer>
    <div id=go-up></div>
    <ul class="footer-menu container"> 
        <li><a href="<?= Yii::$app->urlManager->createUrl('home') ?>">Home</a></li> 
        <li><a href="<?= Yii::$app->urlManager->createUrl('facility/room') ?>">Room</a></li> 
        <li><a href="<?= Yii::$app->urlManager->createUrl('facility/restaurant') ?>">Restaurant</a></li> 
        <li><a href="<?= Yii::$app->urlManager->createUrl('facility/meeting-and-banquest') ?>">Meeting Room</a></li>
        <li><a href="<?= Yii::$app->urlManager->createUrl('gallery') ?>">Gallery</a></li> 
        <li><a href="<?= Yii::$app->urlManager->createUrl('contact') ?>">Contact</a></li>
    </ul> 
    <div class=copyright> &copy; <?php echo date("Y"); ?> Sahid Montana. All Rights Reserved. </div> 
</footer>