<?php
$this->title = "Sahid Group";
?>
<section id="internal-title" class="container" data-background="parallax" style="background-attachment: fixed; background-position: 50% 12px;"> 
    <h1><?php echo $this->title; ?></h1>
    <ol class="breadcrumb">
        <li><a href="<?= Yii::$app->urlManager->createUrl('home'); ?>">Home</a></li> 
        <li><a href="#">Sahid Group</a></li> 
        <li class="active"><?= ucwords(strtolower($group)); ?></li> 
    </ol> 
</section>
<section id="agents-boxes" class="padding-bottom">
    <!--<h3><span><b>Sahid Group</b> <?php echo ucwords(strtolower($group)); ?></span></h3>--> 
    <div class="container" style="padding:0px;"> 
        <?php
        foreach ($model as $val) {
            echo '<div class="agent-boxes minimal col-xs-6 appear-animation fadeInUp appear-animation-visible" data-animation="fadeInUp">
                        <div class="agent-box clearfix"> 
                            <div class="agent-pic col-md-5"> 
                                <img src="' . $val->imgSmall . '" alt="' . $val->title . '">
                            </div>
                            <div class="agent-bottom col-md-7"> 
                                <div class="name">' . $val->title . '</div>
                                <div class="description"> 
                                   ' . $val->content . '
                                </div> 
                            </div> 
                        </div> 
                    </div>';
        }
        ?>
    </div>
</section>
