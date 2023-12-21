<?php

use app\models\profile;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fio',
            'phone',
            'gender',
            'address',
            'email',
            //'user_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, profile $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->user_id]);
                 }
            ],
        ],
    ]); ?>


</div>
