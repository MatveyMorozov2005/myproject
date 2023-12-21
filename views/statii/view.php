<?php

use yii\helpers\Html;


/** @var $this yii\web\View */
/** @var $model app\models\Statii */

$this->registerCssFile("https://getbootstrap.com/docs/5.3/examples/blog/blog.css");
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'statii', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="statii-view">
       <h1><?= Html::encode($this->title)?></h1>

        <h3><?= Html::encode($model->title) ?></h3>

        <p><?= Html::encode($model->content) ?></p>

    <p>Create at: <?= Html::encode($model->create_at)?></p>

    <p>User: <?= Html::encode($model->user->username)?></p>


</div>