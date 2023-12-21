<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\profile $model */
/** @var ActiveForm $form */
?>
<div class="Forma">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'fio') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'address') ?>

    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Forma -->
