<?php
$this->title = "Sahid Montana | Gallery"
?>
<section id="gallery-page" style="margin-top: 0px;" class="container">
    <ul class="gallery-img-container clearfix">
        <?php
        $files = \yii\helpers\FileHelper::findFiles('../../../backend/www/sahidmontana/images/gallery/');
        if (isset($files[0])) {
            foreach ($files as $index => $file) {
                $name = substr($file, strrpos($file, '/') + 1);
                $title = ucwords(strtolower(str_replace("-", " ", substr($name, 0, -4))));
                echo '<li class="col-xs-6 col-md-3 suite"> 
                            <a href="' . Yii::$app->params['urlImg'] . '/gallery/' . $name . '" title="'.$title.'">
                                <img src="' . Yii::$app->params['urlImg'] . '/gallery/' . $name . '" alt="'.$title.'">
                                <div class=caption>
                                    <span>'.$title.'</span>
                                </div> 
                            </a> 
                        </li> ';
            }
        } else {
            echo "There are no files available for download.";
        }
        ?>
    </ul> 
</section>