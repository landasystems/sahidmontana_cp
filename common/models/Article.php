<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "acca_article".
 *
 * @property integer $id
 * @property integer $article_category_id
 * @property string $title
 * @property string $content
 * @property string $primary_image
 * @property string $created
 * @property integer $created_user_id
 * @property string $modified
 * @property string $alias
 * @property integer $hits
 * @property integer $publish
 * @property string $keyword
 * @property string $description
 */
class Article extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['article_category_id', 'created_user_id', 'hits', 'publish'], 'integer'],
            [['content', 'alias', 'keyword', 'description'], 'string'],
            [['created', 'modified'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['primary_image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'article_category_id' => 'Article Category ID',
            'title' => '		',
            'content' => 'Content',
            'primary_image' => 'Primary Image',
            'created' => 'Created',
            'created_user_id' => 'Created User ID',
            'modified' => 'Modified',
            'alias' => 'Alias',
            'hits' => 'Hits',
            'publish' => 'Publish',
            'keyword' => 'Keyword',
            'description' => 'Description',
        ];
    }

    public function getImgSmall() {
        if (empty($this->product_photo_id) || empty($this->productPhoto->img)) {
            return Yii::$app->params['urlImg'] . '150x150-noimage.jpg';
        } else {
            return Yii::$app->params['urlImg'] . 'article/' . $this->product_photo_id . '-150x150-' . Yii::$app->landa->urlParsing($this->productPhoto->img);
        }
    }

    public function getImgMedium() {
        if (empty($this->product_photo_id) || empty($this->productPhoto->img)) {
            return Yii::$app->params['urlImg'] . '350x350-noimage.jpg';
        } else {
            return Yii::$app->params['urlImg'] . 'article/' . $this->product_photo_id . '-350x350-' . Yii::$app->landa->urlParsing($this->productPhoto->img);
        }
    }

    public function getImgBig() {
        if (empty($this->product_photo_id) || empty($this->productPhoto->img)) {
            return Yii::$app->params['urlImg'] . '650x650-noimage.jpg';
        } else {
            return Yii::$app->params['urlImg'] . 'article/' . $this->product_photo_id . '-650x650-' . Yii::$app->landa->urlParsing($this->productPhoto->img);
        }
    }

    public function getUrl() {
        if (!isset($this->productCategory->alias)) {
            return '#';
        } else {
            return Yii::$app->urlManager->createUrl('detail/' . $this->productCategory->alias . '/' . $this->alias);
        }
    }

}
