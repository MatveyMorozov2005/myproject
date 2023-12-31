<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\profile $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fio',
            'phone',
            'gender',
            'address:ntext',
            'email',
            [
                'attribute' => 'email',
                'format' => 'html',
                'value' => function ($model) {
                    if (!empty($model->user->email)) {
                        return Html::a($model->user->email, 'mailto:'.$model->user->email);
                    } else {
                        return 'Not Set';
                    }
                },
            ],
        ],
    ])
    ?>

</div>
