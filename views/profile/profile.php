<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/**  @var app\models\Country $model */
/** @var ActiveForm $form */
?>
<div class="Profile">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'code') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'population') ?>

        <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Profile -->