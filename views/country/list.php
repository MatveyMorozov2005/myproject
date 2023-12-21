<?php
?>
<h1>List</h1>


<table class="table">
        <?php foreach ($models as $model): ?>
            <tr>
                <td><?=$model->code?></td>
                <td><?=$model->name?></td>
                <td><?=$model->population?></td>
            </tr>

        <?php endforeach; ?>

</table>