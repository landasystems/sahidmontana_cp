<?php
$this->title = $model->title;
?>
<section id="internal-title" class="container" data-background="parallax" style="background-attachment: fixed; background-position: 50% 12px;"> 
    <h1><?= $this->title;?></h1>
    <ol class="breadcrumb">
        <li><a href="<?= Yii::$app->urlManager->createUrl('home'); ?>">Home</a></li> 
        <li class="active"><?php echo $this->title; ?></li> 
    </ol> 
</section>
<div id="post-pages" class="container padding-bottom">
<section id="single-post" class="col-md-9">
    <div class="post-boxes"> 
        <a href="#">
            <img src="<?php echo $model->imgBig; ?>" alt="<?php echo $model->title ?>" class="post-img">
        </a>
        <div class="post-details"> 
            <div class="post-date"><?php echo date("d M Y", strtotime($model->created)); ?></div>
            <div class="post-author">By <a href="#"><?php echo $model->user->username ?></a></div>
        </div> 
        <h4 class="post-title"><a href="#"><?php echo $model->title; ?></a></h4>
        <div class="post-short-desc"> 
            <?php
            echo $model->content;
            ?>    
        </div> 
        <div class="tags-social clearfix"> 
            <div class="post-tags"> 
                <span>Tags: </span> 
                <a href="#" class="tags btn btn-sm primary-colored">Foods</a> 
                <a href="#" class="tags btn btn-sm primary-colored">Sunbathing</a> 
                <a href="#" class="tags btn btn-sm primary-colored">Yoona</a> 
                <a href="#" class="tags btn btn-sm primary-colored">beach</a> 
            </div> 
            <div class="social-icons"> 
                <a href="#" class="facebook"></a>
                <a href="#" class="twitter"></a>
                <a href="#" class="google-plus"></a>
            </div> 
        </div> 
    </div>
</section>