<?php

use yii\db\Migration;

/**
 * Class m201021_111210_migrate_motzy
 */
class m201021_111210_migrate_motzy extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201021_111210_migrate_motzy cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201021_111210_migrate_motzy cannot be reverted.\n";

        return false;
    }
    */
}
