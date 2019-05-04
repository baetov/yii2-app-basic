<?php

use yii\db\Migration;

/**
 * Class m190414_105600_user
 */
class m190414_105600_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user',[
            'id'            =>$this->primaryKey(),
            'username'      => $this->string(255)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'auth_key'      => $this->string(255),
            'creator_id'    => $this->integer(),
            'updater_id'    => $this->integer(),
            'created_at'    => $this->integer()->notNull(),
            'updated_at'    => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190414_105600_user cannot be reverted.\n";

        return false;
    }
    */
}
