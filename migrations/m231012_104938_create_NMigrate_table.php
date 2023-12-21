<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%NMigrate}}`.
 */
class m231012_104938_create_NMigrate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('User', 'status', $this->boolean()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('User', 'status');
    }
}
