<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%statii}}`.
 */
class m231025_114211_create_statii_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('statii', [
            'id' => $this->primaryKey(),
            'user_id' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'create_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('statii');
    }
}
