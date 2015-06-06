<ul class=main-menu> 
    <li><a href="<?= Yii::$app->urlManager->createUrl('home') ?>">Home</a></li>
    <li class=has-sub-menu><a href=#>Sahid News</a> 
        <ul> 
            <li><a href="<?= Yii::$app->urlManager->createUrl('news/event') ?>">Event</a></li>
            <li><a href="<?= Yii::$app->urlManager->createUrl('news/news') ?>">News Corner</a></li> 
            <li><a href="<?= Yii::$app->urlManager->createUrl('news/promotion') ?>">Promotion</a></li>
        </ul> 
    </li> 
    <li class=has-sub-menu margin-left><a href=#>Facility</a> 
        <ul> 
            <li><a href="<?= Yii::$app->urlManager->createUrl('facility/room') ?>">Room</a></li> 
            <li><a href="<?= Yii::$app->urlManager->createUrl('facility/restaurant') ?>">Restaurant</a></li>
            <li><a href="<?= Yii::$app->urlManager->createUrl('facility/meeting-and-banquest') ?>">Meeting room</a></li>
        </ul> 
    </li>
    <li class="margin-right"><a href=""></a></li>
    <li ><a href="<?= Yii::$app->urlManager->createUrl('gallery') ?>">Gallery</a></li> 
    <li><a href="<?= Yii::$app->urlManager->createUrl('contact-us') ?>">Contact</a></li>
    <li class=has-sub-menu>
        <a href=#>Sahid Group</a>
        <ul>
            <?php
            foreach ($sahid as $val) {
                $alias = strtolower(str_replace(" ", "-", $val->name));
                echo '<li align="left"><a href="' . Yii::$app->urlManager->createUrl('sahid/' . $alias) . '">' . ucwords(strtolower($val->name)) . '</a></li>';
            }
            ?>
        </ul>
    </li>
</ul>