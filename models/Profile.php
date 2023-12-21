<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property string $fio
 * @property string $phone
 * @property string $gender
 * @property string $address
 * @property string|null $user_id
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'phone', 'gender', 'address','user_id',], 'safe'],


        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'fio',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'address' => 'Address',
            'user_id' => 'User ID',
            'email' => 'Email'
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id'=>'user_id']);
    }
}
