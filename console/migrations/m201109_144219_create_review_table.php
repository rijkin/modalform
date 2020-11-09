<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%review}}`.
 */
class m201109_144219_create_review_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%review}}', [
            'id' => $this->primaryKey()->integer->unique,
            'name' => $this->string(255),
            'created_at' => $this->dateTime(),
            'text_body' => $this->text(),
            'product_id' => $this->createIndex($this->integer(11)),

        ]);
        $this->addForeignKey(
            'fk-product-id',
            'product',
            'id',
            'review',
            'id',
            'RESTRICT'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%review}}');
    }
}
