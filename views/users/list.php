<?php

use yii\helpers\Html;

foreach ($users as $user): ?>
    <div>
        <span><?= $user->username ?></span>
        <?= Html::a('Деактивировать', ['deactivate', 'id' => $user->id], ['class' => 'btn btn-danger']) ?>
    </div>
<?php endforeach; ?>


<table>
    <tr>
        <th>Имя</th>>
        <th>Статус</th>>
        <th>Действие</th>>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
    <td><?= $user->username ?></td>
    <td><?= $user->status ?></td>

    <td>
        <?php if ($user->status == 'active'): ?>
        <a href="<?= Yii::$app->urlManager->createUrl(['users/deactivate', 'id' =>$user->id])?>"> Деактивировать </a>

        <?php else: ?>
        <a href="<?= Yii::$app->urlManager->createUrl(['users/activate', 'id' =>$user->id])?>"> Активировать </a>
        <?php endif; ?>
    </td>
    </tr>

    <?php endforeach; ?>
</table>
<?= Html::a('Профиль', ['/profile', 'id' => $user->id], ['class' => 'btn btn-primary']); ?>
<?=Html::a('Создать статью', ['statii/form'], ['class' => 'btn btn-success']); ?>
<?= Html::a('Мои статьи', ['statii/view']) ?>
