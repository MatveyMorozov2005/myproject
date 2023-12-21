<?php
/** @var $this \yii\web\View */
?>
<?php if (isset($data) && is_array($data)): ?>
    <h2>Ответ:</h2>

    <style>
        td {
            border: 1px solid #000
        }
    </style>
    <table border="1">
        <tr style="border: solid 1px black">
            <th>State-province</th>
            <th style="border: solid 1px black">Web-pages</th>
            <th>Name</th>
            <th style="border: solid 1px black">Domains</th>
            <th>Code</th>
            <th style="border: solid 1px black">Country</th>
        </tr>

        <?php foreach ($data as $key => $value): ?>
            <?php $i = 0 ?>
            <?php $maxCount = ($value['domains'] > $value['web_pages']) ? count($value['domains']) : count($value['web_pages']); ?>

            <tr>
                <td rowspan="<?= $maxCount ?>"><?= $value['state-province'] ?></td>
                <td><?= $value['web_pages'][$i] ?></td>
                <td rowspan="<?= $maxCount ?>"><?= $value['name'] ?></td>
                <td><?= $value['domains'][$i] ?></td>
                <td rowspan="<?= $maxCount ?>"><?= $value['alpha_two_code'] ?></td>
                <td rowspan="<?= $maxCount ?>"><?= $value['country'] ?></td>
            </tr>

            <?php for ($i = 1; $i < $maxCount; $i++): ?>
                <tr>
                    <td><?= $value['web_pages'][$i] ?></td>
                    <td><?= $value['domains'][$i] ?></td>
                </tr>
            <?php endfor;?>

        <?php endforeach; ?>
    </table>
<?php endif; ?>



