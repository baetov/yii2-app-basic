<?php

use yii\db\Migration;

/**
 * Class m190414_105631_task_user
 */
class m190414_105631_task_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task_user',[
            'id'         => $this->primaryKey(),
            'task_id'    => $this->integer()->notNull(),
            'creator_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('task_user');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190414_105631_task_user cannot be reverted.\n";

        return false;
    }
    */
}
