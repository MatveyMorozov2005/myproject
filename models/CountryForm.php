<?php

namespace app\models;

use yii\base\Model;
class CountryForm extends Model
{
    public $code;
    public $name;
    public $population;

    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required'],
            ['code', 'string', 'length' => [1, 2]],
            ['name', 'string', 'length' => [1, 52]],
            ['population', 'number'],
            ['population', 'string', 'length' => [1, 11]],
        ];
    }
    public function save(){
        $modal = new Country();
        $modal->code=$this->code;
        $modal->name=$this->name;
        $modal->population=$this->population;
        $modal->save();
    }
}