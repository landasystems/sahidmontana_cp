<section id="agents-boxes" class="padding-bottom">
    <h3><span><b>Sahid Group</b> <?php echo ucwords(strtolower($group)); ?></span></h3> 
    <div class="container"> 
        <?php
        foreach ($model as $val) {
            echo '<div class="agent-boxes minimal col-xs-6 appear-animation fadeInUp appear-animation-visible" data-animation="fadeInUp">
                        <div class="agent-box clearfix"> 
                            <div class="agent-pic col-md-5"> 
                                <img src="' . $val->imgSmall . '" alt="' . $val->title . '">
                            </div>
                            <div class="agent-bottom col-md-7"> 
                                <div class="name">' . $val->title . '</div>
                                <div class="title">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i>
                                </div>
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