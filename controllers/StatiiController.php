<?php

namespace app\controllers;

use app\models\statii;
use yii\web\Controller;


class StatiiController extends Controller
{

    public function actionForm()
    {
        $model = new Statii;

        if ($model->load(\Yii::$app->request->post()) &&$model->save()) {
            return $this->redirect(['view','id'=>$model->id]);
        } else{
            var_dump($model->getErrors());
            die;
        }
        return $this->render('form',[
            'model' => $model,
        ]);
    }

    public function actionIndex()
    {
        $models = statii::find()->all();
        return $this ->render('index',[
            'models'=>$models,
        ]);
    }


    public function actionView($id)
    {
        $model = statii::findOne($id);

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}