<?php

use yii\db\Migration;

/**
 * Class m231011_075242_country
 */
class m231011_075242_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    $this ->createTable('country', [
        'code' => $this->char(2)->notNull(),
        'name' => $this->char(52)->notNull(),
        'population' => $this->integer(11)->notNull()->defaultValue(0),
    ]);
    $this->batchInsert('country',
    ['code','name','population'],
        [
        ['AU','Australia','24016400'],
        ['BR','Brazil','205722000'],
        ['CA','Canada','35985751'],
        ]

    );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('country');
    }
}
