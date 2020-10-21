<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%scovealca}}`.
 */
class m201021_160719_drop_scovealca_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%scovealca}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%scovealca}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'email' => $this->string(50),
            'phone' => $this->int(20),
        ]);
    }
}
