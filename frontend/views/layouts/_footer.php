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
        <li><a href="<?= Yii::$app->urlManager->createUrl('home') ?>">Home</a></li> 
        <li><a href="<?= Yii::$app->urlManager->createUrl('news') ?>">News & Events</a></li> 
        <li><a href="<?= Yii::$app->urlManager->createUrl('promotion') ?>">Promotion</a></li> 
        <li><a href="<?= Yii::$app->urlManager->createUrl('room') ?>">Rooms</a></li>
        <li><a href="<?= Yii::$app->urlManager->createUrl('gallery') ?>">Gallery</a></li> 
        <li><a href="<?= Yii::$app->urlManager->createUrl('contact') ?>">Contact</a></li>
    </ul> 
    <div class=copyright> &copy; <?php echo date("Y");?> Sahid Montana. All Rights Reserved. </div> 
</footer>