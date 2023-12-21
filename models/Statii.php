<?php

namespace app\models;

use MongoDB\BSON\Timestamp;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property timestamp $create_at
 * @property string|null $user_id
 */
class statii extends ActiveRecord
{
    public static function tableName()
    {
        return 'statii';
    }

    public function rules()
    {
        return [
            [['title','user_id', 'content'], 'required'],
            [['content'],'string'],
            [['create_at'], 'safe'],
            [['user_id'],'integer'],
            [['title'],'string','max'=>255],
            [['user_id'],'exist','skipOnError'=>true, 'targetClass'=>User::className(),'targetAttribute'=>['user_id'=>'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'user_id' => 'User_ID',
            'content' => 'Content',
            'create_at'=>'Create AT',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id'=>'user_id']);
    }
    public function behaviors()
    {
        return[
          [
              'class'=>TimestampBehavior::className(),
              'attributes'=>[
                    self::EVENT_BEFORE_INSERT=>['create_at'],
              ],
              'value'=>new Expression('NOW()'),
          ]
        ];
    }
}