<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $description
 * @property string $created
 * @property integer $created_user_id
 * @property string $modified
 * @property integer $enabled
 * @property string $avatar_img
 * @property integer $roles_id
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['created_user_id', 'enabled','created', 'modified','is_deleted', 'roles_id'], 'integer'],
            [['username', 'phone'], 'string', 'max' => 20],
            [['email', 'avatar_img'], 'string', 'max' => 100],
            [['password', 'name', 'address', 'description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'name' => 'Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'description' => 'Description',
            'created' => 'Created',
            'created_user_id' => 'Created User ID',
            'modified' => 'Modified',
            'enabled' => 'Enabled',
            'avatar_img' => 'Avatar Img',
            'is_deleted' => 'Is delete',
            'roles_id' => 'Roles ID',
        ];
    }
    
    
}
