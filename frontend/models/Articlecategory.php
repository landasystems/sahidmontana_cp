<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "article_category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $created_user_id
 * @property string $modified
 * @property string $created
 * @property integer $level
 * @property integer $lft
 * @property integer $rgt
 * @property integer $root
 * @property integer $parent_id
 */
class Articlecategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_user_id', 'level', 'lft', 'created','modified','rgt', 'root', 'parent_id'], 'integer'],
            
            [['name'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'created_user_id' => 'Created User ID',
            'modified' => 'Modified',
            'created' => 'Created',
            'level' => 'Level',
            'lft' => 'Lft',
            'rgt' => 'Rgt',
            'root' => 'Root',
            'parent_id' => 'Parent ID',
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
