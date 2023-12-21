<?php

namespace app\models;

use yii\base\Model;

class ProfileForm extends Model
{
    public $fio;
    public $phone;
    public $gender;
    public $address;
    public $user_id;
    public $email;

    public function rules()
    {
        return [
            [['fio', 'gender', 'address', 'phone', 'user_id',], 'safe'],
        ];
    }


    public function formInit($model)
    {
        $this->fio = $model->fio;
        $this->phone = $model->phone;
        $this->gender = $model->gender;
        $this->address = $model->address;
        $this->user_id = $model->user_id;
        $this->email = $model->user->email;

    }


    public function save()
    {
        $profileModel = new Profile();
        $profileModel->fio = $this->fio;
        $profileModel->gender = $this->gender;
        $profileModel->address = $this->address;
        $profileModel->phone = $this->phone;
        $profileModel->user_id = $this->user_id;
        $profileModel->save();
    }

    public function update($profileModel)
    {
        $profileModel->fio = $this->fio;
        $profileModel->gender = $this->gender;
        $profileModel->address = $this->address;
        $profileModel->phone = $this->phone;
        $profileModel->user_id = $this->user_id;
        $profileModel->user->email = $this->email;

        return $profileModel->user->save() && $profileModel->save();

    }
}

