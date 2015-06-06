<style>
    li.active{
        background-color: #b19261 !important;
    }
</style>
<?php
$this->title = "News";
?>
<section id="posts-list" class="col-md-9">
    <?php
    foreach ($model as $val) {
        echo '<div class="post-boxes row"> 
              <div class="col-lg-4">
                    <a href="' . Yii::$app->urlManager->createUrl('article/' . $val->alias) . '">
                        <img src="' . $val->imgMedium . '" alt="' . $val->title . '" class="post-img">
                    </a>
               </div>
               <div class="col-lg-8">
                    <h4 class="post-title" style="margin-top: -13px; padding: 0px;">
                        <a href="' . Yii::$app->urlManager->createUrl('article/' . $val->alias) . '">' . $val->title . '</a>
                    </h4>
                    <div class="post-details"> 
                        <div class="post-date">' . date("d M Y H:i:s", strtotime($val->created)) . '</div>
                        <div class="post-author">By <a href="#">' . $val->user->username . '</a></div>
                        <div class="post-comment"><a href="#">No Comment</a></div>
                    </div>
                    <br>
                    <div class="post-short-desc" style="color:#000;" align="justify"> 
                        ' . strip_tags(substr($val->content, 0, 200)) . '...
                    </div> 
                    <a class="read-more btn colored" href="' . Yii::$app->urlManager->createUrl('article/' . $val->alias) . '">Read More</a>
                </div>
            </div>';
    }
    ?>
    <?php
    echo \yii\widgets\LinkPager::widget([
        'pagination' => $pagination,
    ]);
    ?>
</section>