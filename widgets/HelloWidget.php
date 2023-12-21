<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget extends Widget
{
    public $data;



    public function run()
    {
        return $this->render('hello',['data'=>$this->data]);
    }
    public function actionTime()
    {
        return $this->render('time-date', ['response' => date('H:i:s')]);
    }

    public function actionDate()
    {
        return $this->render('time-date', ['response' => date('d.m.Y')]);
    }
}
