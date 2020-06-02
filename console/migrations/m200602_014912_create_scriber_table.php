<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%scriber}}`.
 */
class m200602_014912_create_scriber_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%scriber}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%scriber}}');
    }
}
