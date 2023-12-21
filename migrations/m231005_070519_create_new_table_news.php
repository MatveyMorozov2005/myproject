<?php

use yii\db\Migration;

/**
 * Class m231005_070519_create_new_table_news
 */
class m231005_070519_create_new_table_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country3', [
            'id' => $this->primaryKey(),
            'object_id' => $this->integer(),
            'type' => $this->string(255)->notNull(),
            'organization_name' => $this->string(255),
            'adress' => $this->string(255),
            'boxs' => $this->text()->notNull(),
            'area_all' => $this->double()->notNull(),
            'unit' => $this->string(50)->notNull()->defaultValue('h3'),
            'method_id' => $this->integer()->notNull(),
            'type_id' => $this->integer()->notNull(),
            'medicine_name' => $this->string(255)->notNull(),
            'dosage' => $this->string(50)->notNull(),
            'time' => $this->integer(),
            'date_event' => $this->integer()->notNull(),
            'report_date' => $this->integer()->notNull(),
            'create_user_id' => $this->integer()->notNull(),
            'start_processing' =>  $this->string(255),
            'end_processing' => $this->string(255),
            'exposition_time' => $this->time(),


        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('country3');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231005_070519_create_new_table_news cannot be reverted.\n";

        return false;
    }
    */
}
