<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "article".
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
class Apparticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_category_id', 'created_user_id', 'hits','created', 'modified', 'publish'], 'integer'],
            [['content', 'alias', 'keyword', 'description'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['primary_image'], 'string', 'max' => 255],
            [['id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_category_id' => 'Article Category ID',
            'title' => 'Title',
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
    
    public function behaviors()
         {
             return [
                 [
                     'class' => BlameableBehavior::className(),
                     'createdByAttribute' => 'created',
                     'updatedByAttribute' => 'modified',
                 ],
                 'timestamp' => [
                     'class' => 'yii\behaviors\TimestampBehavior',
                     'attributes' => [
                         ActiveRecord::EVENT_BEFORE_INSERT => ['created', 'modified'],
                         ActiveRecord::EVENT_BEFORE_UPDATE => ['modified'],
                     ],
                 ],
             ];
         }
    
}
