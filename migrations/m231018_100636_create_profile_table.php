<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profile}}`.
 */
class m231018_100636_create_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('profile', [
            'id' => $this->primaryKey(),
            'FIO' => $this->string()->notNull()->unique(),
            'phone' => $this->string(32)->notNull(),
            'gender' => $this->string()->notNull(),
            'adress' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('profile');
    }
}
