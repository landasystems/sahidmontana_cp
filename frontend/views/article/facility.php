<?php
$this->title = ucwords(strtolower($group));

use common\models\Article;
use common\models\ArticleCategory;
?>
<section id=agents-boxes class=padding-bottom>
    <h3><span><b><?php echo $this->title; ?></b></span></h3> 
    <div class=container>
        <?php
        foreach ($model as $val) {
            echo '<div class="agent-boxes expand" data-animation=fadeInUp>
                        <div class="agent-box clearfix"> 
                            <div class="agent-pic col-xs-5 col-md-3"> 
                                <img src="' . $val->imgMedium . '" alt="' . $val->title . '" height="250" width="450"> 
                            </div> 
                            <div class="agent-details col-xs-7 col-md-9"> 
                                <div class=name>' . $val->title . '</div> 

                                <div class=description> 
                                    ' . $val->content. '
                                </div> 
                            </div>

                        </div> 
                    </div>';
        }
        ?>

    </div>
</section>
