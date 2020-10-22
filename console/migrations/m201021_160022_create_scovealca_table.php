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
       $this->createTable('scovealca', [
           'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
           'email' => $this->string(50)->notNull(),
            'phone' => $this->integer(20)->notNull(),
        ]);
//        $this->execute("ALTER TABLE scovealca DROP COLUMN phone");
//        $this->dropColumn('scovealca','phone');
//        $this->execute("ALTER TABLE scovealca ADD COLUMN  phone varchar(255)");
//        $this->addColumn('scovealca','phone',$this->string(255));


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%scovealca}}');
    }
}
