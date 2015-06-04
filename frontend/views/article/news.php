<?php
$this->title = "News Sahid Montana Hotel";

use common\models\Article;
use common\models\ArticleCategory;
?>
<section id="posts-list" class="col-md-9">
    <?php
    $category = ArticleCategory::find()->where(['parent_id' => '5'])->all();
    $idTag = array();
    foreach ($category as $id) {
        $idTag[] = $id->id;
    }
    $in = implode(",",$idTag);
    $news = Article::find()->where(['IN','article_category_id','(1,9)'])->all();
    echo count($news);
    foreach ($news as $val) {
        echo '<div class="post-boxes"> 
                <a href="single-post.html">
                    <img src="' . $val->imgBig . '" alt="' . $val->title . '" class="post-img">
                </a>
                <div class="post-details"> 
                    <div class="post-date">' . date("d M Y", strtotime($val->created)) . '</div>
                    <div class="post-author">By <a href="#">admin</a></div>
                    <div class="post-comment"><a href="#">No Comment</a></div>
                </div> 
                <h4 class="post-title">
                    <a href="single-post.html">' . $val->title . '</a>
                </h4>
                <div class="post-short-desc"> 
                    ' . substr($val->content, 0, 200) . '
                </div> 
                <a class="read-more btn colored" href="">Read More</a>
            </div>';
    }
    ?>
</section>