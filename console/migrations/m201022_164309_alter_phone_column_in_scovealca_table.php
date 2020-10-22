<?php

use yii\db\Migration;

/**
 * Class m201022_164309_alter_phone_column_in_scovealca_table
 */
class m201022_164309_alter_phone_column_in_scovealca_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('scovealca','phone',$this->string(255)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->alterColumn('scovealca','phone',$this->integer(20)->notNull());


    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201022_164309_alter_phone_column_in_scovealca_table cannot be reverted.\n";

        return false;
    }
    */
}
