<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%scovealca}}`.
 */
class m201021_160022_create_scovealca_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%scovealca}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%scovealca}}');
    }
}
