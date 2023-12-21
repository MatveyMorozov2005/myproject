<?php


use app\widgets\HelloWidget;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Отправка HTTP-запроса';
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>
    <img src="https://http.cat/100.jpg" alt="">
    <img src="https://http.cat/101.jpg" alt="">
    <img src="https://http.cat/402.jpg" alt="">
    <img src="https://http.cat/103.jpg" alt="">
    <img src="https://http.cat/201.jpg" alt="">
    <img src="https://http.cat/302.jpg" alt="">
    <img src="https://http.cat/400.jpg" alt="">
    <img src="https://http.cat/404.jpg" alt="">
    <img src="https://http.cat/411.jpg" alt="">

<?php Pjax::begin(['enablePushState' => false]); ?>
<?= Html::a('', ['upvote'], ['class' => 'btn btn-lg btn-warning glyphicon glyphicon-arrow-up']) ?>
<?= Html::a('', ['downvote'], ['class' => 'btn btn-lg btn-primary glyphicon glyphicon-arrow-down']) ?>
    <h1><?= Yii::$app->session->get('votes', 0) ?></h1>
<?php Pjax::end(); ?>

<?= HelloWidget::widget(['data' => $data]); ?>